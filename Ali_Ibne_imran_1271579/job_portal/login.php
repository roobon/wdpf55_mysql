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
        font-size: 25px;
    }
</style>
<div class="container">
    <form>
    <div class="heading"><h4>Access Your Account</h4></div>
    <hr class="hr">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Remember me
            </label>
            </div>
        </div>
        <div class="loginbtn">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        
    </form>
</div>