<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">


<link rel="stylesheet" href="./css/form.css">


<div class="container mt-3" id="container">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="form">
        <div class="heading"><h4>As A Employer</h4></div>
        <hr id="hr">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="Name">Company Name</label>
            <input type="text" class="form-control" name="name" placeholder="Company Name">
            </div>
            <div class="form-group col-md-6">
            <label for="Type">Company Type</label>
            <input type="text" class="form-control" name="type" placeholder="Company Type">
            </div>
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="City">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter Your City">
            </div>
            <div class="form-group col-md-4">
            <label for="Country">Country</label>
            <input type="text" class="form-control" name="country" placeholder="Enter Your County">
            
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
        
        <div class="form-group mb-3 mt-3" id="button">
            <button type="submit" class="btn btn-success btn-block" id="btn">Employer Register</button>
        </div>
        
    </form>
</div>

