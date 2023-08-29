<?php
     $host = "localhost";
     $username = "u1581824_user";
     $password = "hxghAVoU8G7L";
     $dbname = "u1581824_jlumbangDB";

     // creating a connection
     $con = mysqli_connect($host, $username, $password, $dbname);
     
     // to ensure that the connection is made
     if (!$con)
     {
         die("Connection failed!" . mysqli_connect_error());
     }
