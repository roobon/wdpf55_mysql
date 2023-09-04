<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>



    <?php 
    
        // last stage for form validation
        if(isset($_POST["submit"])){
            extract($_POST); // why???

            // step: 02 after form
            require_once("db_config.php"); // step: connection mandatory
     

            $sql = ("INSERT INTO students_info VALUES (NULL, '$stName', '$gender', '$email', '$phone', '$city', '$address', '$batch')");
            $db->query($sql); // why???  

            // after form submission form for confirm message
            if($db->affected_rows){
                // echo "<h4> Successfully Inserted </h4>";
                header("Location: 1_index.php");
            }

        }

    ?>





<!-- step: 01 create a form -->
    <div class="container">
        <div class="row">
            <div class="col-12">


                <h3 style="color: blue;"> Student Entry Form </h3>

<!-- why we use php core here and echo -->
                <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                    Name: <input type="text" name="stName"> <br> <br>

                    Gender:
                    Male: <input type = "radio" name="gender" value="Male"> 

                    Female: <input type = "radio" name="gender" value="Female"> <br> <br>

                    Email: <input type="email" name = "email"> <br> <br>

                    Phone: <input type="text" name = "phone"> <br> <br>

                    City: <select name="city">
                            <option value=""> Select One </option>
                            <option value="Dhaka"> Dhaka </option>
                            <option value="Luxmipur"> Luxmipur </option>
                            <option value="Mymensingh"> Mymensingh </option>
                            <option value="Barishal"> Barishal </option>
                            <option value="Rajshahi"> 	Rajshahi </option>
                            <option value="Gopalganj"> Gopalganj </option>
                            <option value="Chadpur"> Chadpur </option>

                    </select> <br> <br>

                    Address: <br>
                    <textarea name="address" id="" cols="30" rows="5"></textarea> <br> <br>

                    Batch: <select name= "batch" >
                            <option value= ""> Select Batch </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/49/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/50/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/51/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/52/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/53/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/54/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/55/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/56/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/57/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/58/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/59/01 </option>
                            <option value="WDPF/TCLK-M/55/01"> WDPF/TCLK-M/60/01 </option>

                    </select>  <br> <br>
                    
                    <input type="submit" class="btn btn-outline-success" name = "submit" value = "SUBMIT">



            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>