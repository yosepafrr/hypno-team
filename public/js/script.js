document.getElementById('carousel-dot').addEventListener('click', function() {
    this.classList.toggle('active-carousel-dot');
  });


document.addEventListener("DOMContentLoaded", function () {
    let scrollContainer = document.getElementById("wrapper-card");
    let backBtn = document.getElementById("back-button");
    let nextBtn = document.getElementById("next-button");

    backBtn.addEventListener("click", function () {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 415; // Sesuaikan nilai scroll yang diinginkan
    });

    nextBtn.addEventListener("click", function () {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 415; // Sesuaikan nilai scroll yang diinginkan
    });
});