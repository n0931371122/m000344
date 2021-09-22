<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Article",
                "headline": "靜脈曲張手術前後之照護",
                "articleBody": "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到...",
                "image": "styles/images/edus/edu-1.jpg"
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
                <div class="banner background-cover position-relative" style="background-image:url(styles/images/edus/banner.jpg)">
                    <div class="text text-white text-center position-absolute top-50 start-50 translate-middle w-100 px-4 z-1 pb-3">
                        <span class="tag d-block SourceSansPro font-16 les8 mb-3" data-aos="fade-up">MASTER OF SURGERY</span>
                        <h1 class="NotoSerifTC font-64 fw-bold position-relative les4 pb-3 pb-md-4 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="50">衛教園地</h1>
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
                                <span>一般疾病</span>
                                <i class="icon-plus font-12"></i>
                            </div>
                            <ul class="noneStyle position-absolute position-md-static d-md-flex les1">
                                <li class="position-relative px-4">
                                    <a class="d-block px-md-3 py-2 py-md-1 active" href="edus">一般疾病</a>
                                </li>
                                <li class="position-relative px-4">
                                    <a class="d-block px-md-3 py-2 py-md-1" href="edus">TAVI</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white d-none d-md-block w70 h70 flex-shrink-0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="edus-section bg-grayF7F7F7 px-4 py-5" style="background-image:url(styles/images/edus/wave-bg.jpg);background-repeat:no-repeat;background-position:left bottom;">
                <div class="max1400 mx-auto pb-4 py-md-5 mb-md-4">
                    <div class="row gx-4 gx-xxl-5 justify-content-between pt-xl-3 mb-4 mb-xl-5">
                        <div class="col-12 col-md-6 col-xl-4 mb-3 mb-md-0">
                            <form class="search-element d-flex align-items-center bg-white border border-grayD8D8D8 h60 ps-3 ps-md-4 pe-2" action="edus" data-aos="fade-up">
                                <input class="flex-grow-1 font-16 les1 ps-md-1 pe-3 pe-md-4" type="text" placeholder="請輸入關鍵字">
                                <button class="position-relative ps-3 pe-0 me-1" type="submit">
                                    <i class="icon-search font-20 text-D32C2C"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3 position-relative z-1" data-aos="fade-up">
                            <v-select class="ms-auto" :options="options" v-model="selected" :clearable="false" :searchable="false"></v-select>
                        </div>
                    </div>
                    <div class="pb-4 mb-3">
                        <div v-for="(item,index) in edusItem">
                            <h2 class="d-none">{{item.title}}</h2>
                            <a :href="item.href" class="eduItem d-block bg-white p-4 p-xl-5 mb-4" data-aos="fade-up">
                                <span class="row g-0 my-2 my-lg-0">
                                    <span class="col-12 col-md-5 d-block pe-xl-5">
                                        <span class="d-block img-wrapper overflow-hidden me-xl-5">
                                            <span class="d-block jqimgFill">
                                                <img :src="item.img" alt="item.alt">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="col-12 col-md-7 d-block text pe-xl-5 pt-3 pt-md-0 pt-lg-3 ps-md-4 ps-xl-0">
                                        <span class="d-flex align-items-center les1 mb-1 mb-lg-3">
                                            <span class="d-inline-block NotoSansTC text-D32C2C fw-500 me-3">{{item.tag}}</span>
                                            <span class="date text-gray959595 fw-bold">{{item.date}}</span>
                                        </span>
                                        <span class="font-24 fw-bold line1">{{item.title}}</span>
                                        <span class="text-gray4D4D4D lh18 line2 mb-3 mb-md-2 mb-lg-4 mb-lg-5 mt-2 mt-lg-3">{{item.content}}</span>
                                        <span class="more flex-center overflow-hidden h50">
                                            <i class="icon-plus font-14"></i>
                                            <span class="hover-effect">
                                                <span class="font-16">詳細內容</span>
                                                <i class="icon-plus font-16 ms-2 ps-1"></i>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="pt-xl-5">
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
        Vue.component("v-select", VueSelect.VueSelect);
        new Vue({
            el: ".wp",
            data: {
                selected: "請選擇年份",
                options: ["2021", "2020", "2019"],
                edusItem: [{
                        href: "edu",
                        img: "styles/images/edus/edu-1.jpg",
                        alt: "圖片",
                        tag: "一般疾病",
                        date: "2021-04-09",
                        title: "心臟血管疾病的預防",
                        content: "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到...",
                    },
                    {
                        href: "edu",
                        img: "styles/images/edus/edu-2.jpg",
                        alt: "圖片",
                        tag: "一般疾病",
                        date: "2021-04-09",
                        title: "關於心臟衰竭",
                        content: "心臟衰竭是指心臟功能失常，無法輸出足量的血液去維持身體的新陳代謝，影響全身血液循環。長期下來不僅會讓心臟負擔過重，致使心臟產生病變，也會因各重要器官、細胞...",
                    }, {
                        href: "edu",
                        img: "styles/images/edus/edu-3.jpg",
                        alt: "圖片",
                        tag: "一般疾病",
                        date: "2021-04-09",
                        title: "靜脈曲張雷射治療",
                        content: "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到...",
                    }, {
                        href: "edu",
                        img: "styles/images/edus/edu-1.jpg",
                        alt: "圖片",
                        tag: "一般疾病",
                        date: "2021-04-09",
                        title: "靜脈曲張手術前後之照護",
                        content: "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到...",
                    }, {
                        href: "edu",
                        img: "styles/images/edus/edu-2.jpg",
                        alt: "圖片",
                        tag: "一般疾病",
                        date: "2021-04-09",
                        title: "靜脈曲張雷射治療",
                        content: "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到...",
                    },
                ]
            },
        })
    </script>
</body>

</html>