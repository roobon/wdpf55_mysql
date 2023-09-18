<?php 

$db = new mysqli( "localhost", "root", "", "auth_users" );

if ( isset( $_POST['submit'] ) ) {
    extract($_POST);
    
    $sql = " SELECT Name, Email, Password FROM users2 WHERE  Email = '$email' AND Password = '$password' " ;

    $result = $db->query($sql);
    $data = $result->fetch_assoc() ;

    session_start() ;


    if (  $result->num_rows  ){
      $_SESSION['name'] = $data['Name'] ;  
      $_SESSION['email'] = $data['Email'] ;  
      echo  " <p> Login successfull.... </P> " ;
      echo '<script>
            setTimeout(function() {
                window.location.href = "dashboard.php";
            }, 5000); // 5000 milliseconds = 5 seconds
          </script>';
      // header('Location:dashboard.php');
    } else {
        $_SESSION['error'] = " <p>  Login failed.  </p> " ;
        header('Location:index.php');
    }
    
}

?>