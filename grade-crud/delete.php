<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if ($id > 0) {
        $sqlquery = "DELETE FROM `grade` WHERE `id` = $id";
        $result = mysqli_query($connect, $sqlquery);

        if ($result) {
            header("location: display.php");
            exit;
        } else {
            echo "ERROR: " . mysqli_error($connect);
        }

    } else {
        echo "Invalid ID";
    }

} else {
    echo "ID not set!";
}

?>