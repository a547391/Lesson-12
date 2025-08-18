<!-- 這是將資料庫，連線程式載入-->
<?php require_once('Connections/dbset.php'); ?>
<!-- 如果SESSION沒有啟動，則啟動SEEION功能，這是跨網頁變數存取  -->
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<!-- 載入共用PHP函數庫 -->
<?php require_once("php_lib.php"); ?>
<!doctype html>
<html lang="zh-TW">

<head>
    <!-- 引入網頁標頭 -->
    <?php require_once("headfile.php"); ?>
</head>

<body>
    <Section id="header">
        <!-- 引入導覽列 -->
        <?php require_once("navbar.php"); ?>
    </Section>
    <Section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!-- 引入sidebar分類導覽 -->
                    <?php require_once("sidebar.php"); ?>
                    <!-- 引入熱銷商品模組 -->
                    <?php require_once("hot.php"); ?>
                </div>
                <div class="col-md-10">
                    <!-- 建立類別分項-->
                    <?php require_once("breadcrumb.php");
                    ?>
                    <!-- 產品詳細資訊-->
                    <?php //require_once("goods_content.php"); 
                    ?>
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img id="showGoods" name="showGoods" src="product_img/zoom2555551.webp" class="img-fluid rounded-start" alt="Biore 蜜妮淨嫩沐浴乳 浪漫櫻花香 水采保濕型 1000g">
                                <div class="row mt-2">
                                    <div class="col-md-4"><a href="product_img/zoom2555551.webp"><img src="product_img/zoom2555551.webp" alt="蜜妮淨嫩沐浴乳 浪漫櫻花香 水采保濕型 1000g" class="img-fluid"></a></div>
                                    <div class="col-md-4"><a href="product_img/zoom2555552.webp"><img src="product_img/zoom2555551.webp" alt="蜜妮淨嫩沐浴乳 浪漫櫻花香 水采保濕型 1000g" class="img-fluid"></a></div>
                                    <div class="col-md-4"><a href="product_img/zoom2555553.webp"><img src="product_img/zoom2555551.webp" alt="蜜妮淨嫩沐浴乳 浪漫櫻花香 水采保濕型 1000g" class="img-fluid"></a></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </Section>
    <hr>
    <Section id="scontent">
        <!-- 服務說明-->
        <?php require_once("scontent.php"); ?>
    </Section>
    <Section id="footer">
        <!-- 聯絡資訊-->
        <?php require_once("footer.php"); ?>
    </Section>
    <!-- 引入javascript檔-->
    <?php require_once("jsfile.php"); ?>
</body>

</html>