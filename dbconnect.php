<?php
    /* Setting up a connection to the database */

    // Your database's location. "localhost" Didn't work for me, but it may work for you
    $databaseHost = "127.0.0.1";
    // Your database's user
    $databaseUsername = "root";
    // Your database's password. It may be "root" if you didn't specify a password
    $databasePassword = "S1520s0117";
    // Your database's Name
    $databaseName = "book_collection";

    $connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if(!$connection){
        die("There was an error connecting to the database.");
    }

    /* Initial check to see if connected to the database */
    // echo("The connection to your database has been created successfully.");
?>
