@extends('layouts.main')
@section('title', 'Forget Password')
@section('forget-password', 'active')
@section('content')
<div class="auth-box">
    <form action="">
        <h2>Forget Password</h2>

        <div class="formGroup">
            <input type="text" name="email" id="email" autocomplete="off" required>
            <label for="email">Email</label>
        </div>
        <button class="btn secondary-btn">Reset</button>
        <div class="links">
            <a href="{{url('/login')}}">Back to login</a>
        </div>
    </form>
</div>
@endsection