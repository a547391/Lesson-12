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
                    <!-- product藥粧商品-->
                    <?php require_once("product_list.php");
                    ?>
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