<?php

include 'config.php';

if(isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];

    $deleteQuery = "delete from `crud` where id = $id";
    $result = mysqli_query ($connect, $deleteQuery);

    if($result) {
        header('location: display.php');
    }
    else {
        die(mysqli_error($connect));
    }
}

?>