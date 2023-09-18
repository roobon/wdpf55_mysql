<?php
   //Creating a connection
   $db = mysqli_connect("localhost", "root", "", "wdpf55_batches");

   //Beginning the transaction
   $db->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
   print("Transaction Started......\n");

   // $error = 1;

   //Creating a table
   $db->query("CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   print("Table Created......\n");

   //Inserting values
   $db->query("INSERT INTO Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Records Inserted......\n");


   //Committing the transaction
    // if($error){
    //     $db->rollback();
    // } else {
    //     $db->commit();
    //     print("Transaction Saved......\n");
    // }

   $db->commit();
   print("Transaction Saved......\n");

   //Closing the connection
   $db->close();
