@extends('main.layouts.main')
@section('title', 'Top Tags')
@section('topTags', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Top tags</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Top tags</span>
        </div>
    </div>

    <div class="top-tags">
        <div class="single-tag">
            <a href="#">Development</a>
            <span class="questions">693 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">MERN Stack</a>
            <span class="questions">591 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Mysql</a>
            <span class="questions">553 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Database</a>
            <span class="questions">499 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Server</a>
            <span class="questions">498 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">React js</a>
            <span class="questions">411 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Javascript</a>
            <span class="questions">404 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Python</a>
            <span class="questions">314 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Node</a>
            <span class="questions">296 questions</span>
        </div>
        <div class="single-tag">
            <a href="#">Mongo DB</a>
            <span class="questions">211 questions</span>
        </div>
    </div>
</div>
@endsection