<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="./css/form.css">

<div class="container mt-3" id="container">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="form">
        <div class="heading"><h4>Access Your Account</h4></div>
        <hr id="hr">
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
        <div class="form-group mb-3 mt-3" id="button">
            <button type="submit" class="btn btn-success btn-block" id="btn">Login</button>
        </div>
        
    </form>
</div>