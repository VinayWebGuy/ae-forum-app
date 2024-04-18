@extends('main.layouts.main')
@section('title', 'Subscription')
@section('subscription', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Subscription</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Subscription</span>
        </div>
    </div>

    <div class="subscription">
        <div class="all-plans">
            <div class="single-plan current">
                <div class="plan-name">Bronze</div>
                <div class="plan-features">
                    <p><i class="fa fa-check"></i> <span>Ask question</span></p>
                    <p><i class="fa fa-check"></i> <span>Vote question</span></p>
                    <p><i class="fa fa-check"></i> <span>Respond to question</span></p>
                    <p><i class="fa fa-times"></i> <span>Add link in query</span></p>
                    <p><i class="fa fa-times"></i> <span>Add image in query</span></p>
                    <p><i class="fa fa-times"></i> <span>Email Support</span></p>
                    <p><i class="fa fa-times"></i> <span>Call support</span></p>
                    <p><i class="fa fa-times"></i> <span>Instant ai response</span></p>
                </div>
                <button class="btn secondary-btn">Free/- (Current)</button>
            </div>
            <div class="single-plan">
                <div class="plan-name">Silver</div>
                <div class="plan-features">
                    <p><i class="fa fa-check"></i> <span>Ask question</span></p>
                    <p><i class="fa fa-check"></i> <span>Vote question</span></p>
                    <p><i class="fa fa-check"></i> <span>Respond to question</span></p>
                    <p><i class="fa fa-check"></i> <span>Add link in query</span></p>
                    <p><i class="fa fa-check"></i> <span>Add image in query</span></p>
                    <p><i class="fa fa-check"></i> <span>Email Support</span></p>
                    <p><i class="fa fa-times"></i> <span>Call support</span></p>
                    <p><i class="fa fa-times"></i> <span>Instant ai response</span></p>
                </div>
                <button class="btn default-btn">299/m</button>
            </div>
            <div class="single-plan">
                <div class="plan-name">Gold</div>
                <div class="plan-features">
                    <p><i class="fa fa-check"></i> <span>Ask question</span></p>
                    <p><i class="fa fa-check"></i> <span>Vote question</span></p>
                    <p><i class="fa fa-check"></i> <span>Respond to question</span></p>
                    <p><i class="fa fa-check"></i> <span>Add link in query</span></p>
                    <p><i class="fa fa-check"></i> <span>Add image in query</span></p>
                    <p><i class="fa fa-check"></i> <span>Email Support</span></p>
                    <p><i class="fa fa-check"></i> <span>Call support</span></p>
                    <p><i class="fa fa-check"></i> <span>Instant AI response</span></p>
                </div>
                <button class="btn default-btn">499/m</button>
            </div>
        </div>
    </div>
</div>
@endsection