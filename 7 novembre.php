<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <form method="Post">

        <input type="text" name="number" required>
        <input type="submit" name="submit">
        <?php
        
        if (count($_POST) != 0 ) {
            if (is_numeric($_POST["number"]) && strlen($_POST["number"]) == 4) {
                echo $_POST["number"];
                echo strlen("Hello");
            }
        }
        ?>

        </form>
</body>
</html>