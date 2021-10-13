Vue.use(window.VueAwesomeSwiper);
let loop=indexEduList.length>2?true:false;
new Vue({
    el: ".wp",
    data: {
        indexBannerData:{
            list: indexBannerList,
            swiperOptions: {
                effect:"fade",
                loop: true,
                speed:800,
                navigation: {
                    nextEl: ".index-banner-section .swiper-button-next",
                    prevEl: ".index-banner-section .swiper-button-prev"
                },
                pagination: {
                    el: ".index-banner-section .swiper-pagination",
                    clickable:true
                },
            },
        },
        indexEduData:{
            list: indexEduList,
            swiperOptions: {
                slidesPerView: 1,
                spaceBetween: 24,
                loop:loop,
                speed:800,
                navigation: {
                    nextEl: ".index-edu-section .swiper-button-next",
                    prevEl: ".index-edu-section .swiper-button-prev"
                },
                breakpoints: {
                    992:{
                        slidesPerView: 1.2,
                    },
                    1400:{
                        slidesPerView: 2,
                    },
                    1600: {
                        slidesPerView: 2.27,
                        spaceBetween: 50,
                    }
                }
            },
        },
        indexNewData:{
            list: indexNewList,
            swiperOptions: {
                slidesPerView:1,
                spaceBetween:0,
                speed:800,
                pagination: {
                    el: ".index-new-section .swiper-pagination",
                    clickable:true
                },
                breakpoints: {
                    768:{
                        slidesPerView: 2,
                        spaceBetween:24,
                    },
                    992:{
                        slidesPerView: 2,
                        spaceBetween:24,
                    },
                    1600: {
                        slidesPerView:3,
                        spaceBetween:15,
                    }
                }
            },
        },
    },
    computed: {
        bannerSwiper() {
            return this.$refs.bannerSwiper.$swiper
        }
    },
    mounted() {
        const self = this
        self.bannerSwiper.on('slideChangeTransitionStart', function() {
            $(self.bannerSwiper.$el).find(".aos-animate").removeClass("aos-animate");
        })
        self.bannerSwiper.on('slideChangeTransitionEnd', function() {
            $(self.bannerSwiper.$el).find(".aos-init").addClass("aos-animate");
        })
        console.log(self.indexEduData.list.length);
    }
});