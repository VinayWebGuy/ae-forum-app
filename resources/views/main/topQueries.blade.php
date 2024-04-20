@extends('main.layouts.main')
@section('title', 'Top Queries')
@section('topQueries', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Top queries</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Top queries</span>
        </div>

    </div>
    <div class="top-queries">
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
                <div class="query-askedBy">{{"@".$q->username}}</div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection