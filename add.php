<?php
    // Include dbconnect
    include("dbconnect.php");

    // Book Title
    $title = $_POST["book-title"];

    // Book Author
    $author = $_POST["book-author"];

    // Queries
    $query = "INSERT INTO books(book_title, book_author) VALUES('$title','$author')";

    if(mysqli_query($connection, $query)) {

        // redirect page from add.php to index.php
        header("Location: /");

    } else {

        echo " An error occured while adding your book to the database" . mysqli_error($connection);

    }

    mysqli_close($connection);
?>
