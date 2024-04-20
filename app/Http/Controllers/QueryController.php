<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use App\Models\Comment;
use App\Models\Vote;
use App\Models\User;
use Str;
use Session;

class QueryController extends Controller
{
    public function addQuery(Request $req) {
        $req->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'tags' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        $qid = Str::random(24);
        while (Query::where('qid', $qid)->exists()) {
            $qid = Str::random(24);
        }

        $query = new Query;
        $query->qid = $qid;
        $query->title = $req->title;
        $query->desc = $req->desc;
        $query->tags = $req->tags;
        $query->added_by = Session::get('id');
        $query->status = $req->status;
        $query->save();
        if($req->status == 1) {
            session()->flash('success', "Congratulations! Query published successfully.");
        }
        else {
            session()->flash('success', "Congratulations! Query saved into draft successfully.");

        }
        return redirect()->back();
    }

    public function findByTagName($tag) {
        $tag = trim($tag);
        $pattern = "%," . $tag . ",%";
        $queries = Query::where('tags', 'LIKE', $pattern) 
                        ->orWhere(function($query) use ($tag) {
                            $query->where('tags', 'LIKE', $tag . ",%")
                                  ->orWhere('tags', 'LIKE', "%," . $tag);
                        })
                        ->where('queries.status', '=', 1)
                        ->join('users', 'queries.added_by', '=', 'users.id')
                        ->orderBy('queries.created_at', 'desc')
                        ->get(['queries.*', 'users.username as username']);
        return view('main.queryResults', compact('queries'));
    }
    public function findByUsername($username) {
        $cleanedUsername = ltrim($username, '@');

        $user = User::where('username', $cleanedUsername)->first();
    
        $queries = collect();
    
        if ($user) {
            // Retrieve queries associated with the user
            $queries = \App\Models\Query::where('added_by', $user->id)
            ->join('users', 'queries.added_by', '=', 'users.id')
            ->where('queries.status', '=', 1)
                                        ->orderBy('queries.created_at', 'desc')
                                        ->get(['queries.*', 'users.username as username']);
        }
    
        return view('main.queryResults', compact('queries'));
    }
    public function publishQuery($qid) {
        $query = Query::where('qid', $qid)->where('added_by', Session::get('id'))->where('status', 0)->first();
        if($query) {
            $query->status = 1;
            $query->save();
            session::flash('msg', "Query published successfully.");
        }
        else {
            session::flash('msg', "Unknown error occured!");
        }
        return redirect()->back();
    }

    public function openQuery($qid) {
        $isMine = "no";
        $adminVotted = 0;
    
        $query = Query::with(['user', 'comments' => function($query) {
            $query->orderBy('created_at', 'desc'); 
        }])
        ->where('qid', $qid)
        ->first();
    
        $userVote = null;
        if($query->added_by == Session::get('id')) {
            $isMine = "yes";
        }
        if (Session::has('id')) {
            $userVote = Vote::where('added_by', Session::get('id'))
                          ->where('qid', $qid)
                          ->first();
        }
        $checkAdminVote = Vote::where('added_by', $query->added_by)
                              ->where('qid', $qid)
                              ->first();
        if($checkAdminVote) {
            $adminVotted = $checkAdminVote->type;
        }
        return view('main.queryDetails', compact('query', 'userVote', 'isMine', 'adminVotted'));
    }
    
    
    public function postComment(Request $req) {
        $req->validate([
            'comment'=> 'required',
        ]);

        $cid = Str::random(14);
        while (Comment::where('cid', $cid)->exists()) {
            $cid = Str::random(14);
        }
        $comment = new Comment();
        $comment->cid = $cid;
        $comment->qid = $req->qid;
        $comment->comment = $req->comment;
        $comment->added_by = Session::get('id');
        $comment->save();
        session()->flash('success', "Comment added successfully.");
        return redirect()->back();
    }
    public function voteQuery(Request $req) {
        // First check vote
        $query = Query::where('qid', $req->qid)->first();
       
        $check = Vote::where('added_by', Session::get('id'))->where('qid', $req->qid)->first();
        if(!$check) {
       $vote = new Vote();
       $vote->qid = $req->qid;
       $vote->type = $req->type;
       $vote->added_by = Session::get('id');
       $vote->save();
       if($req->type == "-1") {
        $query->votes = $query->votes - 1;
        }
        else if($req->type == "1") {
            $query->votes = $query->votes + 1;
        }
            }
            else {
                $check->type = $req->type;
                $check->save();
                if($req->type == "-1") {
                    $query->votes = $query->votes - 2;
                }
                else if($req->type == "1") {
                    $query->votes = $query->votes + 2;
                }
            }
            $query->save();
        echo $query->votes;
        
    }

    public function cancelVote(Request $req) {
        $vote = Vote::where('added_by', Session::get('id'))->where('qid', $req->qid)->first();
        $query = Query::where('qid', $req->qid)->first();
        if($vote) {

            $voteType = $vote->type;
            if($voteType == "-1") {
                $query->votes = $query->votes + 1;
            }
            else if($voteType == "1") {
                $query->votes = $query->votes - 1;
            }
            $vote->delete();
        }
        $query->save();
        echo $query->votes;
    }
}