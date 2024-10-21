document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    let count = 0;

    function nextSlide() {
        count++;
        if (count >= slider.children.length) {
            count = 0;
        }
        updateSlider();
    }

    function prevSlide() {
        count--;
        if (count < 0) {
            count = slider.children.length - 1;
        }
        updateSlider();
    }

    function updateSlider() {
        const translateValue = -count * 100 + "%";
        slider.style.transform = "translateX(" + translateValue + ")";
    }

    setInterval(nextSlide, 3000);

    document.addEventListener("keydown", function (event) {
        if (event.key === "ArrowRight") {
            nextSlide();
        } else if (event.key === "ArrowLeft") {
            prevSlide();
        }
    });

    // Add event listeners for navigation buttons
    document.getElementById("nextBtn").addEventListener("click", nextSlide);
    document.getElementById("prevBtn").addEventListener("click", prevSlide);
});