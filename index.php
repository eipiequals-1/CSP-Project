<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>French Recipes</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./styles/index.css">
</head>

<body>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#recipes">Recipes</a></li>
      <li><a href="about.php">About</a></li>
      <div class="search-container">
        <input type="text" placeholder="Search for recipes..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </ul>
  </nav>

  <section class="floating-section" id="home">
    <h1>Recipes of the Week</h1>
    <h2 id="recipe-week-name">Baguette</h2>
    <a href="#recipes">Explore our recipes!</a>
  </section>
  <section class="floating-section" id="recipes">
    <h1>Recipes</h1>
    <p>Explore all of the delicious recipes!</p>
  </section>
  <?php ?>
  <script src="./js/index.js"></script>
  <script src="./js/recipes.js"></script>
</body>

</html>