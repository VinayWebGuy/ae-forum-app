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

    <form method="post" action="{{ route('main.addQuery') }}" class="query-form">
        @csrf
        <div class="ask-query">
            <input type="text" name="title" id="title" placeholder="Title">
            @error('title')<span class="query-error"></span>@enderror
            <textarea name="desc" id="desc" placeholder="Your query"></textarea>
            <p class="tip">Tip: Press ctrl + / to add code in your query.</p>
            @error('query')<span class="query-error"></span>@enderror
            <input type="text" name="tags" id="tags" placeholder="Press enter to add a tag">
            <input type="hidden" id="hiddenTags" name="tags">
            <input type="hidden" id="status" name="status" value="1">

            <div class="tag-section">
                <!-- Tagging interface here -->
            </div>
        </div>
        <div class="buttons">
            <button type="submit" class="btn outline-btn" onclick="document.getElementById('status').value='0';">Save to
                Draft</button>
            <button type="submit" class="btn default-btn"
                onclick="document.getElementById('status').value='1';">Publish</button>
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


</div>

@if(Session::has('success'))
<div class="toastr active">
    <p>{{Session::get('success')}}</p>
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