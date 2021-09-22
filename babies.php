<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Article",
                "headline": "可愛的大寶貝",
                "articleBody": "這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自己的身體，保養得很好，平常愛活動、喜歡到處走走，不會因為自己高齡而減少活動，這點很值得學習。一般人的主動...",
                "image": "styles/images/babies/1.jpg"
            }]
        }
    </script>
</head>

<body>
    <div class="wp whiteHeader">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="banner-section background-cover position-relative z-1">
                <div class="banner background-cover position-relative" style="background-image:url(styles/images/babies/banner.jpg)">
                    <div class="text text-white text-center position-absolute top-50 start-50 translate-middle w-100 px-4 z-1 pb-3">
                        <span class="tag d-block SourceSansPro font-16 les8 mb-3" data-aos="fade-up">MASTER OF SURGERY</span>
                        <h1 class="NotoSerifTC font-64 fw-bold position-relative les4 pb-3 pb-md-4 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="50">開心寶貝</h1>
                        <p class="font-20 les15 pt-md-2 mb-0 mb-md-3" data-aos="fade-up" data-aos-delay="100">透過嶄新技術，豐富經驗、實踐堅持值得信賴的專業</p>
                    </div>
                </div>
                <div class="submuenu d-none d-md-block container position-absolute z-1">
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="150">
                        <a href="./" class="flex-center bg-D32C2C bg-hover-D94A4A text-white w70 h70 flex-shrink-0">
                            <i class="icon-home font-22"></i>
                        </a>
                        <div class="bg-white d-block d-md-flex flex-center flex-grow-1 position-relative">
                            <ul class="noneStyle position-absolute position-md-static d-md-flex les1">
                                <li class="position-relative px-4">
                                    <a class="d-block px-md-3 py-2 py-md-1" href="babies">開心寶貝</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white d-none d-md-block w70 h70 flex-shrink-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="babies-section bg-grayF7F7F7 px-4 py-5">
                <div class="max1400 mx-auto pt-md-5 mt-md-3 pb-4 mb-3">
                    <div class="babyItemGroup mb-lg-4 pb-4 pb-md-5" v-for="(item,index) in babiesItem" :key="index" data-aos="fade-up">
                        <h2 class="d-none">{{item.title}}</h2>
                        <a class="babyItem row g-0 position-relative mx-auto pb-xl-1" :href="item.href">
                            <span class="img-block d-block col-12 col-lg-7 position-lg-absolute" :class="[index%2==0?'pe-lg-5':'ps-lg-5']">
                                <span class="d-block img-wrapper overflow-hidden" :class="[index%2==0?'me-xl-5':'ms-xl-5']">
                                    <span class="d-block jqimgFill">
                                        <img :src="item.img" :alt="item.alt">
                                    </span>
                                </span>
                            </span>
                            <span class="d-block col-12 col-lg-7 mt-lg-5" :class="[index%2==0?'ms-auto':'']">
                                <span class="d-block mt-lg-2 mt-xl-3" :class="[index%2==0?'ps-lg-5 ms-lg-4':'pe-lg-5 me-lg-4']">
                                    <span class="text-block d-block overflow-hidden bg-white py-4 py-md-5 px-4 p-xl-5">
                                        <span class="d-block ms-xl-3" :class="[index%2==0?'ps-lg-5 pe-xl-4 ms-xxl-5':'pe-lg-5 ms-xxl-4 me-xxl-5']">
                                            <span class="d-block font-24 fw-bold border-bottom-D8D8D8 les1 pt-xl-5 pb-2 pb-md-3 mt-xl-2 mb-2 mb-md-3">{{item.title}}</span>
                                            <span class="text-gray4D4D4D lh18 line3">{{item.content}}</span>
                                            <span class="d-block pt-4 mt-3 mb-xl-5">
                                                <span class="more flex-center overflow-hidden h50">
                                                    <i class="icon-plus font-14"></i>
                                                    <span class="hover-effect">
                                                        <span class="font-16">詳細內容</span>
                                                        <i class="icon-plus font-16 ms-2 ps-1"></i>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="pb-5 mb-2">
                    <?php include "pageElement.php"; ?>
                </div>
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
    <script>
        new Vue({
            el: ".wp",
            data: {
                babiesItem: [{
                        href: "baby",
                        img: "styles/images/babies/1.jpg",
                        alt: "圖片",
                        title: "可愛的大寶貝",
                        content: "這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自己的身體，保養得很好，平常愛活動、喜歡到處走走，不會因為自己高齡而減少活動，這點很值得學習。一般人的主動...",
                    },
                    {
                        href: "baby",
                        img: "styles/images/babies/2.jpg",
                        alt: "圖片",
                        title: "剛做完TAVI的可愛大寶貝",
                        content: "這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自己的身體，保養得很好，平常愛活動、喜歡到處走走，不會因為自己高齡而減少活動，這點很值得學習。一般人的主動...",
                    }, {
                        href: "baby",
                        img: "styles/images/babies/3.jpg",
                        alt: "圖片",
                        title: "可愛的大寶貝",
                        content: "這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自己的身體，保養得很好，平常愛活動、喜歡到處走走，不會因為自己高齡而減少活動，這點很值得學習。一般人的主動...",
                    },
                ]
            },
        })
    </script>
</body>

</html>