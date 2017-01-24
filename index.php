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
            // Add dbconnect
            include("dbconnect.php");
            // Add Select query to display books table
            $query = "SELECT * FROM books";

            $result = mysqli_query($connection, $query);
        ?>
        <div class="container bg-info">
            <h1>What a load of CRUD</h1>
            <p>A basic php CRUD application made in order to learn the relationship and interaction of a MySQL database with php. A lot of improvement still to be made.</p>
            <div class="row">
                <div class="col-sm-4">
                    <h3>Insert Books</h3>
                    <form role="form" action="add.php" method="POST">
                        <div class="form-group">
                            <label>Book Title</label>
                            <input type="text" name="book-title" class="form-control" placeholder="Type Book Title Here">
                        </div>
                        <div class="form-group">
                            <label>Book Author</label>
                            <input type="text" name="book-author" class="form-control" placeholder="Type Book Author Here">
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Add Book Info</button>
                    </form>
                </div>
                <div class="col-sm-8">
                    <h3>Display All Records</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Book Title</th>
                                <th>Book Author</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['book_title']; ?></td>
                                <td><?php echo $row['book_author']; ?></td>
                                <td>
                                    <a href="editform.php?book-id=<?php echo $row['book_id']; ?>" class="btn btn-success" role="button">Edit Book</a>
                                    <a href="delete.php?book-id=<?php echo $row['book_id']; ?>" class="btn btn-danger" role="button">Delete Book</a>
                                </td>
                            </tr>
                            <?php
                                }

                                mysqli_close($connection);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
