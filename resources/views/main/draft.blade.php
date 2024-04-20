@extends('main.layouts.main')
@section('title', 'Draft')
@section('draft', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Draft</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Draft</span>
        </div>
    </div>
    @if(count($queries) > 0)
    <div class="my-queries">
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
            </a>
            <a class="publish-query btn default-btn sm" href="{{url('/main/publish-query/'.$q->qid)}}">Publish</a>
        </div>
        @endforeach

    </div>
    @else
    <div class="no-data">You haven't any query in drafts.
    </div>
    @endif
</div>

@if(Session::has('msg'))
<div class="toastr active">
    <p>{{Session::get('msg')}}</p>
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