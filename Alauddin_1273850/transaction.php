<?php
   //Creating a connection
   $db = new mysqli("localhost", "root", "", "myDB");

   $db->autocommit(false);

   //Beginning the transaction
   $db->begin_transaction();
   print("Transaction Started......\n");

   $error = 0;

   //Creating a table
   $db->query("CREATE TABLE IF NOT EXISTS Test(Name VARCHAR(255), AGE INT)");
   print("Table Created......\n");

   //Inserting values
   $db->query("INSERT INTO Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Records Inserted......\n");

   //Committing the transaction
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