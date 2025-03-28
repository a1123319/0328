<?php
    echo $_GET["no"];

    $link = mysqli_connect(
        "localhost",
        "root",
        "",
        "school"
    );

    mysqli_set_charset($link, "utf8");
    $sql = "DELETE FROM info WHERE no = " . $_GET["no"];

    if (mysqli_query($link, $sql)) {
        header("Location: dbtest.php");
    }
?>