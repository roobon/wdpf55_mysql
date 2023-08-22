<?php include_once("header.php");?>
<link rel="stylesheet" href="./css/form.css">


<div class="container mt-3" id="container">
  <h4>Post A Job</h4>
  <hr id="hr">

  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" id="form">
    <div class="form-group mb-3 mt-3">
      <label for="fname">Title</label>
      <input type="text" class="form-control" name="fname">
    </div>
    <div class="form-group mb-3 mt-3">
      <label for="lname">Vacancy</label>
      <input type="text" class="form-control" name="lname">
    </div>
    <div class="form-group mb-3 mt-3">
      <div>
        <label for="city">Timing</label>
      </div>
      <div>
        <input type="checkbox" name="ptime" id="checkbox"> Part Time
        <input type="checkbox" name="ftime" id="checkbox"> Full Time
      </div>
    </div>
    <div class="form-group mb-3 mt-3">     
      <label for="email">Description</label>          
      <textarea class="form-control" name=""></textarea>
    </div>
    <div class="form-group mb-3 mt-3">
      <label for="dob">Salary</label>
      <input type="number" class="form-control" name="dob">
    </div>
    <div class="form-group mb-3 mt-3">
      <label for="dob">Address</label>
      <textarea class="form-control" name="" ></textarea>
    </div>
    <div class="form-group mb-3 mt-3">
      <label for="dob">Date line</label>
      <input type="date" class="form-control" name="dob">
    </div>
    <div class="form-group mb-3 mt-3" id="button">
      <button type="submit" class="btn btn-success btn-block" name="post" id="btn">Post A Job</button>
    </div>
  </form>

</div>

<?php include_once("footer.php");?>