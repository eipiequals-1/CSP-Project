// code
function calculateAspectRatioFit(srcWidth, srcHeight, maxWidth, maxHeight) {
  const ratio = Math.min(maxWidth / srcWidth, maxHeight / srcHeight);
  return { width: srcWidth * ratio, height: srcHeight * ratio };
}

window.addEventListener("DOMContentLoaded", (_) => {
  const recipeWeek = document.getElementById("home");
  const recipeWeekName = document.getElementById("recipe-week-name");

  // --------------- slideshow --------------------
  let slideIndex = -1;
  showSlides();

  function showSlides() {
    slideIndex++;

    const recipe = recipeItems[slideIndex % recipeItems.length];
    recipeWeek.style.backgroundImage = `url("${recipe.url}")`;
    recipeWeekName.innerHTML = recipe.name;

    setTimeout(showSlides, 10 * 1000);
  }

  const allRecipeContainer = document.getElementById("recipes");
  // add new recipes
  for (let i = 0; i < recipeItems.length; i++) {
    const recipe = recipeItems[i];
    allRecipeContainer.insertAdjacentHTML(
      "beforeend",
      `<div class="recipe-list">
        <a href="recipe.php?recipe=${recipe.name}">${recipe.name}</a>
          <img
            src="${recipe.url}">
      </div>`
    );
  }
});
