<?php
   //Creating a connection
   $db = mysqli_connect("localhost", "root", "", "idb_bisew");

   //Beginning the transaction
   $db->begin_transaction(MYSQLI_TRANS_START_READ_ONLY);
   print("Transaction Started......\n");

   //Creating a table
    $db->query("CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   print("Table Created......\n");

   //Inserting values
   $db->query("INSERT INTO Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Records Inserted......\n");

   //Committing the transaction
   $db->commit();
   print("Transaction Saved......\n");

   //Closing the connection
   $db->close();
?>