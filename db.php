<?php

    $dbhost = 'localhost';
    $dbuser = 'YOUR DB USERNAME';
    $dbpass = 'YOUR DB USER PASS';
    $dbname = 'YOUR DB NAME';

    $con=mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) //connect to the database server
    or die ("Could not connect to mysql because ".mysqli_error());

    mysqli_select_db($con,$dbname)  //select the database
    or die ("Could not select to mysql because ".mysqli_error());

    ?>
    