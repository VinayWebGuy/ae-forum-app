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
        <div class="single-response">
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
            <div class="my-response">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aperiam unde eaque
                    corporis ea magnam veniam accusantium tempora dolor deleniti?</span>
            </div>
        </div>
        <div class="single-response">
            <div class="single-query">
                <div class="query-vote">
                    <i class="fa fa-chevron-up active"></i>
                    <span class="vote">44</span>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <a href="#" class="query-details">
                    <div class="query-title">How to install Microsoft office 2016 in windows 10</div>
                    <div class="query-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
                        veritatis asperiores aliquam natus odio ipsam?..........</div>
                </a>
            </div>
            <div class="my-response">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aperiam unde eaque
                    corporis ea magnam veniam accusantium tempora dolor deleniti?</span>
            </div>
        </div>
        <div class="single-response">
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
            <div class="my-response">
                <i class="fa fa-reply"></i>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo aperiam unde eaque
                    corporis ea magnam veniam accusantium tempora dolor deleniti?</span>
            </div>
        </div>

    </div>
</div>
@endsection