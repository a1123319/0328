<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
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
            $sql = "SELECT * FROM info WHERE no = " . $_GET["no"];

            if ($result = mysqli_query($link, $sql)) {
                $row = mysqli_fetch_assoc($result);
                $name = $row["name"];
                $address = $row["address"];
                $birthday = $row["birthday"];
            }
        ?>

        <form action="updateEx.php" method="POST">
            <input type="hidden" name="no" value="<?php echo $_GET["no"]?>">
            Your name<input type="text" name="name" value="<?php echo $name?>"><br>
            Your address<input type="text" name="address" value="<?php echo $address?>"><br>
            Your birthday<input type="date" name="birthday" value="<?php echo $birthday?>"><br>
            <input type="submit" value="Update"><br>
        </form>
    </body>
</html>