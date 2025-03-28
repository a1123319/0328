<?php
    $link = mysqli_connect(
        "localhost",
        "root",
        "",
        "school"
    );
    mysqli_set_charset($link, "utf8");

    $sql = "UPDATE info SET name = '" . $_POST["name"] . "', address = '" . $_POST["address"] . "', birthday = '" . $_POST["birthday"] . "' WHERE no = " . $_POST["no"];

    if ($result = mysqli_query($link, $sql)) {
        header("Location: dbtest.php");
    }
?>