<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sdljfhsdjlkf</title>
</head>
<body>
    <h1>Recipe page</h1>
    <?php
        $url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'];
        $recipe = htmlspecialchars($_GET["recipe"]);
        
        // database work
        $host = "localhost";
        $dbname = "p1recipe2022";
        $user = "root";
        $password = "";
        $port = 3306;
        $db = new mysqli("localhost", $user, $password, $db) or die("Unable to connect to database!");
        echo "great work";
    ?>

</body>
</html>