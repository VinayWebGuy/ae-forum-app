@extends('layouts.main')
@section('title', 'About')
@section('about', 'active')
@section('content')
<section>
    <h2><span class="mark">About us</span></h2>
    <div class="section-info">
        <div class="img">
            <img src="{{asset('assets/images/team2.png')}}" alt="">
        </div>
        <div class="content">
            <p>Welcome to ae, your ultimate platform for open discussions, insightful exchanges, and community
                building. Our forum has grown into a vibrant community of like-minded individuals who
                are eager to share their knowledge, experiences, and perspectives.</p>
            <p>At ae, we believe in the power of conversation to inspire ideas, solve problems, and connect people
                from
                diverse backgrounds. Whether you're looking to delve into deep discussions, seek advice, or just
                share a
                laugh, you’ll find a friendly and supportive environment here.</p>
            <p>Our commitment is to maintain a respectful and engaging forum that values every voice. Join us to
                explore
                topics that matter to you, meet new friends, and be part of our growing community. Your thoughts and
                contributions make ae. a unique and exciting place to be, every day!</p>
            <p>Thank you for being a part of our journey. We're excited to see where our conversations lead us!</p>
            <h2><span class="mark">Our Vision</span></h2>
            <p>We aim to be the number one forum app by providing a comprehensive platform that responds to all your
                queries efficiently. Instead of searching across multiple platforms, find reliable answers and
                vibrant discussions all in one place. Our commitment is to foster a community where every user feels
                heard, supported, and inspired to share knowledge.</p>
            <p> We are dedicated to continuously enhancing user
                experience through innovative features and personalized interactions. Join us to transform how
                knowledge is shared and queries are solved!</p>

        </div>
    </div>
</section>

@endsection