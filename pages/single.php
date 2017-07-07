<!DOCTYPE html>
<html>
<head>
<title><?php
echo "string";
//echo $_SESSION['head_name'];
 ?></title>
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
<?php
session_start();
require "../dbconnect.php";
$id = $_GET['id'];
$sql = "SELECT * FROM data_post WHERE post_id = '$id' ";
$query = mysqli_query($DBConect,$sql);
$row = mysqli_fetch_assoc($query);
$head = $row['post_name'];
echo "<meta property='og:title'  content='".$head."' />";

?>


</head>

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
              <li><a href="../index.html">Home</a></li>
              <li><a href="page.html">About</a></li>
              <li><a href="contact.html">Contact</a></li>
            
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
          <div class="header_bottom_left"><a class="logo" href="../index.html">Droid<strong>4app</strong> <span>Review applications</span></a></div>
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
            <!--<li class=""><a href="../index.html">Home</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="archive-main.html">Archive</a></li>
                <li><a href="archive1.html">Archive 1</a></li>
                <li><a href="archive2.html">Archive 2</a></li>
                <li><a href="archive3.html">Archive 3</a></li>
              </ul>
            </li>
            <li><a href="single.html">Single page</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="404.html">404 page</a></li>-->
            <li class=""><a href="../index.php">หน้าแรก</a></li>
            <li><a href="category_game.php">เกม</a></li>
            <li><a href="category_photo.php">รูปภาพและวิดิโอ</a></li>
            <li><a href="category_photo.php">บันเทิง</a></li>
            <li><a href="category_education.php">การศึกษา</a></li>
            <li><a href="category_newsAndroid.php">มือถือแอนดรอยด์</a></li>
              <li><a href="category_other.php">อื่นๆ</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
  <section id="mainContent">
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_page_area">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Technology</a></li>
              <li class="active">Duis quis erat non nunc fringilla </li>
            </ol>
            <h2 class="post_titile">
              <?php //หัวข้อข่าว
                require "../dbconnect.php";


                $sql = "SELECT * FROM data_post WHERE post_id='$_GET[id]'";
                $query = mysqli_query($DBConect,$sql);
                $row = mysqli_fetch_assoc($query);
                echo $row['post_name'];


                $post_type = $row['post_type'];

                if ($post_type==1) {
                  $href = "category_game.php";
                  $tag = "เกม";
                }
                if ($post_type==2) {
                  $href = "category_photo.php";
                  $tag = "รูปภาพและวิดิโอ";
                }
                if ($post_type==3) {
                  $href = "category_entertrain.php";
                  $tag = "บันเทิง";
                }
                if ($post_type==4) {
                  $href = "category_education.php";
                  $tag = "การศึกษา";
                }
                if ($post_type==5) {
                  $href = "category_other.php";
                  $tag = "อื่นๆ";
                }
                if ($post_type==6) {
                  $href = "category_android.php";
                  $tag = "มือถือแอนดรอยด์";
                }
                echo "</h2>";
                echo "<div class='single_page_content'>";
                echo "<div class='post_commentbox'> <a href=''><i class='fa fa-user'></i>โดย ".$row['post_by']."</a> <span><i class='fa fa-calendar'></i>".$row['post_day']."/".$row['post_month']."/".$row['post_year']."</span> <a href='".$href."'><i class='fa fa-tags'></i>".$tag."</a> </div>";

                ?>

              <?php
                require "../dbconnect.php";
                $sql = "SELECT * FROM data_post WHERE post_id = '$_GET[id]'";
                $query = mysqli_query($DBConect,$sql);
                $row = mysqli_fetch_assoc($query);

                echo "<img class='img-center' src='../images/".$row['post_img']."' alt=''><br>";

              ?>

              <?php

              require "../dbconnect.php";
              echo "<p>";
                  $sql = "SELECT * FROM data_detailpost WHERE post_id = '$_GET[id]' ";
                  $query = mysqli_query($DBConect,$sql);
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                  {
                    $detail = $row['detailpost_detail'];
                    //$img =  $row['detailpost_img'];



                    if (!empty($row['detailpost_detail'])) {
                      echo $detail."<br> <br>";
                    }
                    if (!empty($row['detailpost_img'])) {
                      echo "<img class='img-center' src='../images_detail/".$row['detailpost_img']."' alt=''><br>";
                    }


                  }


              echo "</p> ";

               ?>


              <?php

              require "../dbconnect.php";
              if (!empty($_SESSION['user'])) { //ถ้าเป็น Admin จะแสดง form เพิ่มข่าว
                # code...
                //echo "<h2>เพิ่มข้อมูล ( Admin )</h2>";
                echo "<form action='detailpost_insert.php?id=".$_GET['id']."' method='POST' enctype='multipart/form-data'>";
                echo  "<textarea class='form-control' name='detailpost' rows='5' id='comment'></textarea> <br>";

                echo  "<input type='file' class='custom-file-input' name='news_img'><br>";


                echo  "<input type='submit' value='เพิ่ม' class='btn btn-default'>";
                echo"</form>";
              }

              ?>



              <?php
              require '../dbconnect.php'; //share facebook
              echo "<div class='fb-share-button' data-href='http://www.droid4apps.com/pages/single.php?id=".$_GET['id']."' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.droid4apps.com%2Fpages%2Fsingle.php%3Fid%3D595bb8df84f19&amp;src=sdkpreparse'>แชร์</a></div>";
              //echo $_SESSION['head_name'];
              ?>

              <?php //comment facebook ?>
              <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.9&appId=270091693468130";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>

              <?php //comment facebook

              echo "<div class='fb-comments' data-href='http://www.droid4apps.com/pages/single.php?id=".$_GET['id']."' data-width='100%' data-numposts='5'></div>";
              ?>




            </div>
          </div>
        </div>











        <div class="similar_post">
          <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
          <ul class="small_catg similar_nav wow fadeInDown animated">
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="#"><img src="../images/112x112.jpg" alt=""></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                  <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">

          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Last Update</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">
                  <?php

                  $sql = "SELECT * FROM data_post WHERE post_type = 1 ORDER BY post_view  DESC LIMIT 5";
                  $query = mysqli_query($DBConect,$sql);

                  while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                  echo "<li>";
                  echo  "<div class='media wow fadeInDown'> <a class='media-left' href=''><img src='../images/112x112.jpg' alt=''></a>";
                  echo    "<div class='media-body'>";
                  echo      "<h4 class='media-heading'><a href=''>Duis condimentum nunc pretium lobortis </a></h4>";
                  echo      "<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>";
                  echo    "</div>";
                  echo  "</div>";
                  echo "</li>";}
                  ?>

                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"><img src="../images/112x112.jpg" alt=""></a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
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
        <!--<div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Flicker Images</h2>
            <ul class="flicker_nav">
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
              <li> <a href="#"><img src="../images/75x75.jpg" alt=""></a> </li>
            </ul>
          </div>
        </div>-->
        <!--<div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Labels</h2>
            <ul class="labels_nav">
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </div>-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p>Hello everyone , we are students .This website create for practice programming skills.</p>
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
            <p>Copyright &copy; 2045 <a href="../index.html">magExpress</a></p>
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
