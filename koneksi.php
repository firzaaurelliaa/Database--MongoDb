<?php
   // connect to mongodb
   $m = new MongoClient();
	
   echo "Connection to database successfully";
   // select a databasee
   $db = $m->datasiswarpl1;
	
   echo "Database mydb selected";
?>
