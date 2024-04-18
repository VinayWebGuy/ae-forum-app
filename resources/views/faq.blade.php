@extends('layouts.main')
@section('title', 'FAQ')
@section('faq', 'active')
@section('content')
<section>
    <h2><span class="mark">Frequently asked questions</span></h2>
    <div class="section-info">
        <div class="img">
            <img src="{{asset('assets/images/faq.png')}}" alt="">
        </div>
        <div class="all-faqs">
            <div class="single-faq open">
                <div class="faq-ques">How can I reset my password? <span>+</span></div>
                <div class="faq-ans">To reset your password, go to the login page and click on "Forgot password?"
                    Follow the instructions to receive a password reset link via email.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">How do I change my profile information? <span>+</span></div>
                <div class="faq-ans">You can change your profile information by navigating to your profile settings
                    and updating your details. Don't forget to save the changes!</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">Is there a mobile app available for ae? <span>+</span></div>
                <div class="faq-ans">Currently, we do not have a mobile app, but our website is mobile-friendly, and
                    you can access all features from your smartphone's browser.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">Can I delete my account? <span>+</span></div>
                <div class="faq-ans">Yes, if you wish to delete your account, please contact our support team, and
                    they will assist you with the process.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">How can I report inappropriate content? <span>+</span></div>
                <div class="faq-ans">To report inappropriate content, please use the 'Report' button located near
                    the content in question, or contact our moderation team directly through our contact form.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">What kind of topics can I discuss on ae? <span>+</span></div>
                <div class="faq-ans">Ae supports discussions across a wide range of topics. Please refer to our
                    community guidelines for more information on permissible topics.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">How often are forum moderators available? <span>+</span></div>
                <div class="faq-ans">Our forum moderators are available 24/7 to ensure a safe and engaging
                    environment for all users.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">How do I subscribe to forum updates? <span>+</span></div>
                <div class="faq-ans">You can subscribe to updates by enabling notifications in your profile settings
                    or by subscribing to our newsletter.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">What are the guidelines for posting a new question? <span>+</span></div>
                <div class="faq-ans">When posting a new question, ensure it's clear and concise. Avoid using
                    offensive language and make sure it adheres to our community guidelines.</div>
            </div>
            <div class="single-faq">
                <div class="faq-ques">Can I volunteer to be a moderator on ae? <span>+</span></div>
                <div class="faq-ans">Yes, we occasionally look for enthusiastic community members to join our
                    moderation team. Keep an eye on our announcements for openings.</div>
            </div>
        </div>

    </div>
</section>
@endsection