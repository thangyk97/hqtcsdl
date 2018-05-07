@extends('pages/candidate/profile')
@section('blah')

<form action="{{url('/candidate/education')}}" method="post">
    {{ csrf_field() }}
    <p class="h4 text-center mb-4">Education</p>

    <!-- Default input name -->
    <label class="grey-text">Degree</label>
    <input type="text" name="degree" class="form-control" value="{{$education->degree}}">
    
    <br>

    <!-- Default input email -->
    <label class="grey-text">School</label>
    <input type="text" name='school' class="form-control" value="{{$education->school}}">
    
    <br>

    <!-- Default input password -->
    <label class="grey-text">Time</label>
    <input type="text" name='time' class="form-control" value="{{$education->time}}">

    <br>
    <!-- Default input address -->
    <label class="grey-text">Department</label>
    <input type="text" name='department' class="form-control" value="{{$education->department}}">
    
    <br>
    
    <!-- Default input phone -->
    <label class="grey-text">Grade</label>
    <input type="text" name='grade' class="form-control" value="{{$education->grade}}">
    <br>


    <div class="text-center mt-4">
        <button class="btn btn-unique" type="submit">Update</button>
    </div>

    <br>

</form>

@stop