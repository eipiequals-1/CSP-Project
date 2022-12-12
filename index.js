// code
function calculateAspectRatioFit(srcWidth, srcHeight, maxWidth, maxHeight) {
  const ratio = Math.min(maxWidth / srcWidth, maxHeight / srcHeight);
  return { width: srcWidth * ratio, height: srcHeight * ratio };
}

function resize() {
  const mainImages = document.getElementsByClassName("recipe-week-img");
  for (let image of mainImages) {
    const resize = calculateAspectRatioFit(
      image.width,
      image.height,
      window.innerWidth / 2.0,
      300
    );
    image.style.width = resize.width + "px";
    image.style.height = resize.height + "px";
  }
}

window.addEventListener("DOMContentLoaded", (_) => {
  const recipeWeek = document.getElementById("home");
  const recipeWeekName = document.getElementById("recipe-week-name");

  const recipeItems = [
    {
      name: "Baguette",
      url: "https://www.196flavors.com/wp-content/uploads/2016/03/baguette-4-FP.jpeg"
    },
    {
      name: "Croissant",
      url: "https://images.food52.com/fpQdXZahmggXW7ojSre7cNH6v_A=/1930x1286/filters:format(webp)/b2d9941f-3089-4fea-a3fc-4e9f80451fef--2021-0211_croissants_bake-it-up-a-notch_3x2_rocky-luten_034.jpg"
    },
    {
      name: "Crêpe",
      url: "https://joyfoodsunshine.com/wp-content/uploads/2022/03/best-crepes-recipe-1x1-1.jpg"
    }
  ];


  // --------------- slideshow --------------------
  let slideIndex = -1;
  showSlides();
  resize();

  function showSlides() {
    slideIndex++;

    const recipe = recipeItems[slideIndex % recipeItems.length];
    recipeWeek.style.backgroundImage = `url("${recipe.url}")`;
    recipeWeekName.innerHTML = recipe.name;

    resize();
    setTimeout(showSlides, 4 * 1000);
  }
});
