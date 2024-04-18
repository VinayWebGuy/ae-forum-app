@extends('main.layouts.main')
@section('title', 'Activity')
@section('activity', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Activity</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Activity</span>
        </div>
    </div>

    <div class="all-activity">
        <div class="single-activity">
            <div class="time">5 mins ago</div>
            <div class="work">
                <span>You asked a question</span>
                <a href="#">
                    <i class="fa fa-link"></i>
                </a>
            </div>
        </div>
        <div class="single-activity">
            <div class="time">7 mins ago</div>
            <div class="work">
                <span>You reviewed a question</span>
                <a href="#">
                    <i class="fa fa-link"></i>
                </a>
            </div>
        </div>
        <div class="single-activity">
            <div class="time">27 mins ago</div>
            <div class="work">
                <span>You asked a question</span>
                <a href="#">
                    <i class="fa fa-link"></i>
                </a>
            </div>
        </div>
        <div class="single-activity">
            <div class="time">1 hour ago</div>
            <div class="work">
                <span>You asked a question</span>
                <a href="#">
                    <i class="fa fa-link"></i>
                </a>
            </div>
        </div>
        <div class="single-activity">
            <div class="time">3 hours ago</div>
            <div class="work">
                <span>You respond to a question</span>
                <a href="#">
                    <i class="fa fa-link"></i>
                </a>
            </div>
        </div>
        <div class="single-activity">
            <div class="time">1 day ago</div>
            <div class="work">
                <span>You followed @vinay245</span>
                <a href="#">
                    <i class="fa fa-link"></i>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection