<?php
     $host = "localhost";
     $username = "u1581824_admin";
     $password = "&pNLjrIwoE~v";
     $dbname = "u1581824_jlumbangDB";

     // creating a connection
     $con = mysqli_connect($host, $username, $password, $dbname);
     
     // to ensure that the connection is made
     if (!$con)
     {
         die("Gagal terkoneksi!" . mysqli_connect_error());
     }
