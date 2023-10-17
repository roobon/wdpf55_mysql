<?php
   //Creating a connection
   $db = new mysqli ("localhost", "root", "", "student_batches");

   $db->autocommit(FALSE) ;

   //Beginning the transaction
   $db->begin_transaction( MYSQLI_TRANS_START_READ_ONLY);
   print("Transaction Started......\n");

    $error = 0 ;


   //Creating a table
    $db->query("CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   print("Table Created......\n");

   
   //Inserting values
   $db->query( "INSERT INTO Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Records Inserted......\n");

   //Committing the transaction
   $db->commit();

    if ($error){
        $db->rollback();
        echo " No query executed ";
    } else {
        $db->commit();
        print( "transaction saved \n" ) ;
    }

   //Closing the connection
   $db->close();
?>