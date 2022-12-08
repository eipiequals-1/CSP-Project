// code
function calculateAspectRatioFit(srcWidth, srcHeight, maxWidth, maxHeight) {
  const ratio = Math.min(maxWidth / srcWidth, maxHeight / srcHeight);
  return { width: srcWidth * ratio, height: srcHeight * ratio };
}

function resize() {
  const mainImages = document.getElementsByClassName("main-recipe-img");
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
  // --------------- slideshow --------------------
  let slideIndex = -1;
  showSlides();
  resize();

  function showSlides() {
    let slides = document.getElementsByClassName("slides");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;

    slides[slideIndex % slides.length].style.display = "block";

    resize();
    setTimeout(showSlides, 4000);
  }
});
