<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $link = mysqli_connect(
                "localhost",
                "root",
                "",
                "school"
            );
            mysqli_set_charset($link, "utf8");
            
            $sql = "INSERT INTO info (name, address, birthday) VALUES ('" . $_POST["name"] . "', '" . $_POST["address"] . "', '" . $_POST["birthday"] . "')";
            echo $sql;
            
            if (mysqli_query($link, $sql)) {
                header("Location: /dbtest.php");
            }

            echo $_POST["name"] . "<br>" . $_POST["address"] . "<br>" . $_POST["birthday"] . "<br>";
        ?>
    </body>
</html>