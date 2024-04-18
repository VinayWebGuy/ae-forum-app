@extends('layouts.main')
@section('title', 'Login')
@section('login', 'active')
@section('content')
<div class="auth-box">
    <form action="{{route('login')}}" method="post">
        @csrf
        <h2>Login to continue</h2>

        <div class="formGroup">
            <input type="text" name="username" id="username" autocomplete="off" required>
            <label for="username">Username / Email</label>
        </div>
        @error('username') <span class="auth-error">{{$message}}</span>@enderror
        <div class="formGroup">
            <input type="password" name="password" id="password" autocomplete="off" required>
            <label for="password">Password</label>
            <i class="view-password fa fa-eye"></i>
        </div>
        @error('password') <span class="auth-error">{{$message}}</span>@enderror
        <button class="btn secondary-btn">Login</button>
        <div class="links">
            <a href="{{url('/register')}}">Create Account</a>
            <a href="{{url('/forget-password')}}">Forget Password</a>
        </div>
    </form>
</div>
@if(Session::has('error'))
<div class="toastr active">
    <p>{{Session::get('error')}}</p>
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