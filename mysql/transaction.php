<?php
   //Creating a connection
   $db = new mysqli("localhost", "root", "", "wdpf55_batches");

   $db->autocommit(FALSE);

   $db->begin_transaction();
   print("Transaction Started......\n");

   $error = 0;
   $db->query("IF NOT EXIST CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   print("Table Created......\n");

   $db->query("INSERT INTO Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Records Inserted......\n");

  if($error){
        $db->rollback();
        echo "No query excuted";
  } else {
        $db->commit();
        print("Transaction Saved......\n");
  }
    //Closing the connection
   $db->close();
?>