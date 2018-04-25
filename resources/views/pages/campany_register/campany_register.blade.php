@extends('layouts.app')
@section('content')
@include('pages.campany_register.header')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        @include('pages.campany_register.form')
        </div>
    </div>
</div>

@stop