// code
window.addEventListener("DOMContentLoaded", (_) => {
    // get the title and image header
    const recipeTitle = document.getElementById("home");
    const recipeTitleText = document.getElementById("recipe-week-name");
    // get the ingredients and procedure container
    const ingredientsContainer = document.getElementById("ingredients");
    const procedureContainer = document.getElementById("procedure");

    // recipeNameFromPhp comes from php echo param
    let recipe = null;
    for (let rec of recipeItems) {
        if (rec.name == recipeNameFromPhp) {
            recipe = rec;
        }
    }

    // change the document title
    document.title = recipe.name + " Recipe";

    // add title and background
    recipeTitle.style.backgroundImage = `url("${recipe.url}")`;
    recipeTitleText.innerHTML = recipe.name;

    // add ingredients
    let ingredients = "";
    for (let ingredient of recipe.ingredients) {
        ingredients += "<li>" + ingredient + "</li>";
    }
    ingredientsContainer.insertAdjacentHTML(
        "beforeend",
        `<h1>Ingredients</h1>
        <ul>
            ${ingredients}
        </ul>
        `
    );

    // add procedure
    let procedure = "";
    for (let p of recipe.procedure) {
        procedure += "<li>" + p + "</li>";
    }

    procedureContainer.insertAdjacentHTML(
        "beforeend",
        `<h1>Procedure</h1>
        <ol>
            ${procedure}
        </ol>`
    );
});
