<?php $page="signin";?>
@extends('layout.mainlayout')
@section('content')
<Form action="{{ route('signin.custom') }}" method="POST" class="account-content">
@csrf
    <div class="login-wrapper">
        <div class="login-content">
            <div class="login-userset">
                <div class="login-logo">
                    <img src="{{URL::asset('/assets/img/logo.png')}}" alt="img">
                </div>
                <div class="login-userheading">
                    <h3>تسجيل الدخول</h3>
                </div>
                <div class="form-login">
                    <label>الإيميل</label>
                    <div class="form-addons">
                        <input type="text" name="email" id="Email" value="admin@example.com">
                        <img src="{{URL::asset('/assets/img/icons/mail.svg')}}" alt="img">
                    </div>
                    <div class="text-danger pt-2">
                        @error('0')
                            {{$message}}
                        @enderror
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-login">
                    <label>كلمة السر</label>
                    <div class="pass-group">
                        <input type="password" class="pass-input" name="password" id="password" value="123456">
                        <span class="fas toggle-password fa-eye-slash"></span>
                    </div>
                    <div class="text-danger pt-2">
                        @error('0')
                            {{$message}}
                        @enderror
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="form-login">
                    <button class="btn btn-login" type="submit">تسجيل الدخول</button>
                </div>
            </div>
        </div>
        <div class="login-img">
            <img src="{{ URL::asset('/assets/img/login.jpg')}}" alt="img">
        </div>
    </div>
</Form>
@endsection
