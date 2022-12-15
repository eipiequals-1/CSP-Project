<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Recipes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/recipe.css">

    <style>
        #ingredients ul,
        #procedure {
            text-align: left;
            line-height: 2.5em;
        }
    </style>
</head>

<body>
    <?php
        $url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'];
        $recipe = htmlspecialchars($_GET["recipe"]);
        echo "<script>const recipeNameFromPhp = '" . $recipe . "';</script>";

        // database work
        $host = "localhost";
        $dbname = "p1recipe2022";
        $user = "root";
        $password = "";
        $port = 3306;
        // Create connection
        $conn = new mysqli("localhost", $user, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM recipe";
        $result = $conn->query($sql);

        if ($result) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["first"]. " " . $row["last"]. "<br>";
            }
        }
    ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Recipes</a></li>
            <li><a href="about.php">About</a></li>
            <div class="search-container">
                <input type="text" placeholder="Search for recipes..." />
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </ul>
    </nav>

    <section class="floating-section" id="home">
        <h1 id="recipe-week-name"></h1>
    </section>
    <section class="floating-section" id="ingredients"></section>
    <section class="floating-section" id="procedure"></section>

    <script src="./js/recipes.js"></script>
    <script src="./js/recipe.js"></script>
</body>

</html>