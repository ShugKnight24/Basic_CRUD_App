<?php
if (empty($_GET['book-id'])) {
    header('Location: /');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Book CRUD App</title>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Javascript -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            $id = (int)$_GET['book-id'];

            // Include dbconnect
            include("dbconnect.php");

            // Create queries
            $query = "SELECT * FROM books WHERE book_id=$id";

            $result = mysqli_query($connection, $query);

            // Check if book_title and book_author are available
            /* while($row = mysqli_fetch_assoc($result)){
                echo $row['book_title'];
                echo '<br>';
                echo $row['book_author'];
            } */
        ?>
        <div class="container bg-info">
            <h3>Edit Book Information</h3>
            <form role="form" action="edit.php" method="GET">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <input type="hidden" name="book-id" value="<?php echo $row['book_id']; ?>">
                <div class="form-group">
                    <label>Book Title</label>
                    <input type="text" name="book-title" class="form-control" value="<?php echo $row['book_title']; ?>">
                </div>
                <div class="form-group">
                    <label>Book Author</label>
                    <input type="text" name="book-author" class="form-control" value="<?php echo $row['book_author']; ?>">
                </div>
                <button type="submit" class="btn btn-success btn-block">Change Book Information</button>
                <?php
                    }

                    mysqli_close($connection);
                ?>
            </form>
        </div>
    </body>
</html>
