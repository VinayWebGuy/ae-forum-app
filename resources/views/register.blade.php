@extends('layouts.main')
@section('title', 'Register')
@section('register', 'active')
@section('content')
<div class="auth-box">
    <form action="{{route('register')}}" method="post">

        @csrf
        <h2>Join the community</h2>

        <div class="formGroup">
            <input type="text" name="email" id="email" autocomplete="off" required>
            <label for="email">Email</label>
        </div>
        @error('email') <span class="auth-error">{{$message}}</span>@enderror
        <div class="formGroup">
            <input type="text" name="username" id="username" autocomplete="off" required>
            <label for="username">Username</label>
        </div>
        @error('username') <span class="auth-error">{{$message}}</span>@enderror
        <div class="formGroup">
            <input type="password" name="password" id="password" autocomplete="off" required>
            <label for="password">Password</label>
            <i class="view-password fa fa-eye"></i>
        </div>
        @error('password') <span class="auth-error">{{$message}}</span>@enderror
        <button class="btn secondary-btn">Sign up</button>
        <div class="links">
            <a href="{{url('/login')}}">Already a user?</a>
        </div>
    </form>
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