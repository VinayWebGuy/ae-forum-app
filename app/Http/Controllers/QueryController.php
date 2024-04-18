<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
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
        
         session()->flash('success', "Congratulations! Query Published Successfully.");
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
        $query = Query::where('qid', $qid)->join('users', 'queries.added_by', '=', 'users.id')
        ->where('queries.status', 1)->where('queries.status', 1)->first(['queries.*', 'users.username as username']);
        return view('main.queryDetails', compact('query'));
    }
    
    
}