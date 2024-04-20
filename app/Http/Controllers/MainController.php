<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use App\Models\Comment;
use Session;

class MainController extends Controller
{
    public function index() {
        $queries = Query::join('users', 'queries.added_by', '=', 'users.id')
        ->where('queries.status', 1)  
        ->orderBy('created_at', 'desc')  
        ->limit(5) 
        ->get(['queries.*', 'users.username as username']);

        return view('main.index', compact('queries'));
    }
    public function draft()  {
        $queries = Query::where('added_by',Session::get('id'))->orderBy('created_at', 'desc')->where('status', 0)->get();
        return view('main.draft', compact('queries'));
    }
    public function topTags()  {

        $queries = Query::where('status', 1)->get(); // Assuming Query model fetches all query entries
        $tagCounts = [];
    
        foreach ($queries as $query) {
            $tags = explode(',', $query->tags); 
            foreach ($tags as $tag) {
                $tag = trim($tag); 
                if (!empty($tag)) {
                    if (!isset($tagCounts[$tag])) {
                        $tagCounts[$tag] = 0;
                    }
                    $tagCounts[$tag]++;
                }
            }
        }
    
        arsort($tagCounts); 
        $topTags = array_slice($tagCounts, 0, 10, true);

        return view('main.topTags', ['topTags' => $topTags]);
    }
    public function activity()  {
        return view('main.acitvity');
    }
    public function topQueries() {
        $queries = Query::join('users', 'queries.added_by', '=', 'users.id')
                        ->where('queries.status', 1)
                        ->orderBy('queries.votes', 'desc') // Order by the vote column
                        ->orderBy('queries.created_at', 'desc') // Secondary order by creation date
                        ->limit(5)
                        ->get(['queries.*', 'users.username as username']);
    
        return view('main.topQueries', compact('queries'));
    }
    

    
    public function account()  {
        return view('main.account');
    }
    public function subscription()  {
        return view('main.subscription');
    }
    public function myQueries()  {
        $queries = Query::where('added_by',Session::get('id'))->orderBy('created_at', 'desc')->where('status', 1)->get();
        return view('main.myQueries', compact('queries'));
    }
    public function myResponses()
    {
        $uniqueQueryIds = Comment::where('added_by', Session::get('id'))
                                 ->pluck('qid')
                                 ->unique();
    
        $queries = Query::whereIn('qid', $uniqueQueryIds)
                        ->with(['comments' => function($query) {
                            $query->where('added_by', Session::get('id'));
                        }, 'user'])->orderBy('created_at' ,'desc')
                        ->get();
        return view('main.myResponses', compact('queries'));
    }
}