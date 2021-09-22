<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <h1 class="d-none">張效煌醫師官方網站</h1>
            <div class="index-banner-section text-white position-relative">
                <swiper ref="bannerSwiper" :options="indexBannerData.swiperOptions">
                    <swiper-slide v-for="(item, index) in indexBannerData.list" :key="index">
                        <div class="img background-cover h-100vh" :style="{backgroundImage:'url('+item.cover+')'}">
                            <div class="text max900 w-100 position-absolute top-50 start-50 translate-middle text-center p-5" data-aos="fade-in" data-aos-delay="100">
                                <span class="tag d-block SourceSansPro les9 rounded-10 lh19 py-md-2 mb-3 mb-md-4 mx-auto mt-3" data-aos="fade-up" data-aos-delay="0">MASTER OF SURGERY</span>
                                <p class="NotoSerifTC font-72 les2 lh12 mb-2 mb-md-4 pb-1" data-aos="fade-up" data-aos-delay="150">
                                    <span class="d-block d-sm-inline fw-900">{{item.title1}}</span>
                                    <span class="d-block d-sm-inline fw-600">{{item.title2}}</span>
                                </p>
                                <p class="content font-24 les2 mb-4 mx-auto">
                                    <span class="d-block" data-aos="fade-up" data-aos-delay="150">臺北榮民總醫院心臟移植及人工心臟中心主任</span>
                                    <span class="d-block" data-aos="fade-up" data-aos-delay="200">用創新技術，堅持值得信賴的專業</span>
                                </p>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper>
                <div class="d-none d-lg-block swiper-button swiper-button-prev text-white text-hover-primary"></div>
                <div class="d-none d-lg-block swiper-button swiper-button-next text-white text-hover-primary"></div>
                <div class="swiper-pagination start-50 translate-middle-x"></div>
            </div>
            <div class="index-tech-section py-5 mb-lg-5 px-4">
                <div class="container">
                    <span class="d-block text-center les1 pt-md-5" data-aos="fade-up">
                        <span class="d-block d-md-inline">先進醫療技術、豐富經驗，</span>
                        <span class="d-block d-md-inline">提供最好的醫療品質</span>
                    </span>
                    <h2 class="NotoSerifTC dec-line dec-line-959595 font-46 text-center position-relative les15 pb-2 pb-md-0 pt-3 mt-3 mb-4 mb-md-5" data-aos="fade-up">
                        <span class="fw-600">先進醫療</span>
                        <span class="fw-900">創新技術</span>
                    </h2>
                    <div class="techItems row g-0" data-aos="fade-up">
                        <a href="tech" class="techItem col-12 col-lg d-block position-relative background-cover text-white mb-3 mb-lg-0" style="background-image:url(styles/images/index/tech-1.jpg)">
                            <span class="text d-none d-lg-block position-absolute start-50 translate-middle-x text-center w-100 z-1 px-4">
                                <span class="icon-wrapper flex-center mx-auto mb-3">
                                    <img src="styles/images/index/tech-icon-1.png" alt="張效煌醫師官方網站">
                                </span>
                                <span class="title d-block NotoSerifTC font-28 fw-bold lh14 mb-2">
                                    <span class="d-block">達文西微創</span>
                                    <span class="d-block">開心手術</span>
                                </span>
                            </span>
                            <span class="text-hover d-block d-lg-none d-xxl-block position-absolute z-1">
                                <span class="d-table">
                                    <span class="icon-wrapper flex-center mb-2 mb-md-3">
                                        <img class="img-fluid" src="styles/images/index/tech-icon-1.png" alt="張效煌醫師官方網站">
                                    </span>
                                </span>
                                <span class="title d-block NotoSerifTC font-36 fw-bold lh14 pt-1 mb-2">
                                    <span class="d-block">達文西微創</span>
                                    <span class="d-block">開心手術</span>
                                </span>
                                <span class="content d-block font-20 mb-4">
                                    <span class="d-md-block">手術成果榮獲國家醫療品質獎，</span>
                                    <span class="d-md-block">領先國際</span>
                                </span>
                                <span class="plus d-none d-lg-flex flex-center border border-white w60 h60">
                                    <i class="icon-plus"></i>
                                </span>
                            </span>
                        </a>
                        <a href="tech" class="techItem col-12 col-lg d-block position-relative background-cover text-white mb-3 mb-lg-0" style="background-image:url(styles/images/index/tech-2.jpg)">
                            <span class="text d-none d-lg-block position-absolute start-50 translate-middle-x text-center w-100 z-1 px-4">
                                <span class="icon-wrapper flex-center mx-auto mb-3">
                                    <img class="img-fluid" src="styles/images/index/tech-icon-2.png" alt="張效煌醫師官方網站">
                                </span>
                                <span class="title d-block NotoSerifTC font-28 fw-bold lh14 mb-2">
                                    <span class="d-block">心室輔助器</span>
                                    <span class="d-block">（人工心臟）</span>
                                </span>
                            </span>
                            <span class="text-hover d-block d-lg-none d-xxl-block position-absolute z-1">
                                <span class="d-table">
                                    <span class="icon-wrapper flex-center mb-2 mb-md-3">
                                        <img class="img-fluid" src="styles/images/index/tech-icon-2.png" alt="張效煌醫師官方網站">
                                    </span>
                                </span>
                                <span class="title d-block NotoSerifTC font-36 fw-bold lh14 pt-1 mb-2">
                                    <span class="d-block">心室輔助器</span>
                                    <span class="d-block">（人工心臟）</span>
                                </span>
                                <span class="content d-block font-20 mb-4">
                                    <span class="d-md-block">手術成果榮獲國家醫療品質獎，</span>
                                    <span class="d-md-block">領先國際</span>
                                </span>
                                <span class="plus d-none d-lg-flex flex-center border border-white w60 h60">
                                    <i class="icon-plus"></i>
                                </span>
                            </span>
                        </a>
                        <a href="tech" class="techItem col-12 col-lg d-block position-relative background-cover text-white mb-3 mb-lg-0" style="background-image:url(styles/images/index/tech-3.jpg)">
                            <span class="text d-none d-lg-block position-absolute start-50 translate-middle-x text-center w-100 z-1 px-4">
                                <span class="icon-wrapper flex-center mx-auto mb-3">
                                    <img class="img-fluid" src="styles/images/index/tech-icon-3.png" alt="張效煌醫師官方網站">
                                </span>
                                <span class="title d-block NotoSerifTC font-28 fw-bold lh14 mb-2">
                                    <span class="d-block">經導管進行主動脈</span>
                                    <span class="d-block">瓣膜植入術 (TAVI)</span>
                                </span>
                            </span>
                            <span class="text-hover d-block d-lg-none d-xxl-block position-absolute z-1">
                                <span class="d-table">
                                    <span class="icon-wrapper flex-center mb-2 mb-md-3">
                                        <img class="img-fluid" src="styles/images/index/tech-icon-3.png" alt="張效煌醫師官方網站">
                                    </span>
                                </span>
                                <span class="title d-block NotoSerifTC font-36 fw-bold lh14 pt-1 mb-2">
                                    <span class="d-block">經導管進行主動脈</span>
                                    <span class="d-block">瓣膜植入術 (TAVI)</span>
                                </span>
                                <span class="content d-block font-20 mb-4">
                                    <span class="d-md-block">手術成果榮獲國家醫療品質獎，</span>
                                    <span class="d-md-block">領先國際</span>
                                </span>
                                <span class="plus d-none d-lg-flex flex-center border border-white w60 h60">
                                    <i class="icon-plus"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="index-edu-section pb-5 py-lg-5">
                <div class="ps-4 pe-4 pe-lg-0">
                    <div class="block ms-auto pb-xl-5 mb-xl-4">
                        <div class="pe-4">
                            <div class="max1600 position-relative py-lg-4 py-xl-2">
                                <div class="swiper-buttons position-absolute d-none d-lg-flex z-1" data-aos="fade-up">
                                    <div class="swiper-button swiper-button-prev text-white position-static w70 h70 bg-grayD8D8D8 bg-hover-D32C2C me-2"></div>
                                    <div class="swiper-button swiper-button-next text-white position-static w70 h70 bg-grayD8D8D8 bg-hover-D32C2C"></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex mt-2 mt-md-4">
                            <div class="title-block pe-md-4">
                                <span class="d-block text-D32C2C mb-2 mb-md-3" data-aos="fade-up">衛教園地</span>
                                <h2 class="NotoSerifTC font-46 mb-3 mb-md-4" data-aos="fade-up">
                                    <span class="fw-500">分享</span>
                                    <span class="fw-900">和您有關的健康</span>
                                </h2>
                                <p class="text-gray4D4D4D lh165 mb-4 pb-3" data-aos="fade-up">預防勝於治療，隨著台灣邁向超高齡社會，因老化而引起主動脈瓣膜狹窄的患者也大幅增加。台北榮總心臟內科與您分享生活保健大小事，陪您安定身心，守護身心靈...</p>
                                <div data-aos="fade-up">
                                    <a class="d-none d-lg-flex flex-center font-16 bg-D32C2C bg-hover-D94A4A text-white w180 h70" href="edus">
                                        了解更多<span class="ms-2">+</span>
                                    </a>
                                </div>
                            </div>
                            <div class="content-block les1 ps-xxl-5 pt-lg-5 mb-4 mb-lg-0" data-aos="fade-up">
                                <swiper ref="eduSwiper" :options="indexEduData.swiperOptions">
                                    <swiper-slide v-for="(item, index) in indexEduData.list" :key="index">
                                        <a class="indexEduItem d-block" href="edu">
                                            <span class="img-wrapper d-block overflow-hidden">
                                                <span class="d-block img background-cover h-100" :style="{backgroundImage:'url('+item.cover+')'}"></span>
                                            </span>
                                            <span class="text-wrapper d-block bg-white position-relative pt-3 pt-md-4 pb-5 ps-3 ps-md-4 pe-3 me-4 me-md-5">
                                                <span class="d-block ps-lg-3">
                                                    <span class="d-flex align-items-center mb-3 mt-1">
                                                        <span class="d-inline-block NotoSansTC text-D32C2C fw-500 me-3">{{item.tag}}</span>
                                                        <span class="date text-gray959595 fw-bold">{{item.date}}</span>
                                                    </span>
                                                    <span class="font-20 fw-bold line2 mb-3">{{item.title}}</span>
                                                    <span class="text-gray4D4D4D line2">{{item.content}}</span>
                                                    <span class="d-block mt-4">
                                                        <i class="icon-more d-block font-12 text-gray959595"></i>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </swiper-slide>
                                </swiper>
                            </div>
                            <div class="d-flex d-lg-none mb-4 mb-md-5" data-aos="fade-up">
                                <div class="swiper-buttons d-flex me-3">
                                    <div class="swiper-button swiper-button-prev text-white position-static w70 h70 bg-grayD8D8D8 bg-hover-D32C2C me-2"></div>
                                    <div class="swiper-button swiper-button-next text-white position-static w70 h70 bg-grayD8D8D8 bg-hover-D32C2C"></div>
                                </div>
                                <a class="flex-center flex-grow-1 font-16 bg-D32C2C bg-hover-D94A4A text-white h70 ms-4" href="edus">
                                    了解更多<span class="ms-2">+</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="index-doctor-section background-cover text-white position-relative py-5 px-4" style="background-image:url(styles/images/index/doctor-bg.jpg)">
                <span class="d-block font-16 text-center les1 pt-2 pt-md-4 mt-md-1" data-aos="fade-up">能當醫生是一件很快樂的事</span>
                <h2 class="NotoSerifTC dec-line dec-line-white font-46 text-center position-relative les15 pt-3 mt-3 mb-5" data-aos="fade-up">
                    <span class="fw-500">關於</span>
                    <span class="fw-900"> 張效煌醫師</span>
                </h2>
                <div class="ms-xxl-5">
                    <div class="content max1390 py-4 py-md-5 px-4 p-xl-5 mx-auto mb-md-5">
                        <div class="text pt-3 pt-md-0 py-xl-4 mt-1 mt-md-0 mt-xl-2 ms-xl-4">
                            <p class="NotoSerifTC font-36 text-center text-lg-start fw-600 les15 ps-xl-3 pb-1 pb-md-0 mb-4 mb-md-0 mb-xl-4" data-aos="fade-up">身為一個心臟科醫師，最開心的是原本需要開刀的病人，在藥物調整後就能完全康復</p>
                            <div class="items ps-xl-3">
                                <div class="item pt-4 pb-2 pb-md-3" data-aos="fade-up">
                                    <div class="d-md-flex les1 pt-2">
                                        <div class="icon flex-center flex-shrink-0 w80 h80 rounded-circle mx-auto ms-md-0 me-md-4 mb-3 mb-md-0 pb-1 pb-md-0" data-aos="flip-right">
                                            <img src="styles/images/index/doctor-icon-1.png" alt="張效煌醫師官方網站">
                                        </div>
                                        <div class="lh165">
                                            <span class="d-block">醫學專長 /</span>
                                            <p>重症心衰竭治療、心臟移植、人工心臟及葉克膜、經導管瓣膜置換術(TAVI)、達文西微創開心手術、高難度心臟及主動脈瘤手術、心臟腫瘤、心臟黏液瘤、主動脈瓣手術、馬凡氏症、瓣膜問題、瓣膜狹窄、瓣膜逆流</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item pt-4 pb-2 pb-md-3" data-aos="fade-up">
                                    <div class="d-md-flex les1 pt-2">
                                        <div class="icon flex-center flex-shrink-0 w80 h80 rounded-circle mx-auto ms-md-0 me-md-4 mb-3 mb-md-0 pb-1 pb-md-0" data-aos="flip-right">
                                            <img src="styles/images/index/doctor-icon-2.png" alt="張效煌醫師官方網站">
                                        </div>
                                        <div class="lh165">
                                            <span class="d-block">現職 /</span>
                                            <p>臺北榮民總醫院心臟移植及人工心臟中心主任</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="doctor position-absolute" src="styles/images/index/doctor.png" alt="張效煌醫師官方網站">
            </div>
            <div class="index-baby-section position-relative py-5 px-4">
                <div class="container pt-2 pt-md-4 pb-md-4 mt-md-4 mb-md-2">
                    <span class="d-block text-center les1" data-aos="fade-up">我們盡全力給您安心</span>
                    <h2 class="NotoSerifTC dec-line dec-line-959595 font-46 text-center position-relative les15 pt-3 mt-3 pb-2 pb-md-0 mb-4 mb-md-5" data-aos="fade-up">
                        <span class="fw-500">看看</span>
                        <span class="fw-900">開心寶貝</span>
                    </h2>
                    <div class="row g-0 pb-lg-5 mb-lg-3">
                        <a class="col-12 col-lg-6 indexBabyItem row g-0 mb-5 mb-lg-0" href="baby" data-aos="fade-up">
                            <span class="col-12 img-wrapper d-block overflow-hidden position-relative mb-4">
                                <span class="img d-block background-cover h-100" style="background-image:url(styles/images/index/baby-1.jpg)"></span>
                                <span class="d-flex d-lg-none flex-center w60 h60 bg-D32C2C text-white position-absolute end-0 bottom-0">
                                    <i class="icon-more-2 font-12"></i>
                                </span>
                            </span>
                            <span class="col-12 text row g-0 pe-lg-4 pt-lg-3 mb-3 mb-lg-0">
                                <span class="d-block col-12 col-lg-10 pe-lg-4">
                                    <span class="font-24 fw-bold les15 line1 mb-2 mb-md-1 pb-1 pb-md-0">剛完成TAVI手術的可愛大寶貝</span>
                                    <span class="text-gray4D4D4D line1">這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自...</span>
                                </span>
                                <span class="more col-auto d-none d-lg-flex flex-center w70 h70 border-primary text-primary flex-shrink-0 me-xl-3 ms-auto">
                                    <i class="icon-more-2 font-12"></i>
                                </span>
                            </span>
                        </a>
                        <a class="col-12 col-lg-6 indexBabyItem row g-0 mb-3 mb-lg-0" href="baby" data-aos="fade-up">
                            <span class="col-12 img-wrapper d-block overflow-hidden position-relative mt-lg-4 order-lg-2 mb-4 mb-lg-0">
                                <span class="img d-block background-cover h-100" style="background-image:url(styles/images/index/baby-2.jpg)"></span>
                                <span class="d-flex d-lg-none flex-center w60 h60 bg-D32C2C text-white position-absolute end-0 bottom-0">
                                    <i class="icon-more-2 font-12"></i>
                                </span>
                            </span>
                            <span class="col-12 text row g-0 ps-lg-4 pt-lg-3 pb-3 mt-lg-1 mb-3 mb-lg-0">
                                <span class="d-block col-12 col-lg-10 ms-xl-3 pe-lg-4">
                                    <span class="font-24 fw-bold les15 line1 mb-2 mb-md-1 pb-1 pb-md-0">可愛的大寶貝</span>
                                    <span class="text-gray4D4D4D line1">這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自這是做完TAVI手術的96歲阿公。阿公的孩子很孝順、關心他。阿公也很注意自</span>
                                </span>
                                <span class="more col-auto d-none d-lg-flex flex-center w70 h70 border-primary text-primary flex-shrink-0 me-xl-1 ms-auto">
                                    <i class="icon-more-2 font-12"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div data-aos="fade-up">
                        <a class="d-table text-primary text-hover-D94A4A mx-auto" href="babies">
                            <i class="icon-block me-1"></i>
                            <span class="font-20 fw-bold">了解更多</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="index-new-section position-relative px-4 py-5">
                <div class="container position-relative z-1 pt-md-4 pb-md-5 mt-md-1">
                    <div class="row g-0">
                        <div class="col-9 col-md-10 col-lg-4 col-xxl-3 NotoSerifTC font-46 ms-auto ms-lg-0 ps-2 ps-md-0 mb-4 mb-lg-0">
                            <span class="d-block fw-500 les15 lh14" data-aos="fade-up">即時掌握</span>
                            <h2 class="font-46 fw-900 les3" data-aos="fade-up">最新消息與花絮</h2>
                        </div>
                        <div class="col-12 col-lg-8 col-xxl-9 ps-xxl-5">
                            <div class="ps-xxl-5 mt-md-2" data-aos="fade-up">
                                <swiper ref="newSwiper" :options="indexNewData.swiperOptions">
                                    <swiper-slide v-for="(item, index) in indexNewData.list" :key="index">
                                        <a class="newItem d-block bg-white border border-grayD8D8D8 pt-4 pb-5 px-4" href="new">
                                            <span class="d-block px-xl-2">
                                                <span class="d-flex align-items-center mb-3 mt-3 mt-md-4">
                                                    <span class="d-inline-block NotoSansTC text-D32C2C fw-500 me-3">{{item.tag}}</span>
                                                    <span class="date text-gray959595 fw-bold">{{item.date}}</span>
                                                </span>
                                                <span class="font-24 fw-bold line3 lh135 les1">{{item.title}}</span>
                                                <span class="d-block pt-5 mt-md-2 mb-1">
                                                    <span class="more flex-center w60 h60 border border-primary text-primary">
                                                        <i class="icon-plus"></i>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </swiper-slide>
                                </swiper>
                                <div class="d-table mx-auto">
                                    <div class="swiper-pagination position-static mt-3 mt-md-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="heart position-absolute" src="styles/images/common/heart.jpg" alt="張效煌醫師官方網站">
            </div>
        </main>
        <!-- main ======================================================================================= -->
        <?php include "footer.php"; ?>
    </div>
    <?php include "footer-js.php"; ?>
    <script src="scripts/plugins/vue-awesome-swiper.js"></script>
    <script>
        let indexBannerList = [{
                cover: "styles/images/index/banner-1.jpg",
                title1: "堅持創新",
                title2: "延續輝煌",
            },
            {
                cover: "styles/images/index/banner-2.jpg",
                title1: "豐富經驗",
                title2: "用心關懷",
            },
            {
                cover: "styles/images/index/banner-3.jpg",
                title1: "創新技術",
                title2: "堅持專業",
            },
        ]
        let indexEduList = [{
                cover: "styles/images/index/edu-1.jpg",
                tag: "一般疾病",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                content: "隨著台灣邁向超高齡社會，因老化而引起主動脈瓣膜狹窄的患者也大幅增加。台北榮總心臟內科指...",
            },
            {
                cover: "styles/images/index/edu-2.jpg",
                tag: "一般疾病",
                date: "2021-04-09",
                title: "TAVI醫材健保全額給付",
                content: "隨著台灣邁向超高齡社會，因老化而引起主動脈瓣膜狹窄的患者也大幅增加。台北榮總心臟內科指...",
            },
            {
                cover: "styles/images/index/edu-3.jpg",
                tag: "TAVI",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                content: "隨著台灣邁向超高齡社會，因老化而引起主動脈瓣膜狹窄的患者也大幅增加。台北榮總心臟內科指...",
            },
            {
                cover: "styles/images/index/edu-1.jpg",
                tag: "一般疾病",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                content: "隨著台灣邁向超高齡社會，因老化而引起主動脈瓣膜狹窄的患者也大幅增加。台北榮總心臟內科指...",
            },
        ]
        let indexNewList = [{
                tag: "健保新規定",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
            },
            {
                tag: "媒體報導",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
            },
            {
                tag: "活動花絮",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
            },
            {
                tag: "健保新規定",
                date: "2021-04-09",
                title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
            }
        ]
    </script>
    <script src="scripts/default/index.js"></script>
</body>

</html>