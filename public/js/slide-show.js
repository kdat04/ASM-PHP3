$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 4, // Đặt số lượng mục mặc định hiển thị là 4
        margin: 20,
        nav: false,
        autoplay: true, // Enable autoplay
        autoplayTimeout: 3000, // Set autoplay timeout (3 seconds)
        autoplayHoverPause: true, // Pause on hover
        responsive: {
            0: {
                items: 1, // 0px trở lên hiển thị 1 mục
            },
            600: {
                items: 2, // 600px trở lên hiển thị 2 mục
            },
            1000: {
                items: 3, // 1000px trở lên hiển thị 3 mục
            },
            1200: {
                items: 4, // 1200px trở lên hiển thị 4 mục
            },
        },
    });
});


//
