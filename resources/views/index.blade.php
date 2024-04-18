@extends('layouts.main')
@section('title', 'Home')
@section('home', 'active')
@section('content')

<div class="hero">
    <h3>Available Anytime, Everywhere</h3>
    <h2>Receive Replies Within <span class="mark">30 Minutes</span></h2>
    <p>Just submit your query, and you'll receive a response
        within 30 minutes, no matter the time or day. This reliable service is designed to support your needs
        promptly and efficiently.</p>
    <div class="buttons">
        <a href="register.html" class="btn default-btn">Want to join?</a>
        <a href="#" class="btn outline-btn">Ask Question!</a>
    </div>
</div>
<div class="who-we-are">
    <div class="content">
        <h2><span class="mark">About Us</span></h2>
        <p>Welcome to ae, your ultimate platform for open discussions, insightful exchanges, and community
            building. Our forum has grown into a vibrant community of like-minded individuals who
            are eager to share their knowledge, experiences, and perspectives.</p>
        <p>At ae, we believe in the power of conversation to inspire ideas, solve problems, and connect people from
            diverse backgrounds. Whether you're looking to delve into deep discussions, seek advice, or just share a
            laugh, you’ll find a friendly and supportive environment here.</p>
        <p>Our commitment is to maintain a respectful and engaging forum that values every voice. Join us to explore
            topics that matter to you, meet new friends, and be part of our growing community. Your thoughts and
            contributions make ae. a unique and exciting place to be, every day!</p>
        <a href="about.html" class="btn outline-btn">Learn more</a>
    </div>
    <div class="img">
        <img src="{{asset('assets/images/question.png')}}" alt="">
    </div>
</div>
<div class="how-we-work">
    <div class="img">
        <img src="{{asset('assets/images/work.png')}}" alt="">
    </div>
    <div class="content">
        <h2><span class="mark">How We Work</span></h2>
        <div class="steps">
            <div class="step">
                <span>1</span>
                Submit Your Question
                <i class="fa fa-chevron-right"></i>
            </div>
            <div class="step">
                <span>2</span>
                We Review and Publish Your Question
                <i class="fa fa-chevron-right"></i>
            </div>
            <div class="step">
                <span>3</span>
                Community Members View Your Question
                <i class="fa fa-chevron-right"></i>
            </div>
            <div class="step">
                <span>4</span>
                Receive Responses from Users Who Can Relate
                <i class="fa fa-chevron-right"></i>
            </div>
        </div>
        <a href="" class="btn outline-btn">Join now</a>
    </div>
</div>

<div class="rules">

    <div class="content">
        <h2><span class="mark">Rules</span></h2>

        <ol class="all-rules">
            <li><strong class="mark2">Be Respectful:</strong> Treat all members with respect. No harassment,
                discrimination, or
                offensive content
                will be tolerated.</li>
            <li><strong class="mark2">Stay On Topic:</strong> Keep discussions relevant to the forum's theme. Avoid
                derailing
                threads with
                unrelated topics.</li>
            <li><strong class="mark2">Use Clear Language:</strong> Write clearly and concisely. Avoid excessive
                jargon or slang
                that may not be
                understood by all members.</li>
            <li><strong class="mark2">No Spam:</strong> Do not post spam, advertisements, or repeatedly post the
                same content.
                Promotional posts
                should only be made if they align with forum guidelines.</li>
            <li><strong class="mark2">Privacy and Safety:</strong> Do not share personal information of yourself or
                others.
                Respect the privacy and
                safety of all members.</li>
            <li><strong class="mark2">Follow Moderation Decisions:</strong> Respect decisions made by moderators. If
                you disagree,
                contact them
                privately rather than arguing publicly.</li>
            <li><strong class="mark2">Contribute Positively:</strong> Aim to contribute positively to discussions,
                providing
                helpful information
                and constructive feedback.</li>
            <li><strong class="mark2">No Illegal Activity:</strong> Do not engage in or promote illegal activities.
                Links to
                illegal downloads,
                instructions on hacking or any illegal activities are strictly prohibited.</li>
        </ol>
        <a href="" class="btn outline-btn">Sign up</a>
    </div>
    <div class="img">
        <img src="{{asset('assets/images/rules.png')}}" alt="">
    </div>
</div>
@endsection