@extends('layouts.app')
@section('content')
@include('includes.header')
<div class="container ">
    <!-- Default form register -->
    <form action="{{url('/jobs')}}/{{$job->id}}" method="post">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <p class="h4 text-center mb-4">Add new job</p>

        <!-- Default input name -->
        <label class="grey-text">name</label>
        <input type="text" name="name" class="form-control" value="{{$job->name}}">
        
        <br>

        <!-- Default input email -->
        <label class="grey-text">Position</label>
        <input type="text" name='position' class="form-control" value="{{$job->position}}">
        
        <br>

        <!-- Default input password -->
        <label class="grey-text">Description</label>
        <input type="text" name='description' class="form-control" value="{{$job->description}}">

        <br>
        <!-- Default input address -->
        <label class="grey-text">Quantity</label>
        <input type="text" name='quantity' class="form-control" value="{{$job->quantity}}">
        
        <br>
        
        <!-- Default input phone -->
        <label class="grey-text">Salary</label>
        <input type="text" name='salary' class="form-control" value="{{$job->salary}}">
        <br>

        <label class="grey-text">Experience</label>
        <input type="text" name='experience' class="form-control" value="{{$job->experience}}">
        <br>

        <label class="grey-text">Degree</label>
        <input type="text" name='degree' class="form-control" value="{{$job->degree}}">
        <br>

        <label class="grey-text">Requirement</label>
        <input type="text" name='requirement' class="form-control" value="{{$job->requirement}}">
        <br>

        <label class="grey-text">Benefit</label>
        <input type="text" name='benefit' class="form-control" value="{{$job->benefit}}">
        <br>

        <label class="grey-text">Status</label>
        <input type="radio" name="status" value="active" checked> Active
        <input type="radio" name="status" value="deactive"> Deactive<br>
        <br>


        <div class="text-center mt-4">
            <button class="btn btn-unique" type="submit">Update</button>
        </div>

        <br>

    </form>
</div>

@stop