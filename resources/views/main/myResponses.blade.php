@extends('main.layouts.main')
@section('title', 'My Responses')
@section('myResponses', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>My responses</h3>
        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>My responses</span>
        </div>
    </div>

    <div class="my-responses">
        @foreach($queries as $query)
        <div class="single-response">
            <div class="single-query">
                <div class="query-vote">
                    <span class="vote voteCount">{{ $query->votes ?? 0 }}</span>
                </div>
                <a href="{{url('/main/query/'.$query->qid)}}" class="query-details">
                    <div class="query-title">{{ $query->title }}</div>
                    <div class="query-desc">{!! truncateText($query->desc) !!}</div>
                    <div class="query-askedBy">{{"@".$query->user->username}}</div>
                </a>
            </div>
            @foreach($query->comments as $comment)
            <div class="my-response">
                <i class="fa fa-reply"></i>
                <span>{!! nl2br(formatText($comment->comment)) !!}</span>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection