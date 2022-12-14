<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/index.css">

    <style>
        #about h1 {
            text-align: center;
        }
    </style>
</head>

<body>
  <?php
      require_once("./scripts/dbconnect.php");
      require_once("./scripts/query.php");
  ?>

  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php#recipes">Recipes</a></li>
      <li><a href="#">About</a></li>
      <li><a href="search.php">Search</a></li>
    </ul>
  </nav>

    <section class="floating-section" id="about">
        <h1>Made by the French for the French!</h1>
    </section>

    <script src="./js/recipe.js"></script>
</body>

</html>