@extends('main.layouts.main')
@section('title', 'Query Results')
@section('home', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Query results</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Query results</span>
        </div>
    </div>
    @if(count($queries) > 0)
    <div class="my-queries">
        @foreach($queries as $q)
        <div class="single-query">
            <div class="query-vote">
                <i class="fa fa-chevron-up"></i>
                <span class="vote">{{$q->votes}}</span>
                <i class="fa fa-chevron-down"></i>
            </div>
            <a href="{{url('/main/query/'.$q->qid)}}" class="query-details">
                <div class="query-title">{{$q->title}}</div>
                <div class="query-desc">{{$q->desc}}</div>
                <div class="query-askedBy">{{"@".$q->username}}</div>
            </a>
        </div>
        @endforeach

    </div>
    @else
    <div class="no-data">No query found!
        <a href="/main">Ask now</a>
    </div>
    @endif
</div>
@endsection