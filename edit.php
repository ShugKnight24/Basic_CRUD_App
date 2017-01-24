<?php
    // include dbconnect.php
    include("dbconnect.php");

    $id = $_GET['book-id'];

    $title = $_GET['book-title'];

    $author = $_GET['book-author'];

    // Queries
    $query = "UPDATE books SET book_title='$title', book_author='$author' WHERE book_id='$id'";

    if(mysqli_query($connection, $query)) {

        // redirect page from edit.php to index.php
        header("Location: /");

    } else {

        echo "Error! Your record was not updated.". mysqli_error($connection);

    }

    mysqli_close($connection);
?>
