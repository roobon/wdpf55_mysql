<?php 
   $db = new mysqli("localhost", "root", "", "idb_bisew_wdpf55");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>New Student Entry</h2>
    <form action="">
        Name : <input type="text" name="name" placeholder="Enter Name"><br>
        Gender <br>
        Male : <input type="radio" name="gender" value="male">
        Female : <input type="radio" name="gender" value="female"><br>
        <input type="date" name="dob"><br>
        <input type="email" name="email" placeholder="Enter email"><br>
        Batch Name: <br>
        <select name="batch">
            <option value="">Select One</option>
            <option value="WDPF_55">WDPF_55</option>
            <option value="WDPF_52">WDPF_52</option>
            <option value="WDPF_53">WDPF_53</option>
            <option value="WDPF_54">WDPF_54</option>
        </select><br>
        Address : <textarea name="address" id="" cols="30" rows="10"></textarea><br>
        Cricket : <input type="checkbox" name="cricket" value="cricket">
        Football : <input type="checkbox" name="football" value="football">
        Hockey : <input type="checkbox" name="hockey" value="hockey"><br>
        Tennis : <input type="checkbox" name="tennis" value="tennis">
        Badminton : <input type="checkbox" name="badminton" value="badminton"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form> 
</body>
</html>