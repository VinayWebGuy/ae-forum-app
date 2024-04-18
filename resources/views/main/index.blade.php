@extends('main.layouts.main')
@section('title', 'Home')
@section('home', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Home</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Home</span>
        </div>
    </div>


    <form class="query-form">
        <div class="ask-query">
            <input type="text" name="title" id="title" placeholder="Title">
            <textarea name="query" id="query" placeholder="Your query"></textarea>
            <input type="text" name="tags" id="tags" placeholder="Press enter to add a tag">
            <input type="hidden" id="hiddenTags" name="hiddenTags">

            <div class="tag-section">

            </div>
        </div>
        <div class="buttons">
            <button class="btn outline-btn">Save to Draft</button>
            <button class="btn default-btn">Publish</button>

        </div>
    </form>

    <div class="recent-queries">
        <div class="head">
            <h4>Recent queries</h4>

            <select name="recent_type" id="recent_type">
                <option value="all">Show all</option>
                <option value="mine">Show mine</option>
            </select>
        </div>

        <div class="all-queries">
            <div class="single-query">
                <div class="query-vote">
                    <i class="fa fa-chevron-up active"></i>
                    <span class="vote">6</span>
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
                    <span class="vote">-3</span>
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
                    <i class="fa fa-chevron-up"></i>
                    <span class="vote">3</span>
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


</div>
@endsection