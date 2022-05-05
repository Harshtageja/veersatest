<?php

   $con = "dbname=d49bepre1ggrur host=ec2-52-4-104-184.compute-1.amazonaws.com port=5432 user=d49bepre1ggrur password=3e12f3dc93d1d2c5a3af3ed6ef69c10ec477ae38288412437ebd00ef4b117c53 sslmode=require";


   if (!$con) 
   {
     echo "Database connection failed.";
   }
   else 
   {
     echo "Database connection success.";
   }

?>
