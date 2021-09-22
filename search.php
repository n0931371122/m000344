<!doctype html>
<html lang="zh-Hant">

<head>
    <?php include "header-title.php"; ?>
</head>

<body>
    <div class="wp whiteHeader">
        <?php include "header.php"; ?>
        <!-- main ======================================================================================= -->
        <main>
            <div class="banner-section shorterH background-cover position-relative z-1">
                <div class="banner background-cover position-relative" style="background-image:url(styles/images/search/banner.jpg)">
                    <div class="text text-white text-center position-absolute top-50 start-50 translate-middle w-100 px-4 z-1 pb-3">
                        <span class="tag d-block SourceSansPro font-16 les8 mb-3" data-aos="fade-up">MASTER OF SURGERY</span>
                        <h1 class="NotoSerifTC font-64 fw-bold position-relative les4 pb-3 pb-md-4 mb-3 mb-md-4" data-aos="fade-up" data-aos-delay="50">搜尋結果</h1>
                    </div>
                </div>
            </div>
            <div class="section px-4 pt-5 pb-5">
                <div class="max1400 pb-4 mx-auto pt-2">
                    <div class="border-bottom-D8D8D8 pb-3 pb-md-4 mb-3">
                        <h2 class="font-28 fw-bold lh165">關鍵字<span class="text-primary">「 心臟權威 」</span>，共有<span class="NotoSansTC text-primary">36</span>筆符合結果</h2>
                    </div>
                    <div class="pt-md-4 pb-3 pb-md-5">
                        <div v-for="(item,index) in resultsItem" :key="index" class="border-bottom-D8D8D8 pb-3 pb-md-4 mb-3 mb-md-4" data-aos="fade-up">
                            <a class="resultItem d-block" :href="item.href">
                                <span class="title d-table font-22 fw-500 text-primary mb-1">{{item.title}}</span>
                                <span class="d-block text-gray4D4D4D lh18">{{item.content}}</span>
                            </a>
                        </div>
                    </div>
                    <div class="py-xl-5">
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
                resultsItem: [{
                        href: "about",
                        title: "關於我",
                        content: "所謂的TAVI手術是植入支架瓣膜，把瓣膜狹窄的部位撐開，有些病人可能會因為放的位置比較深，容易壓迫到心臟的神經傳導系統，導致心跳過慢，甚至可能會造成心跳停止，所以須放置心律調整器；本院團隊因植入的位置非常精準，不易壓迫到神經傳導系統，因此放置永久性心律調節器的比例為全世界最低。"
                    },
                    {
                        href: "tech",
                        title: "老化造成主動脈瓣膜再狹窄 榮總「瓣中瓣」手術 無痛微創新選擇",
                        content: "我們必須更謹慎小心，因此決定採用新的TAVI手術（經導管主動脈瓣膜置換術），讓阿公不需經歷全身麻醉、插管、呼吸器，就可以接受手術治療，減少手術風險。手術約1小時完成，其後進入恢復室觀察。"
                    }, {
                        href: "new",
                        title: "TAVI醫材健保全額給付",
                        content: "經導管進行主動脈瓣膜植入術（Trans-catheter Aortic Valve Implantation，簡稱TAVI）醫材於2021年2月1日起納入健保給付，可替符合給付標準的病患省下百萬元以上的費用。除了傳統開心手術以外，心臟主動脈瓣膜狹窄的患者還多了一個手術風險較低的選擇。"
                    }, {
                        href: "tech",
                        title: "經導管進行主動脈瓣膜植入術(TAVI)",
                        content: "我們必須更謹慎小心，因此決定採用新的TAVI手術（經導管主動脈瓣膜置換術），讓阿公不需經歷全身麻醉、插管、呼吸器，就可以接受手術治療，減少手術風險。手術約1小時完成，其後進入恢復室觀察。"
                    }, {
                        href: "tech",
                        title: "達文西微創開心手術",
                        content: "所謂的TAVI手術是植入支架瓣膜，把瓣膜狹窄的部位撐開，有些病人可能會因為放的位置比較深，容易壓迫到心臟的神經傳導系統，導致心跳過慢，甚至可能會造成心跳停止，所以須放置心律調整器；本院團隊因植入的位置非常精準，不易壓迫到神經傳導系統，因此放置永久性心律調節器的比例為全世界最低。"
                    }, {
                        href: "new",
                        title: "心臟心血管疾病的預防",
                        content: "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到，心臟衰竭是指心臟功能失常，無法輸出足量的血液去維持身體的新陳代謝，影響全身血液循環。長期下來不僅會讓心臟負擔過重，致使心臟產生病變，也會因各重要器官、細胞..."
                    },
                    {
                        href: "new",
                        title: "關於心臟衰竭",
                        content: "吸菸的害處很多。對心臟病患者而言，由於很多患者本來就因為心臟功能欠佳而引起肺部血管充血、肺血管壓力增高等變化，患者會有運動性氣喘，容易得到，心臟衰竭是指心臟功能失常，無法輸出足量的血液去維持身體的新陳代謝，影響全身血液循環。長期下來不僅會讓心臟負擔過重，致使心臟產生病變，也會因各重要器官、細胞..."
                    },
                ]
            }
        });
    </script>
</body>

</html>