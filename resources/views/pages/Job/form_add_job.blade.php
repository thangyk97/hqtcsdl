<!-- Default form register -->
<form action="{{url('/jobs')}}" method="post">
    {{ csrf_field() }}
    <p class="h4 text-center mb-4">Add new job</p>

    <!-- Default input name -->
    <label class="grey-text">name</label>
    <input type="text" name="name" class="form-control">
    
    <br>

    <!-- Default input email -->
    <label class="grey-text">Position</label>
    <input type="text" name='position' class="form-control">
    
    <br>

    <!-- Default input password -->
    <label class="grey-text">Description</label>
    <input type="text" name='description' class="form-control">

    <br>
    <!-- Default input address -->
    <label class="grey-text">Quantity</label>
    <input type="text" name='quantity' class="form-control">
    
    <br>
    
    <!-- Default input phone -->
    <label class="grey-text">Salary</label>
    <input type="text" name='salary' class="form-control">
    <br>

    <label class="grey-text">Experience</label>
    <input type="text" name='experience' class="form-control">
    <br>

    <label class="grey-text">Degree</label>
    <input type="text" name='degree' class="form-control">
    <br>

    <label class="grey-text">Requirement</label>
    <input type="text" name='requirement' class="form-control">
    <br>

    <label class="grey-text">Benefit</label>
    <input type="text" name='benefit' class="form-control">
    <br>

    <label class="grey-text">Status</label>
    <input type="radio" name="status" value="active" checked> Active
    <input type="radio" name="status" value="deactive"> Deactive<br>
    <br>


    <div class="text-center mt-4">
        <button class="btn btn-unique" type="submit">Add</button>
    </div>

    <br>

</form>