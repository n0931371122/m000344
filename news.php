<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Article",
                "headline": "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                "articleBody": "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                "image": "styles/images/news/1.jpg"
            }]
        }
    </script>
</head>

<body>
    <div class="wp whiteHeader" id="news">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="banner-section background-cover position-relative z-1">
                <div class="banner background-cover position-relative" style="background-image:url(styles/images/news/banner.jpg)">
                    <div class="text text-white text-center position-absolute top-50 start-50 translate-middle w-100 px-4 z-1 pb-3">
                        <span class="tag d-block SourceSansPro font-16 les8 mb-3" data-aos="fade-up">MASTER OF SURGERY</span>
                        <h1 class="NotoSerifTC font-64 fw-bold position-relative les4 pb-3 pb-md-4 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="50">最新消息</h1>
                        <p class="font-20 les15 pt-md-2 mb-0 mb-md-3" data-aos="fade-up" data-aos-delay="100">透過嶄新技術，豐富經驗、實踐堅持值得信賴的專業</p>
                    </div>
                </div>
                <div class="submuenu container NotoSansTC position-absolute z-1">
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="150">
                        <a href="./" class="flex-center bg-D32C2C bg-hover-D94A4A text-white w70 h70 flex-shrink-0">
                            <i class="icon-home font-22"></i>
                        </a>
                        <div class="bg-white d-block d-md-flex flex-center flex-grow-1 position-relative">
                            <div onClick="$(this).next().stop().slideToggle()" class="toggle d-flex d-md-none justify-content-between align-items-center h70 les1 ps-4 pe-3">
                                <span>健保新規定</span>
                                <i class="icon-plus font-12"></i>
                            </div>
                            <ul class="noneStyle position-absolute position-md-static d-md-flex les1">
                                <li class="position-relative px-4">
                                    <a class="d-block px-md-3 py-2 py-md-1 active" href="news">健保新規定</a>
                                </li>
                                <li class="position-relative px-4">
                                    <a class="d-block px-md-3 py-2 py-md-1" href="news">媒體報導</a>
                                </li>
                                <li class="position-relative px-4">
                                    <a class="d-block px-md-3 py-2 py-md-1" href="news">活動花絮</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white d-none d-md-block w70 h70 flex-shrink-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-section px-4 py-5 mt-4 mb-5 my-lg-5">
                <div class="max1400 mx-auto">
                    <div class="row gx-4 gx-xxl-5 pt-xl-3 mb-4 mb-xl-5">
                        <div class="col-12 col-md-6 col-xl-4">
                            <form class="search-element d-flex align-items-center bg-white border border-grayD8D8D8 h60 ps-3 ps-md-4 pe-2" action="news" data-aos="fade-up">
                                <input class="flex-grow-1 font-16 les1 ps-md-1 pe-3 pe-md-4" type="text" placeholder="請輸入關鍵字">
                                <button class="position-relative ps-3 pe-0 me-1" type="submit">
                                    <i class="icon-search font-20 text-D32C2C"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="row g-4 g-xxl-5 pb-5 mb-md-4">
                        <div v-for="(item,index) in newsItem" :key="index" class="col-12 col-md-6 col-xl-4">
                            <h2 class="d-none">{{item.title}}</h2>
                            <a class="newItem d-block" :href="item.href" data-aos="fade-up" :data-aos-delay="index%3*50">
                                <span class="img-wrapper d-block overflow-hidden">
                                    <span class="d-block jqimgFill">
                                        <img :src="item.img" :alt="item.alt">
                                    </span>
                                </span>
                                <span class="d-block bg-grayF7F7F7 pb-lg-5 px-4 py-4">
                                    <span class="d-block px-xl-2 mx-xl-1">
                                        <span class="d-flex align-items-center les1 mb-3">
                                            <span class="d-inline-block NotoSansTC text-D32C2C fw-500 me-3">{{item.tag}}</span>
                                            <span class="date text-gray959595 fw-bold">{{item.date}}</span>
                                        </span>
                                        <span class="title font-24 fw-bold les1 lh135 line2 mb-3">{{item.title}}</span>
                                        <span class="text-gray4D4D4D les05 lh165 line2">{{item.content}}</span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pt-xl-5 mb-xl-3">
                        <?php include "pageElement.php"; ?>
                    </div>
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
                newsItem: [{
                        href: "new",
                        img: "styles/images/news/1.jpg",
                        alt: "圖片",
                        tag: "健保新規定",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/2.jpg",
                        alt: "圖片",
                        tag: "媒體報導",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/3.jpg",
                        alt: "圖片",
                        tag: "活動花絮",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/4.jpg",
                        alt: "圖片",
                        tag: "活動花絮",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/3.jpg",
                        alt: "圖片",
                        tag: "健保新規定",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/2.jpg",
                        alt: "圖片",
                        tag: "媒體報導",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/3.jpg",
                        alt: "圖片",
                        tag: "媒體報導",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/1.jpg",
                        alt: "圖片",
                        tag: "活動花絮",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                    {
                        href: "new",
                        img: "styles/images/news/4.jpg",
                        alt: "圖片",
                        tag: "健保新規定",
                        date: "2021-04-09",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術無痛微創新選擇",
                    },
                ]
            },
        })
    </script>
</body>

</html>