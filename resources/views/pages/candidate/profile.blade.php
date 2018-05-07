@extends('layouts.app')
@section('content')
@include('includes.header')
<div class="container">
    <div class="row">
        <div class="col-lg-2 mx-auto">
            <ul class="list-group">
                <a href="{{url('candidate/education')}}" class="list-group-item list-group-item-action">Educations</a>
                <a href="{{url('candidate/skill')}}" class="list-group-item list-group-item-action">Skills</a>
                <a href="{{url('candidate/experience')}}" class="list-group-item list-group-item-action">Experiences</a>
                <a href="{{url('candidate/with_work')}}" class="list-group-item list-group-item-action">With work</a>
            </ul>
        </div>
        <div class="col-lg-8 mx-auto">
        @yield('blah')
        </div>
        <div class="col-lg-2 mx-auto">
        </div>
    </div>
</div>

@stop