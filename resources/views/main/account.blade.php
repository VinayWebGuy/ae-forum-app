@extends('main.layouts.main')
@section('title', 'Account')
@section('account', 'active')
@section('content')
<div class="content">
    <div class="page-info">
        <h3>Account</h3>

        <div class="page-map">
            <span>ae</span>
            <i class="fa fa-chevron-right"></i>
            <span>Account</span>
        </div>
    </div>


    <div class="account">

        <form action="">
            <h3>Change Password</h3>
            <div class="formGroup">
                <input type="password" name="old_password" id="old_password" required>
                <label for="old_password">Old Password</label>
            </div>
            <div class="formGroup">
                <input type="password" name="new_password" id="new_password" required>
                <label for="new_password">New Password</label>
            </div>
            <div class="formGroup">
                <input type="password" name="confirm_password" id="confirm_password" required>
                <label for="confirm_password">Confirm Password</label>
            </div>
            <button class="btn default-btn">Change</button>
        </form>


        <form class="settings">
            <h3>Settings</h3>
            <div class="groups">
                <div class="formGroup2">
                    <label for="account_privacy">Account Privacy</label>
                    <select name="account_privacy" id="account_privacy">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
                <div class="formGroup2">
                    <label for="account_privacy">Enable Notifications</label>
                    <select name="notifications" id="notifications">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <button class="btn default-btn">Update</button>
        </form>
    </div>



</div>
@endsection