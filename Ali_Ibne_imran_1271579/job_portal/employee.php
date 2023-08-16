<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
    .container{
        width: 50%;
        background-color: white;
        margin: auto;
        margin-top: 10%;
        box-shadow: 1px 1px 10px 0px;
    }
    form{
        width: 90%;
        margin: auto;
    }
    h4{
        padding-top: 20px;
        text-align: center;
        font-weight: bold;
        margin-top: 10px;
    }
    .hr{
        padding: 10px;
    }
    .loginbtn{
        padding-bottom: 30px;
    }
    .btn{
        font-weight: bold;
        font-size: 20px;
    }
</style>
<div class="container">
    <form>
    <div class="heading"><h4>As A Employee</h4></div>
    <hr class="hr">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="Name">First Name</label>
            <input type="text" class="form-control" name="fname">
            </div>
            <div class="form-group col-md-6">
            <label for="Name">Last Name</label>
            <input type="text" class="form-control" name="lname">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="Father">Father Name</label>
            <input type="text" class="form-control" name="father">
            </div>
            <div class="form-group col-md-6">
            <label for="Mother">Mother Name</label>
            <input type="text" class="form-control" name="mother">
            </div>
        </div>
        <div class="form-group">
            <label for="Upload">Upload Your CV</label>
            <input type="file" class="form-control" name="cv">
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="City">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter Your City">
            </div>
            <div class="form-group col-md-4">
            <label for="Country">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Enter Your County">
            <!-- <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select> -->
            </div>
            <div class="form-group col-md-4">
            <label for="Zip">Zip</label>
            <input type="text" class="form-control" name="zip" placeholder="Enter Your Zip">
            </div>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group col-md-6">
            <label for="Password">Confirm Password</label>
            <input type="password" class="form-control" name="password" placeholder="Confirm Password">
            </div>
        </div>
        
        <div class="loginbtn">
            <button type="submit" class="btn btn-primary btn-block">Employee Register</button>
        </div>
        
    </form>
</div>