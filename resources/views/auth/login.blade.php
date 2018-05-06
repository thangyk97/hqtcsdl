@extends('layouts.app')
@section('content')
@include('includes.header')
<br>
<div class="container">
    <div class="row">

        <div class="col-lg-6 mx-auto">

            <!-- Material form login -->
            <form action="{{url('/login')}}" method="POST">
                {{ csrf_field() }}
                <p class="h4 text-center mb-4">Sign in</p>

                <!-- Material input email -->
                <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label for="materialFormLoginEmailEx">Your email</label>
                    <input type="email" name="email" id="materialFormLoginEmailEx" class="form-control">
                </div>

                <!-- Material input password -->
                <div class="md-form">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <label for="materialFormLoginPasswordEx">Your password</label>
                    <input type="password" name="password" id="materialFormLoginPasswordEx" class="form-control">
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-default" type="submit">Login</button>
                </div>
            </form>
            <!-- Material form login -->
                      
        </div>

    </div>
</div>
<br>
        <br>
@stop