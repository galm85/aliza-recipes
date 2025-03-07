    var categoriesSwiper = new Swiper(".homepage__categories-wrapper .swiper", {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 20,
        autoplay: {
            delay: 5000,
          },
        breakpoints: {
            // when window width is >= 0px
            0: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 20
              },
            // when window width is >= 1440px
              1440: {
                slidesPerView: 4,
                spaceBetween: 20
              }
          }
    });


    var recipesSwiper = new Swiper(".homepage__recipes-wrapper .swiper", {
        loop: true,
        slidesPerView: 4,
        spaceBetween: 20,
        autoplay: {
            delay: 5000,
          },
        breakpoints: {
            // when window width is >= 0px
            0: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 20
              },
            // when window width is >= 1440px
              1440: {
                slidesPerView: 4,
                spaceBetween: 20
              }
          }
    });
