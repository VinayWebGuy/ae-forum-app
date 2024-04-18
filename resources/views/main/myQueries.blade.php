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
    <div class="my-queries">
        <div class="single-query">
            <div class="query-vote">
                <i class="fa fa-chevron-up active"></i>
                <span class="vote">12</span>
                <i class="fa fa-chevron-down"></i>
            </div>
            <a href="#" class="query-details">
                <div class="query-title">How to install Microsoft office 2016 in windows 10</div>
                <div class="query-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
                    veritatis asperiores aliquam natus odio ipsam?..........</div>
            </a>
        </div>
        <div class="single-query">
            <div class="query-vote">
                <i class="fa fa-chevron-up"></i>
                <span class="vote">9</span>
                <i class="fa fa-chevron-down active"></i>
            </div>
            <a href="#" class="query-details">
                <div class="query-title">How to install Microsoft office 2016 in windows 10</div>
                <div class="query-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
                    veritatis asperiores aliquam natus odio ipsam?..........</div>
            </a>
        </div>
        <div class="single-query">
            <div class="query-vote">
                <i class="fa fa-chevron-up active"></i>
                <span class="vote">7</span>
                <i class="fa fa-chevron-down"></i>
            </div>
            <a href="#" class="query-details">
                <div class="query-title">How to install Microsoft office 2016 in windows 10</div>
                <div class="query-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
                    veritatis asperiores aliquam natus odio ipsam?..........</div>
            </a>
        </div>
        <div class="single-query">
            <div class="query-vote">
                <i class="fa fa-chevron-up active"></i>
                <span class="vote">10</span>
                <i class="fa fa-chevron-down"></i>
            </div>
            <a href="#" class="query-details">
                <div class="query-title">How to install Microsoft office 2016 in windows 10</div>
                <div class="query-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
                    veritatis asperiores aliquam natus odio ipsam?..........</div>
            </a>
        </div>
    </div>
</div>
@endsection