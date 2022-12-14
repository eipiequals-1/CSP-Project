<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Recipes</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/index.css">

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
    ?>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#recipes">Recipes</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="search.php">Search</a></li>
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