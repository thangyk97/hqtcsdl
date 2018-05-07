@extends('pages/candidate/profile')
@section('blah')

<form action="{{url('/candidate/with_work')}}" method="post">
    {{ csrf_field() }}
    <p class="h4 text-center mb-4">With work</p>

    <!-- Default input name -->
    <label class="grey-text">Career</label>
    <input type="text" name="career" class="form-control" value="{{$wish_work->career}}">
    <br>

    <!-- Default input email -->
    <label class="grey-text">Salary</label>
    <input type="test" name='salary' class="form-control" value="{{$wish_work->salary}}">
    <br>

    <!-- Default input email -->
    <label class="grey-text">Type</label>
    <input type="test" name='type' class="form-control" value="{{$wish_work->type}}">
    <br>

    <!-- Default input password -->
    <label class="grey-text">Objective</label>
    <input type="text" name='objective' class="form-control" value="{{$wish_work->objective}}">
    <br>


    <div class="text-center mt-4">
        <button class="btn btn-unique" type="submit">Update</button>
    </div>
    <br>

</form>
@stop