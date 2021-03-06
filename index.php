<!DOCTYPE html>
<html>
<head>
<title>Droid4apps | รีวิวแอพพลิเคชัน และมือถือแอนดรอยด์</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Kanit|Raleway" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<meta property="fb:app_id"          content="1234567890" />
<meta property="og:type"            content="article" />
<meta property="og:url"             content="http://newsblog.org/news/136756249803614" />
<meta property="og:title"           content="sIntroducing our New Site" />
<meta property="og:image"           content="https://scontent-sea1-1.xx.fbcdn.net/hphotos-xap1/t39.2178-6/851565_496755187057665_544240989_n.jpg" />
<meta property="og:description"    content="http://samples.ogp.me/390580850990722" />

</head>
<body>





<?php
require "dbconnect.php";
session_start();

 ?>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="pages/page.html">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
              <li><a href="pages/404.html">Error Page</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <form action="#" class="search_form">
              <input type="text" placeholder="Text to Search">
              <input type="submit" value="">
            </form>
          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html">Droid<strong>4App</strong> <span>คิดถึง App คิดถึง Droid4apps</span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="index.php">หน้าแรก</a></li>
            <li class=""><a href="pages/category_game.php?page=1">เกม</a></li>

            <!--<li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">เกม</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="pages/archive-main.html">รูปภาพและวิดิโอ</a></li>
                <li><a href="pages/archive1.html">บันเทิง</a></li>
                <li><a href="pages/archive2.html">การศึกษา</a></li>
                <li><a href="pages/archive3.html">อื่นๆ</a></li>
                <li><a href="pages/archive3.html">มือถือ android</a></li>
              </ul>
            </li>-->
            <li class=""><a href="pages/category_photo.php?page=1">รูปภาพและวิดิโอ</a></li>
            <li class=""><a href="pages/category_entertainment.php?page=1">บันเทิง</a></li>
            <li class=""><a href="pages/category_education.php?page=1">การศึกษา</a></li>
            <li class=""><a href="pages/category_newsAndroid.php?page=1">มือถือแอนดรอยด์</a></li>
            <li class=""><a href="pages/category_other.php?page=1">อื่นๆ</a></li>

            <?php
              require "dbconnect.php";

              if (!empty($_SESSION['user'])) {

                //echo "<li><a href='pages/manage_game.php'>เพิ่มข้อมูล</a></li>";
                echo "<li><a href='logout.php'>ออกจากระบบ</a></li>";
              }
             ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">

              <?php
              $sql = "SELECT * FROM data_post WHERE post_type = 7  ORDER BY post_id DESC LIMIT 0,2 ";
              $query = mysqli_query($DBConect,$sql);

              while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
              echo "<div class='single_iteam'><img src='images/".$row['post_img']."' alt=''>";
              //echo   "<h2><a class='slider_tittle' href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h2>";
              echo "</div>";
              }
              ?>


            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">
            <ul class="featured_nav wow fadeInDown">

              <?php
              $sql = "SELECT * FROM data_post WHERE post_type = 7  ORDER BY post_id DESC LIMIT 2,4 ";
              $query = mysqli_query($DBConect,$sql);
              while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {

              echo "<li><img src='images/".$row['post_img']."' alt=''>";
              echo   "<div class='title_caption'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></div>";
              echo "</li>";
              }
              ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content_middle">


    </div>
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="pages/category_game.php?page=1">เกม</a> </h2>
            <?php
              require "dbconnect.php"; //แสดงเกมซ้าย
              $sql = "SELECT * FROM data_post WHERE post_type = 1  ORDER BY post_id DESC LIMIT 1 ";
              $query = mysqli_query($DBConect,$sql);
              $row = mysqli_fetch_assoc($query);

              $post_id = $row['post_id'];
              $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
              $query_detail = mysqli_query($DBConect,$sql_detail);
              $row_detail = mysqli_fetch_assoc($query_detail);

              $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

              echo "<div class='business_category_left wow fadeInDown'>";
              echo   "<ul class='fashion_catgnav'>";
              echo    " <li>";
              echo      " <div class='catgimg2_container'> <a href='pages/single.php?id=".$row['post_id']."'><img alt='' src='images/".$row['post_img']."'></a> </div>";
              echo      " <h2 class='catg_titile'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h2>";
              echo       "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> <span class='meta_more'><a  href=''>Read More...</a></span> </div>";
              echo       "<p>".$detail_substr."</p>";
              echo    " </li>";
              echo   "</ul>";
              echo "</div>";
             ?>

            <?php
            require 'dbconnect.php'; //แสดงเกมขวา

            $sql = "SELECT * FROM data_post WHERE post_type = 1  ORDER BY post_id DESC LIMIT 1,3 ";
            $query = mysqli_query($DBConect,$sql);

            while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
              # code...
              echo "<div class='business_category_right wow fadeInDown'>";
              echo  "<ul class='small_catg'>";
              echo    "<li>";
              echo      "<div class='media wow fadeInDown'> <a class='media-left' href='pages/single.php?id=".$row['post_id']."'><img src='images/".$row['post_img']."' alt=''></a>";
              echo        "<div class='media-body'>";
              echo          "<h4 class='media-heading'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h4>";
              echo          "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> </div>";
              echo        "</div>";
              echo      "</div>";
              echo    "</li>" ;
              echo  "</ul>";
              echo "</div>";
            }


            ?>

          </div>
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="pages/category_photo.php?page=1">รูปภาพและวิดิโอ</a> </h2>
            <?php
              require "dbconnect.php"; //แสดงรูปภาพและวิดิโอซ้าย
              $sql = "SELECT * FROM data_post WHERE post_type = 2  ORDER BY post_id DESC LIMIT 1 ";
              $query = mysqli_query($DBConect,$sql);
              $row = mysqli_fetch_assoc($query);

              $post_id = $row['post_id'];
              $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
              $query_detail = mysqli_query($DBConect,$sql_detail);
              $row_detail = mysqli_fetch_assoc($query_detail);

              $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

              echo "<div class='business_category_left wow fadeInDown'>";
              echo   "<ul class='fashion_catgnav'>";
              echo    " <li>";
              echo      " <div class='catgimg2_container'> <a href='pages/single.php?id=".$row['post_id']."'><img alt='' src='images/".$row['post_img']."'></a> </div>";
              echo      " <h2 class='catg_titile'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h2>";
              echo       "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> <span class='meta_more'><a  href=''>Read More...</a></span> </div>";
              echo       "<p>".$detail_substr."</p>";
              echo    " </li>";
              echo   "</ul>";
              echo "</div>";
             ?>

            <?php
            require 'dbconnect.php'; //แสดงรูปภาพและวิดิโอขวา

            $sql = "SELECT * FROM data_post WHERE post_type = 2  ORDER BY post_id DESC LIMIT 1,3 ";
            $query = mysqli_query($DBConect,$sql);

            while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
              # code...
              echo "<div class='business_category_right wow fadeInDown'>";
              echo  "<ul class='small_catg'>";
              echo    "<li>";
              echo      "<div class='media wow fadeInDown'> <a class='media-left' href='pages/single.php?id=".$row['post_id']."'><img src='images/".$row['post_img']."' alt=''></a>";
              echo        "<div class='media-body'>";
              echo          "<h4 class='media-heading'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h4>";
              echo          "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> </div>";
              echo        "</div>";
              echo      "</div>";
              echo    "</li>" ;
              echo  "</ul>";
              echo "</div>";
            }


            ?>

          </div>
          <div class="games_fashion_area">
            <div class="games_category">
              <div class="single_category">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="pages/category_entertainment.php?page=1">บันเทิง</a> </h2>
                <?php
                require "dbconnect.php"; //แสดงบันเทิง
                $sql = "SELECT * FROM data_post WHERE post_type = 3  ORDER BY post_id DESC LIMIT 1 ";
                $query = mysqli_query($DBConect,$sql);
                $row = mysqli_fetch_assoc($query);

                $post_id = $row['post_id'];
                $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
                $query_detail = mysqli_query($DBConect,$sql_detail);
                $row_detail = mysqli_fetch_assoc($query_detail);

                $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

                echo "<ul class'fashion_catgnav wow fadeInDown'>";
                echo  "<li>";
                echo    "<div class='catgimg2_container'> <a href='pages/single.php?id=".$row['post_id']."'><img alt='' src='images/".$row['post_img']."'></a> </div>";
                echo    "<h2 class='catg_titile'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h2>";
                echo    "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> <span class='meta_more'><a  href='pages/single.php?id=".$row['post_id']."'>Read More...</a></span> </div>";
                echo    "<p>$detail_substr</p><br>";
                echo  "</li>";
                echo "</ul>";
                ?>

                <?php
                require 'dbconnect.php';

                $sql = "SELECT * FROM data_post WHERE post_type = 3  ORDER BY post_id DESC LIMIT 1,2 ";
                $query = mysqli_query($DBConect,$sql);

                while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                echo "<ul class='small_catg wow fadeInDown'>";
                echo  "<li>";
                echo    "<div class='media'> <a class='media-left' href=''><img src='images/112x112.jpg' alt=''></a>";
                echo      "<div class='media-body'>";
                echo        "<h4 class='media-heading'><a href=''>".$row['post_name']."</a></h4>";
                echo        "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> </div>";
                echo      "</div>";
                echo    "</div>";
                echo  "</li>";
                echo "</ul>"; }
                ?>
              </div>
            </div>
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="pages/category_education.php?page=1">การศึกษา</a> </h2>

                  <?php
                  require "dbconnect.php"; //แสดงการศึกษา

                  $sql = "SELECT * FROM data_post WHERE post_type = 4  ORDER BY post_id DESC LIMIT 1 ";
                  $query = mysqli_query($DBConect,$sql);
                  $row = mysqli_fetch_assoc($query);

                  $post_id = $row['post_id'];
                  $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
                  $query_detail = mysqli_query($DBConect,$sql_detail);
                  $row_detail = mysqli_fetch_assoc($query_detail);

                  $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

                  echo "<ul class='fashion_catgnav wow fadeInDown'>";
                  echo  "<li>";
                  echo    "<div class='catgimg2_container'> <a href='pages/single.php?id=".$row['post_name']."'><img alt='' src='images/".$row['post_img']."'></a> </div>";
                  echo    "<h2 class='catg_titile'><a href=''>".$row['post_name']."</a></h2>";
                  echo    "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>No Comments</a></span> <span class='meta_more'><a  href=''>Read More...</a></span> </div>";
                  echo    "<p>$detail_substr</p><br>";
                  echo  "</li>";
                  echo "</ul>";
                  ?>


                  <?php
                  require 'dbconnect.php';

                  $sql = "SELECT * FROM data_post WHERE post_type = 4  ORDER BY post_id DESC LIMIT 1,2 ";
                  $query = mysqli_query($DBConect,$sql);

                  while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                  echo "<ul class='small_catg wow fadeInDown'>";
                  echo  "<li>";
                  echo    "<div class='media'> <a class='media-left' href=''><img src='images/".$row['post_img']."' alt=''></a>";
                  echo      "<div class='media-body'>";
                  echo        "<h4 class='media-heading'><a href=''>".$row['post_name']."</a></h4>";
                  echo        "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> </div>";
                  echo      "</div>";
                  echo    "</div>";
                  echo  "</li>";
                  echo "</ul>"; }
                  ?>

                </div>
              </div>
            </div>
          </div>



          <div class="games_fashion_area">
            <div class="games_category">
              <div class="single_category">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="pages/category_other.php?page=1">อื่นๆ</a></a> </h2>
                <?php
                require "dbconnect.php"; //แสดงอื่นๆ
                $sql = "SELECT * FROM data_post WHERE post_type = 5  ORDER BY post_id DESC LIMIT 1 ";
                $query = mysqli_query($DBConect,$sql);
                $row = mysqli_fetch_assoc($query);

                $post_id = $row['post_id'];
                $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
                $query_detail = mysqli_query($DBConect,$sql_detail);
                $row_detail = mysqli_fetch_assoc($query_detail);

                $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,110,"UTF-8")." ...";

                echo "<ul class'fashion_catgnav wow fadeInDown'>";
                echo  "<li>";
                echo    "<div class='catgimg2_container'> <a href='pages/single.php?id=".$row['post_id']."'><img alt='' src='images/".$row['post_img']."'></a> </div>";
                echo    "<h2 class='catg_titile'><a href='pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h2>";
                echo    "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> <span class='meta_more'><a  href='pages/single.php?id=".$row['post_id']."'>Read More...</a></span> </div>";
                echo    "<p>$detail_substr</p><br>";
                echo  "</li>";
                echo "</ul>";
                ?>

                <?php
                require 'dbconnect.php';

                $sql = "SELECT * FROM data_post WHERE post_type = 5  ORDER BY post_id DESC LIMIT 1,2 ";
                $query = mysqli_query($DBConect,$sql);

                while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                echo "<ul class='small_catg wow fadeInDown'>";
                echo  "<li>";
                echo    "<div class='media'> <a class='media-left' href=''><img src='images/".$row['post_img']."' alt=''></a>";
                echo      "<div class='media-body'>";
                echo        "<h4 class='media-heading'><a href=''>".$row['post_name']."</a></h4>";
                echo        "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> </div>";
                echo      "</div>";
                echo    "</div>";
                echo  "</li>";
                echo "</ul>"; }
                ?>
              </div>
            </div>
            <div class="fashion_category">
              <div class="single_category">
                <div class="single_category wow fadeInDown">
                  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="pages/category_newsAndroid.php?page=1">มือถือแอนดรอยด์</a> </h2>

                  <?php
                  require "dbconnect.php"; //แสดงมือถือแอนดรอยด์

                  $sql = "SELECT * FROM data_post WHERE post_type = 6  ORDER BY post_id DESC LIMIT 1 ";
                  $query = mysqli_query($DBConect,$sql);
                  $row = mysqli_fetch_assoc($query);

                  $post_id = $row['post_id'];

                  $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
                  $query_detail = mysqli_query($DBConect,$sql_detail);
                  $row_detail = mysqli_fetch_assoc($query_detail);

                  $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

                  echo "<ul class='fashion_catgnav wow fadeInDown'>";
                  echo  "<li>";
                  echo    "<div class='catgimg2_container'> <a href='pages/single.php?id=".$row['post_name']."'><img alt='' src='images/".$row['post_img']."'></a> </div>";
                  echo    "<h2 class='catg_titile'><a href=''>".$row['post_name']."</a></h2>";
                  echo    "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>No Comments</a></span> <span class='meta_more'><a  href=''>Read More...</a></span> </div>";
                  echo    "<p>$detail_substr</p><br>";
                  echo  "</li>";
                  echo "</ul>";
                  ?>


                  <?php
                  require 'dbconnect.php';

                  $sql = "SELECT * FROM data_post WHERE post_type = 6  ORDER BY post_id DESC LIMIT 1,2 ";
                  $query = mysqli_query($DBConect,$sql);

                  while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                  echo "<ul class='small_catg wow fadeInDown'>";
                  echo  "<li>";
                  echo    "<div class='media'> <a class='media-left' href=''><img src='images/".$row['post_img']."' alt=''></a>";
                  echo      "<div class='media-body'>";
                  echo        "<h4 class='media-heading'><a href=''>".$row['post_name']."</a></h4>";
                  echo        "<div class='comments_box'> <span class='meta_date'>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <span class='meta_comment'><a href=''>อ่าน : ".$row['post_view']."</a></span> </div>";
                  echo      "</div>";
                  echo    "</div>";
                  echo  "</li>";
                  echo "</ul>"; }
                  ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">

          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">ล่าสุด</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">

                <?php
                // แสดง poppular
                require "dbconnect.php";
                $sql = "SELECT * FROM data_post  ORDER BY post_view DESC LIMIT 0,10";
                $query = mysqli_query($DBConect,$sql);


                while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                  $post_id = $row['post_id'];

                  $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'";
                  $query_detail = mysqli_query($DBConect,$sql_detail);
                  $row_detail = mysqli_fetch_assoc($query_detail);

                  $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

                  echo "<li>";
                  echo  "<div class='media wow fadeInDown'> <a class='media-left' href=''><img src='images/".$row['post_img']."' alt=''></a>";
                  echo    "<div class='media-body'>";
                  echo      "<h4 class='media-heading'><a href='single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h4>";
                  echo      "<p>".$detail_substr."</p>";
                  echo    "</div>";
                  echo  "</div>";
                  echo "</li>"; }
                ?>
                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">

                  <?php

                  $sql = "SELECT * FROM data_post ORDER BY post_id DESC LIMIT 10";
                  $query = mysqli_query($DBConect,$sql);

                  while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){


                    $post_id = $row['post_id'];

                    $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'";
                    $query_detail = mysqli_query($DBConect,$sql_detail);
                    $row_detail = mysqli_fetch_assoc($query_detail);

                    $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,112,"UTF-8")." ...";

                  echo "<li>";
                  echo  "<div class='media wow fadeInDown'> <a class='media-left' href=''><img src='images/".$row['post_img']."' alt=''></a>";
                  echo    "<div class='media-body'>";
                  echo      "<h4 class='media-heading'><a href=''>".$row['post_name']."</a></h4>";
                  echo      "<p>".$detail_substr."</p>";
                  echo    "</div>";
                  echo  "</div>";
                  echo "</li>";}
                  ?>
                </ul>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
</div>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">


        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
