@extends('main.layouts.main')
@section('title', 'My Queries')
@section('myQueries', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>My queries</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>My queries</span>
        </div>
    </div>
    @if(count($queries) > 0)
    <div class="my-queries">
        @foreach($queries as $q)
        <div class="single-query">
            <div class="query-vote">
                <!-- <i class="fa fa-chevron-up"></i> -->
                <span class="vote voteCount">{{$q->votes}}</span>
                <!-- <i class="fa fa-chevron-down"></i> -->
            </div>
            <a href="{{url('/main/query/'.$q->qid)}}" class="query-details">
                <div class="query-title">{{$q->title}}</div>
                <div class="query-desc">{{truncateText($q->desc)}}</div>
            </a>
        </div>
        @endforeach

    </div>
    @else
    <div class="no-data">You haven't aksed any query yet.
        <a href="/main">Ask now</a>
    </div>
    @endif
</div>
@endsection