<?php

include 'config.php';

$id = $_GET['updateid'];

$sqlquery = "SELECT * FROM `grade` WHERE id = $id";
$result = mysqli_query($connect, $sqlquery);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['submitresult'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $degree = $_POST['degree'];
    $cgpa = $_POST['cgpa'];


    $sqlquery = "UPDATE `grade` SET id=$id, name = '$name', email = '$email', degree = '$degree', cgpa = '$cgpa'";
    $result = mysqli_query($connect, $sqlquery);

    if ($result) {
        header("location: display.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Results</title>

    <!-- link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="heading">
            <h2 class="text-center p-4 bg-success text-white bg-opacity-75">Results Update - CRUD</h2>
        </div>
        <div class="container mx-auto w-100 py-4">
            <form method="post" class="row gy-2 gx-3 align-items-center justify-content-center">
                <div class="col-auto">
                    <input type="text" class="form-control" id="autoSizingInput" placeholder="Name" name="name">
                </div>
                <div class="col-auto">
                    <input type="email" class="form-control" id="autoSizingInputGroup" placeholder="Email" name="email">
                </div>
                <div class="col-auto w-25">
                    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Degree"
                        name="degree">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="CGPA" name="cgpa">
                </div>
                <div class="error-msg">
                    <p>
                        <?php $errorMsg; ?>
                    </p>
                </div>
                <div class="d-grid">
                    <button type="submit" class="w-50 mx-auto btn btn-primary" name="submitresult">Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>