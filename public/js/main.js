//////////////////////////////////////////////////// navbar for userpage
if (document.querySelector(".navbar")) {
    const menu = document.querySelector("#menu-bar");
    const nav = document.querySelector("#nav-list");

    menu.onclick = () => {
        nav.classList.toggle("navbar-collapse");
    };
}
////////////////////////////////////////////////////////////// slider hero section
if (document.querySelector(".mySwiper")) {
    let swiper = new Swiper(".mySwiper", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    const bullets = document.querySelectorAll(".swiper-pagination-bullet");
    const slidersDec = document.querySelectorAll(".mySwiper__slide__dec");
    bullets.forEach((ele) => {
        ele.addEventListener("click", function () {
            slidersDec.forEach((slide) => {
                slide.classList.toggle("mySwiper__slide__dec--active");
            });
        });
    });
}

////////////////////////////////////////////////////////gallery
if (document.querySelector(".gallery")) {
    let swiper = new Swiper(".gallery-slider", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true,
        },
        loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false },
    });
}

////////////////////////////////////////////////////////
if (document.querySelector(".instructors__carousel")) {
    const carousel = document.querySelector(".carousel");
    // console.log(carousel);

    const arrowBtns = document.querySelectorAll(".wrapper__arrow");
    // console.log(arrowBtns);

    const cardWidth = carousel.querySelector(".instructors__card").offsetWidth;
    // console.log(cardWidth);

    arrowBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            carousel.scrollLeft +=
                btn.id === "left-arrow" ? -cardWidth : cardWidth;
        });
    });
}

////////////////////////

if (document.querySelector(".carousel")) {
    /////////////////////////////
    // const carouselInstructors = document.querySelector(
    //     ".carousel__instructors"
    // );
    // const arrowBtn = document.querySelectorAll(".wrapper__arrow");
    // const cardInstructorWidth =
    //     carouselInstructors.querySelector(".instructors__card").offsetWidth +
    //     18;
    // arrowBtn.forEach((arrow) => {
    //     arrow.addEventListener("click", () => {
    //         carouselInstructors.scrollLeft +=
    //             arrow.id === "left-arrow"
    //                 ? -cardInstructorWidth
    //                 : cardInstructorWidth;
    //     });
    // });
    //////////////////////////////////////
}
///////////////////////
if (document.querySelector(".faq")) {
    const head = document.querySelectorAll(".accordion-item__header");
    // const accordionBody = document.querySelector(".accordion-item__body");
    const accordionItem = document.querySelectorAll(".accordion-item");

    head.forEach((ele) => {
        // accordionItem.className = "accordion-item";
        ele.addEventListener("click", function () {
            // });
            accordionItem.forEach((element) => {
                element.classList.remove("display-accordion");
            });
            const accordion = ele.closest(".accordion-item");
            // console.log(accordion);
            accordion.classList.toggle("display-accordion");
        });
    });

    console.log("ffff");
}

////////////////
if (document.querySelector(".tooltip")) {
    let btn = document.querySelector("#bars");
    let sidebar = document.querySelector(".sidebar");
    btn.onclick = function () {
        sidebar.classList.toggle("unActiveSide");
    };
    /////
    // var modal = document.querySelector(".modal");

    // // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function (event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // };
}
