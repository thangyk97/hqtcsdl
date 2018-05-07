@extends('pages/candidate/profile')
@section('blah')

<form action="{{url('/candidate/experience')}}" method="post">
    {{ csrf_field() }}
    <p class="h4 text-center mb-4">Experience</p>

    <!-- Default input name -->
    <label class="grey-text">Campany</label>
    <input type="text" name="campany" class="form-control" value="{{$experience->campany}}">
    
    <br>

    <!-- Default input email -->
    <label class="grey-text">Position</label>
    <input type="text" name='position' class="form-control" value="{{$experience->position}}">
    
    <br>

    <!-- Default input password -->
    <label class="grey-text">Time</label>
    <input type="text" name='time' class="form-control" value="{{$experience->time}}">

    <br>
    <!-- Default input address -->
    <label class="grey-text">Description</label>
    <input type="text" name='description' class="form-control" value="{{$experience->description}}">
    
    <br>
    <div class="text-center mt-4">
        <button class="btn btn-unique" type="submit">Update</button>
    </div>

    <br>

</form>

@stop