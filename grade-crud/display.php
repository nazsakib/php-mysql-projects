<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Display</title>

    <!-- link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="heading">
            <h2 class="text-center p-4 bg-success text-white bg-opacity-75">Students Result Display - CRUD</h2>
        </div>
        <div class="container mx-auto w-50 py-4">
            <div class="add py-4">
                <a href="index.php"><button class="btn btn-info">Add More</button></a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Degree</th>
                        <th scope="col">CGPA</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sqlselect = "SELECT * FROM `grade`";
                    $connectquery = mysqli_query($connect, $sqlselect);

                    if ($connectquery) {
                        while ($row = mysqli_fetch_assoc($connectquery)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $degree = $row['degree'];
                            $cgpa = $row['cgpa'];

                            echo "
                                    <tr>
                                        <td>$id</td>
                                        <td>$name</td>
                                        <td>$email</td>
                                        <td>$degree</td>
                                        <td>$cgpa</td>
                                        <td>
                                            <a href=\"update.php\">
                                                <button class=\"btn btn-success\">Update
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                                                        class=\"bi bi-plus\" viewBox=\"0 0 16 16\">
                                                        <path
                                                            d=\"M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4\" />
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href=\"delete.php\">
                                                <button class=\"btn btn-danger\">Delete
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\"
                                                class=\"bi bi-x\" viewBox=\"0 0 16 16\">
                                                <path
                                                    d=\"M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708\" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                ";
                        }
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>