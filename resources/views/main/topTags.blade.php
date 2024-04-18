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
        @foreach ($topTags as $tag => $count)
        <div class="single-tag">
            <a href="/main/tag/{{$tag}}">{{ $tag }}</a>
            <span class="questions">{{ $count }} queries</span>
        </div>
        @endforeach
    </div>
</div>
@endsection