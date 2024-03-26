<?php include 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Data - PHP</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="btn my-5">
                <a href="index.php"><button class="btn btn-primary">Add User</button></a>
            </div>
            <div class="table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SL Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Password</th>
                            <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $sqlSelect = "select * from `crud`";
                        $connectQuery = mysqli_query($connect, $sqlSelect);

                        if ($connectQuery) {
                            while ($row = mysqli_fetch_assoc($connectQuery)) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $password = $row['password'];

                                echo "<tr>
                                        <td>$id</td>
                                        <td>$name</td>
                                        <td>$email</td>
                                        <td>$phone</td>
                                        <td>@$password</td>
                                        <td>
                                            <a href=\"update.php?updateId=$id\"><button class=\"btn btn-success mb-2 p-2 mx-2\">Update</button></a>

                                            <a href=\"delete.php?deleteId=$id\"><button class=\"btn btn-danger mb-2 p-2 mx-2\">Delete</button></a>
                                        </td>
                                    </tr>";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>