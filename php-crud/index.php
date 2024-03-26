<?php

include 'config.php';

function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

if(isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 
    $password = hashPassword($_POST['password']);

    $sql = "INSERT INTO `crud` (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

    $result = mysqli_query($connect, $sql);

    if ($result) {
        header("Location: display.php");
        exit();
    }
    
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation Practice - PHP</title>
</head>

<body>
    <main>
        <div class="container my-5 p-5 mx-auto">
            <h1 class="text-center">Crud Operation</h1>
            <form id="myForm" method="post">
                <div class="mb-3">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter your name"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" placeholder="Enter your email"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="phone" placeholder="Phone Number" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password"
                        autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </form>
        </div>
    </main>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>