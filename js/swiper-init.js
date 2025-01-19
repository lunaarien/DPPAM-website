document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.swiper-container', {
        loop: true, // Optional: Makes the swiper loop infinitely
    });

    // Event listeners for custom arrows
    document.getElementById('left-arrow').addEventListener('click', function() {
        swiper.slidePrev();
    });

    document.getElementById('right-arrow').addEventListener('click', function() {
        swiper.slideNext();
    });
});
