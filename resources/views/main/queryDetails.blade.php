@extends('main.layouts.main')
@section('title', 'Open Query')
@section('home', 'active')
@section('content')
@php
$tags = explode(",",$query->tags);
@endphp
<div class="content">
    <div class="page-info">
        <h3>Query details</h3>
        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Query</span>
            <i class="fa fa-chevron-right"></i>
            <span>Query details</span>
        </div>
    </div>

    <div class="query-details">
        <h2>{{ $query->title }} @if($adminVotted == 1)<span class="adminStatus approved"><i
                    class="fa fa-check"></i></span> @elseif($adminVotted == -1)<span class="adminStatus denied"><i
                    class="fa fa-times"></i></span>
            @endif</h2>
        <p>{!! nl2br(formatText($query->desc)) !!}</p>
        <div class="tags">
            @foreach($tags as $tag)
            <a href="{{url('/main/tag/'.$tag)}}" class="single-tag">{{$tag}}</a>
            @endforeach
        </div>
        <div class="query-info">
            <div class="query-vote">
                @if($userVote)
                <i class="voteMe fa fa-chevron-up {{ $userVote->type == 1 ? 'active' : 'vote-query' }}"
                    data-id="{{$query->qid}}" data-type="1"></i>
                <span id="vote-{{$query->qid}}" class="vote">{{ $query->votes }} <i
                        class="fa fa-chevron-right cancelvote " data-id="{{$query->qid}}"></i></span>
                <i class="voteMe fa fa-chevron-down {{ $userVote->type == -1 ? 'active' : 'vote-query' }}"
                    data-id="{{$query->qid}}" data-type="-1"></i>
                @else
                <i class="voteMe vote-query fa fa-chevron-up" data-id="{{$query->qid}}" data-type="1"></i>
                <span id="vote-{{$query->qid}}" class="vote">{{ $query->votes }}</span>
                <i class="voteMe vote-query fa fa-chevron-down" data-id="{{$query->qid}}" data-type="-1"></i>
                @endif
            </div>
            @if($isMine == "no")
            <a href="{{url('/main/user/@'.$query->user->username)}}"
                class="askedBy">{{ "@" . $query->user->username }}</a>
            @else

            <div class="queryAction">
                <button class="btn outline-btn">Edit</button>
                <button class="btn default-btn">Delete</button>
            </div>


            @endif
        </div>
    </div>

    <form class="post-comment" action="{{ route('main.postComment') }}" method="post">
        @csrf
        <h3>Post Comment</h3>
        <input type="hidden" name="qid" value="{{ $query->qid }}">
        <textarea name="comment" id="comment"></textarea>
        @error('comment') <span class="query-error">{{ $message }}</span> @enderror
        <button class="btn default-btn">Post</button>
    </form>

    <div class="recent-comments">
        <h3>Recent Comments</h3>
        @forelse ($query->comments as $comment)
        <div class="single-comment">
            <a href="{{url('main/user/@'.$comment->user->username)}}"
                class="username">{{ "@" . $comment->user->username }}</a>
            <div class="reply">
                <i class="fa fa-reply"></i>
                <span>{!! nl2br(formatText($comment->comment)) !!}</span>
            </div>
        </div>
        @empty
        <p>No comments yet.</p>
        @endforelse
    </div>
</div>

@if (Session::has('success'))
<div class="toastr active">
    <p>{{ Session::get('success') }}</p>
    <div class="toastr-time"></div>
</div>
<script>
setTimeout(() => {
    document.querySelectorAll('.toastr').forEach(element => {
        element.classList.remove('active');
    });
}, 2900);
</script>
@endif
@endsection