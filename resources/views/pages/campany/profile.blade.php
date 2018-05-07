@extends('layouts.app')
@section('content')
@include('includes.header')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <form action="{{url('/campanies')}}/{{$user->id}}" method="POST">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            <p class="h4 text-center mb-4">Profile</p>

            <!-- Default input name -->
            <label class="grey-text">Campani's name</label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}">
            <br>
            <!-- Default input email -->
            <label class="grey-text">Your email</label>
            <input type="email" name='email' class="form-control" value="{{$user->email}}">
            <br>
            <!-- Default input password -->
            <label class="grey-text">Your password</label>
            <input type="password" name='password' class="form-control">
            <br>
            <!-- Default input address -->
            <label class="grey-text">Address</label>
            <input type="text" name='address' class="form-control" value="{{$user->address}}">
            <br>
            <!-- Default input phone -->
            <label class="grey-text">Phone</label>
            <input type="text" name='phone' class="form-control" value="{{$user->phone}}">
            <br>
            <!-- Default input website -->
            <label class="grey-text">Website</label>
            <input type="text" name='website' class="form-control" value="{{$campany->website}}">
            <br>
            <!-- Default input fax -->
            <label class="grey-text">Fax</label>
            <input type="text" name='fax' class="form-control" value="{{$campany->FAX}}">
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea3">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea3" text="{{$campany->description}}" name="description" rows="7"></textarea>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-unique" type="submit">Update</button>
            </div>

            <br>
        </form>
        </div>
    </div>
</div>

@stop