<?php
   //Creating a connection
   $db = new mysqli("localhost", "root", "", "exam1");

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