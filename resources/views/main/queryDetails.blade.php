@extends('main.layouts.main')
@section('title', 'Open Query')
@section('home', 'active')
@section('content')
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
        <h2>{{$query->title}}</h2>
        <p>{!!$query->desc!!}</p>

        <div class="query-info">
            <div class="query-vote">
                <i class="fa fa-chevron-up"></i>
                <span class="vote">{{$query->votes}}</span>
                <i class="fa fa-chevron-down"></i>
            </div>
            <div class="askedBy">{{"@".$query->username}}</div>
        </div>
    </div>

    <form class="post-comment">
        @csrf
        <h3>Post Comment</h3>
        <textarea name="comment" id="comment"></textarea>
        <button class="btn default-btn">Post</button>
    </form>

    <div class="recent-comments">
        <h3>Recent Comments</h3>
        <div class="single-comment">
            <div class="username">@renu8452</div>
            <div class="reply">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aperiam unde eaque
                    corporis ea magnam veniam accusantium tempora dolor deleniti?</span>
            </div>
        </div>
        <div class="single-comment">
            <div class="username">@vin248</div>
            <div class="reply">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur </span>
            </div>
        </div>
        <div class="single-comment">
            <div class="username">@raman72</div>
            <div class="reply">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aperiam unde eaque
                    corporis ea magnam veniam accusantium tempora dolor deleniti? Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit. Minus, explicabo rem labore beatae tenetur ad?</span>
            </div>
        </div>
        <div class="single-comment">
            <div class="username">@renu8452</div>
            <div class="reply">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aperiam unde eaque
                    corporis ea magnam veniam</span>
            </div>
        </div>

    </div>

</div>
@endsection