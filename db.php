<?php
   $username = 'afternoo_grcuser';
   $database='afternoo_grc';
   $password = 'It305305.';
   $hostname='localhost';

   $cnxn =@mysqli_connect($hostname,
     $username,$password,$database ) or die("Error connecting to database: ".mysqli_connect_error());

   //echo "connected to database";

