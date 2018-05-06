
<!-- Default form register -->
<form action="{{url('/campanies')}}" method="post">
    {{ csrf_field() }}
    <p class="h4 text-center mb-4">Sign up</p>

    <!-- Default input name -->
    <label class="grey-text">Campani's name</label>
    <input type="text" name="name" class="form-control">
    
    <br>

    <!-- Default input email -->
    <label class="grey-text">Your email</label>
    <input type="email" name='email' class="form-control">
    
    <br>

    <!-- Default input password -->
    <label class="grey-text">Your password</label>
    <input type="password" name='password' class="form-control">

    <br>
    <!-- Default input address -->
    <label class="grey-text">Address</label>
    <input type="text" name='address' class="form-control">
    
    <br>
    <!-- Default input phone -->
    <label class="grey-text">Phone</label>
    <input type="text" name='phone' class="form-control">
    
    <br>
    <!-- Default input website -->
    <label class="grey-text">Website</label>
    <input type="text" name='website' class="form-control">
    
    <br>
    <!-- Default input fax -->
    <label class="grey-text">Fax</label>
    <input type="text" name='fax' class="form-control">
    
    <br>
    <div class="form-group">
        <label for="exampleFormControlTextarea3">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea3" name="description" rows="7"></textarea>
    </div>

    <div class="text-center mt-4">
        <button class="btn btn-unique" type="submit">Register</button>
    </div>

    <br>
</form>
<!-- Default form register -->
                      