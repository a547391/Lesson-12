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
                    <?php
                    $level1Open = "";
                    $level2Open = "";
                    if (isset($_GET['level']) && isset($_GET['classid'])) {
                        //選擇第一層類別
                        $SQLstring = sprintf("SELECT * FROM pyclass WHERE level=%d AND classid=%d", $_GET['level'], $_GET['classid']);
                        $classid_rs = $link->query($SQLstring);
                        $data = $classid_rs->fetch();
                        $level1Cname = $data['cname'];
                        $level1Open = '<li class="breadcrumb-item active" aria-current="page">' . $level1Cname . '</li>';
                    } elseif (isset($_GET['classid'])) {
                        //選擇第二層類別
                        $SQLstring = sprintf("SELECT * FROM pyclass where level=2 and classid=%d", $_GET['classid']);
                        $classid_rs = $link->query($SQLstring);
                        $data = $classid_rs->fetch();
                        $level2Cname = $data['cname'];
                        $level2Uplink = $data['uplink'];
                        $level2Open = '<li class="breadcrumb-item active" aria-current="page">' . $level2Cname . '</li>'; //需加處理上一層

                        $SQLstring = sprintf("SELECT * FROM pyclass where level=1 and classid=%d", $level2Uplink);
                        $classid_rs = $link->query($SQLstring);
                        $data = $classid_rs->fetch();
                        $level1Cname = $data['cname'];
                        $level1 = $data['level'];
                        $level1Open = '<li class="breadcrumb-item"><a href="drugstore.php?classid=' . $level2Uplink . '&level=' . $level1 . '">' . $level1Cname . '</a></a></li>';
                    }
                    ?>



                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
                            <?php echo $level1Open . $level2Open; ?>
                            <!-- <li class="breadcrumb-item"><a href="#">彩妝專區</a></li>
                            <li class="breadcrumb-item active" aria-current="page">隔離/防曬/飾底乳</li> -->
                        </ol>
                    </nav>

                    <!-- 引入 product藥粧商品-->
                    <?php require_once("product_list.php"); ?>
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