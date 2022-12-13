// code
function calculateAspectRatioFit(srcWidth, srcHeight, maxWidth, maxHeight) {
  const ratio = Math.min(maxWidth / srcWidth, maxHeight / srcHeight);
  return { width: srcWidth * ratio, height: srcHeight * ratio };
}

window.addEventListener("DOMContentLoaded", (_) => {
  const recipeWeek = document.getElementById("home");
  const recipeWeekName = document.getElementById("recipe-week-name");

  const recipeItems = [
    {
      name: "Baguette",
      url:
        "https://www.196flavors.com/wp-content/uploads/2016/03/baguette-4-FP.jpeg",
    },
    {
      name: "Croissant",
      url:
        "https://images.food52.com/fpQdXZahmggXW7ojSre7cNH6v_A=/1930x1286/filters:format(webp)/b2d9941f-3089-4fea-a3fc-4e9f80451fef--2021-0211_croissants_bake-it-up-a-notch_3x2_rocky-luten_034.jpg",
    },
    {
      name: "Crêpe",
      url:
        "https://joyfoodsunshine.com/wp-content/uploads/2022/03/best-crepes-recipe-1x1-1.jpg",
    },
    {
      name: "Crêpe",
      url:
        "https://joyfoodsunshine.com/wp-content/uploads/2022/03/best-crepes-recipe-1x1-1.jpg",
    },
    {
      name: "Crêpe",
      url:
        "https://joyfoodsunshine.com/wp-content/uploads/2022/03/best-crepes-recipe-1x1-1.jpg",
    },
  ];

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
        <a href="aslkjfksdf">${recipe.name}</a>
          <img
            src="${recipe.url}">
      </div>`
    );
  }
});
