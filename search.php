<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>French Recipes | Search</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/index.css">

    <style>
        .search-container input {
            padding: 15px;
            border-radius: 30px;
            font-size: larger;
        }

        .search-container button {
            background-color: #bcbce4;
            padding: 14px;
            border-radius: 20px;
        }

        .search-container button:hover {
            background-color: #a3a3c7;
        }

        /* make the recipe invisible by default */
        .recipe-list {
            display: none;
        }

        .recipe-list img {
            max-width: 200px;
            border-radius: 100px;
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
            <li><a href="about.php">About</a></li>
            <li><a href="#">Search</a></li>
        </ul>
    </nav>

    <section class="floating-section">
        <h1 id="">Search</h1>
        <div class="search-container">
            <input id="search" type="text" name="recipe-search" placeholder="Search for a recipe">
            <button id="search-btn">Search</button>
        </div>
    </section>

    <script src="./js/recipes.js"></script>
    <!-- script for customizing the search container -->
    <script>


        document.addEventListener("DOMContentLoaded", (_) => {
            const showRecipes = () => {
                // get the current search
                const searchString = searchBar.value.toLowerCase().trim();

                let foundRecipe = false;
                // loop through recipes and find those that are searched
                for (let i = 0; i < recipeItems.length; i++) {
                    const recipe = recipeItems[i];
                    // check if it is searched
                    // if it is make it visible
                    if (recipe.name.toLowerCase().startsWith(searchString) && searchString !== "") {
                        foundRecipe = true;
                        document.getElementsByClassName("recipe-list")[i].style.display = "block";
                    } else {
                        document.getElementsByClassName("recipe-list")[i].style.display = "none";
                    }
                }
                // display the toast depending on if a recipe was found
                if (foundRecipe) {
                    document.getElementById("toast").style.display = "none";
                } else {
                    document.getElementById("toast").style.display = "block";
                }
            };


            // add all recipes to the webpage
            // and make them invisiable by default
            for (const recipe of recipeItems) {
                document.getElementsByClassName("floating-section")[0].insertAdjacentHTML("beforeend",
                    `
                <div class="recipe-list">
                    <a href="recipe.php?recipe=${recipe.name}">${recipe.name}</a>
                    <br>
                    <img src="${recipe.url}">
                </div>
                    `);
            }
            // add extra "toast" saying recipe unavailable
            document.getElementsByClassName("floating-section")[0].insertAdjacentHTML("beforeend",
                `<div id="toast">
                    <h2>No recipes match your searches!</h2>
                </div>`
            );

            // add search when user clicks enter
            const searchBar = document.getElementById("search");
            searchBar.addEventListener("keyup", ev => {
                // if (ev.code === "Enter") {
                    showRecipes();
                // }
            });

            // get search button and add button event listener
            const searchBtn = document.getElementById("search-btn");
            searchBtn.addEventListener("click", showRecipes);
        });
    </script>
</body>

</html>