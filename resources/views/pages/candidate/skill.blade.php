@extends('pages/candidate/profile')
@section('blah')
<form action="{{url('/candidate/skill')}}" method="post">
    {{ csrf_field() }}
    <p class="h4 text-center mb-4">Skill</p>

    <!-- Default input name -->
    <label class="grey-text">name</label>
    <input type="text" name="name" class="form-control" value="{{$skill->name}}">
    
    <br>
    <!-- Default input password -->
    <label class="grey-text">Description</label>
    <input type="text" name='description' class="form-control" value="{{$skill->description}}">
    <br>


    <div class="text-center mt-4">
        <button class="btn btn-unique" type="submit">Update</button>
    </div>

    <br>

</form>
@stop