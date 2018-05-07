@extends('layouts.app')
@section('content')
@include('includes.header')
<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        @include('pages.candidate.form')
        </div>
    </div>
</div>

@stop