document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll(".img-about-1, .img-about-2");

    const triggerAnimations = () => {
        images.forEach((img) => {
            img.classList.add("visible");
        });
    };

    // Remove and re-add the 'visible' class to retrigger animation
    const resetAnimations = () => {
        images.forEach((img) => {
            img.classList.remove("visible");
        });
        setTimeout(triggerAnimations, 100); // Delay to retrigger animation
    };

    // Trigger animations on page load
    resetAnimations();
});

// Optional JavaScript for additional interactivity (if required)
document.addEventListener("DOMContentLoaded", () => {
    const featureBoxes = document.querySelectorAll(".feature-box");

    featureBoxes.forEach(box => {
        box.addEventListener("mouseenter", () => {
            box.style.boxShadow = "0 15px 30px rgba(255, 102, 0, 0.6)";
        });

        box.addEventListener("mouseleave", () => {
            box.style.boxShadow = "0 10px 20px rgba(255, 102, 0, 0.5)";
        });
    });
});
