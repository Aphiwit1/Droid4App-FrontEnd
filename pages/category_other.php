<!DOCTYPE html>
<html>
<head>
<title>Other Archives | Droid4apps</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Kanit|Raleway" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php
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
              <li><a href="../index.php">Home</a></li>
              <li><a href="page.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
              
            </ul>
          </div>

        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.php">Droid<strong>4Apps</strong> <span>คิดถึง App คิดถึง Droid4apps</span></a></div>
          <div class="header_bottom_right"><a href="#"><img src="../images/addbanner_728x90_V1.jpg" alt=""></a></div>
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
            <li class=""><a href="../index.php?page=1">หน้าแรก</a></li>
            <li><a href="category_game.php?page=1">เกม</a></li>
            <li><a href="category_photo.php?page=1">รูปภาพและวิดิโอ</a></li>
            <li><a href="category_entertainment.php?page=1">บันเทิง</a></li>
            <li><a href="category_education.php?page=1">การศึกษา</a></li>
            <li><a href="category_newsAndroid.php?page=1">มือถือแอนดรอยด์</a></li>
              <li><a href="category_other.php?page=1">อื่นๆ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">

    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <div class="archive_style_1">
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Latest Updates</span> </h2>




              <?php
              // last update
              require "../dbconnect.php";

              $x = ($_GET['page']-1)*10; //รับเลชหน้า


              $sql = "SELECT * FROM data_post WHERE post_type = 5 ORDER BY post_id DESC LIMIT $x,10";
              $query = mysqli_query($DBConect,$sql);




              while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                $post_id = $row['post_id'];
                $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
                $query_detail = mysqli_query($DBConect,$sql_detail);
                $row_detail = mysqli_fetch_assoc($query_detail);

                $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,110,"UTF-8")." ...";

                //$_SESSION['head_name'] = $row['post_name'];
                $post_id = $row['post_id'];
                $post_name = $row['post_name'];
                $post_img = $row['post_img'];
                $post_bt = $row['post_by'];
                $post_day = $row['post_day'];
                $post_month = $row['post_month'];
                $post_year = $row['post_year'];
                $post_view = $row['post_view'];

              echo "<div class='single_archive wow fadeInDown'>";
              echo  "<div class='archive_imgcontainer'><img src='../images/".$post_img."' alt=''> </div>";
              echo  "<div class='archive_caption'>";
              echo    "<h2><a href='single.php?id=".$post_id."'>".$post_name."</a></h2>";
              echo    "<p>".$detail_substr."</p>";
              echo "</div>";
              echo  "<a class='read_more' href='single.php?id=".$post_id."'><span>Read More</span></a> </div>";
            }
                ?>
            </div>
          </div>
        </div>
        <div class="pagination_area">
          <nav>
            <ul class="pagination">
              <?php //แสดงหน้า
              require "../dbconnect.php";

              $sql = "SELECT * FROM data_post WHERE post_type = 5";
              $query = mysqli_query($DBConect,$sql);
              $num = mysqli_num_rows($query);
              $result = $num/10;

              for ($i = 1; $i <= $result; $i++) {
                echo "<li><a href='../pages/category_game.php?page=".$i."'>".$i."</a></li>";
              }

               ?>



            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">

          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">

                  <?php
                  require "../dbconnect.php";



                  $sql = "SELECT * FROM data_post WHERE post_type = 5 ORDER BY post_view  DESC LIMIT 5";
                  $query = mysqli_query($DBConect,$sql);

                  while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {

                    $post_id = $row['post_id'];
                    $sql_detail = "SELECT * FROM data_detailpost WHERE post_id = '$post_id'  LIMIT 1 ";
                    $query_detail = mysqli_query($DBConect,$sql_detail);
                    $row_detail = mysqli_fetch_assoc($query_detail);

                    $detail_substr = iconv_substr($row_detail['detailpost_detail'],0,115,"UTF-8")." ...";

                    echo"<li>";
                    echo   "<div class'media wow fadeInDown'> <a class='media-left' href=''> <img src='../images/".$row['post_img']."' alt=''> </a>";
                    echo     "<div class='media-body'>";
                    echo     "<h4 class='media-heading'><a href='../pages/single.php?id=".$row['post_id']."'>".$row['post_name']."</a></h4>";
                    echo       "<p>".$detail_substr."</p>";
                    echo     "</div>";
                    echo "</div>";
                    echo"</li>";

                  }

                   ?>
                </ul>
              </div>

              <?php

              require "../dbconnect.php";
              if (!empty($_SESSION['user'])) { //ถ้าเป็น Admin จะแสดง form เพิ่มข่าว
                # code...
                echo "<h2>เพิ่มข้อมูล ( Admin )</h2>";
                echo "<form action='post_insert.php' method='POST' enctype='multipart/form-data'>";
                echo  "<input type='text' name='post' placeholder=' Header' class='form-control'> <br><br>";
                echo  "<input type='file' class='custom-file-input' name='news_img'><br>";
                echo  "<select name='type'>";
                echo    "<option value='g'>เกม</option>";
                echo    "<option value='p'>รูปภาพและวิดิโอ</option>";
                echo    "<option value='en'>บันเทิง</option>";
                echo    "<option value='edu'>การศึกษา</option>";
                echo    "<option value='o'>อื่นๆ</option>";
                echo    "<option value='an'>มือถือ android</option>";
                echo  "</select><br><br>";
                echo  "<input type='submit' value='เพิ่ม' class='btn btn-default'>";
                echo"</form>";
              }

              ?>
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
            <p>Hello! We are students.This website create for practice programming skills.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2045 <a href="index.html">magExpress</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p>Developed BY Wpfreeware</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
