<?php

    $bid = $_GET['book-id'];

    // include dbconnect.php
    include("dbconnect.php");

    // queries
    $query = "DELETE FROM books WHERE book_id='$bid'";

    if(mysqli_query($connection, $query)) {

        // redirect page from delete.php to index.php
        header("Location: /");

    } else {

        echo " Error! Your record was not deleted". mysqli_error($connection);
        
    }

    mysqli_close($connection);
?>
