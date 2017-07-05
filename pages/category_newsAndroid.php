<!DOCTYPE html>
<html>
<head>
<title>magExpress | Pages | Archive 1</title>
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
              <li><a href="404.html">Error Page</a></li>
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
          <div class="header_bottom_left"><a class="logo" href="../index.html">Droid<strong>4app</strong> <span>A Pro Magazine Template</span></a></div>
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
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <div class="archive_style_1">
              <h2>
                <span class="bold_lineอ"><span></span></span> <span class="solid_lineอ"></span> <span class="title_text">
                <?php
                  require "../dbconnect.php";
                  session_start();
                  $sql = "SELECT * FROM data_post WHERE post_type = 6 ORDER BY post_id DESC";
                  $query = mysqli_query($DBConect,$sql);
                  $sql_num = mysqli_num_rows($query);
                  if (!empty($_SESSION['user'])) {
                    # code...
                    echo "จำนวนบทความ : ".$sql_num;

                  }
                 ?>
                </span>
              </h2>

          <?php
            require "../dbconnect.php";
            $sql = "SELECT * FROM data_post WHERE post_type = 6 ORDER BY post_id DESC";
            $query = mysqli_query($DBConect,$sql);

            while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
              $post_id = $row['post_id'];
              $post_name = $row['post_name'];
              $post_img = $row['post_img'];
              $post_bt = $row['post_by'];
              $post_day = $row['post_day'];
              $post_month = $row['post_month'];
              $post_year = $row['post_year'];
              $post_view = $row['post_view'];

              echo  "<div class='business_category_left wow fadeInDown'>";
              echo "<ul class='fashion_catgnav'>";
              echo "<li>";
              echo "<div class='catgimg2_container'> <a href='single.php?id=".$post_id."'><img src='../images/".$post_img."'></a> </div>";
              echo "<h2 class='catg_titile'><a href='single.php?id=".$post_id."'>".$post_name."</a></h2>";
              echo "<div class='comments_box'> <span class='meta_date'>".$post_day."/".$post_month."/".$post_year."</span> <span class='meta_comment'><a href='../index.php'>No Comments</a></span> <span class='meta_more'><a  href=''../single.php?id=".$post_id."'>Read More...</a></span> </div>";
              echo "<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla...</p>";
              echo "</li>";
              echo "</ul>";
              echo  "</div>";
            }
           ?>





            </div>
          </div>
        </div>
        <div class="pagination_area">
          <nav>
            <ul class="pagination">
              <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">





          <div class="single_bottom_rightbar">
            <ul role="tablist" class="nav nav-tabs custom-tabs">
              <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="home" href="#mostPopular">Most Popular</a></li>
              <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="messages" href="#recentComent">Recent Comment</a></li>
            </ul>
            <div class="tab-content">
              <div id="mostPopular" class="tab-pane fade in active" role="tabpanel">
                <ul class="small_catg popular_catg wow fadeInDown">


                 <?php
                 require "../dbconnect.php";



                 $sql = "SELECT * FROM data_post WHERE post_type = 6 ORDER BY post_view  DESC LIMIT 5";
                 $query = mysqli_query($DBConect,$sql);

                 while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                   echo"<li>";
                   echo   "<div class'media wow fadeInDown'> <a class='media-left' href=''> <img src='../images/".$row['post_img']."' alt=''> </a>";
                   echo     "<div class='media-body'>";
                   echo     "<h4 class='media-heading'><a href=''>".$row['post_name']."</a></h4>";
                   //echo       "<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>";
                   echo     "</div>";
                   echo "</div>";
                   echo"</li>";

                 }

                  ?>


                </ul>
              </div>
              <div id="recentComent" class="tab-pane fade" role="tabpanel">
                <ul class="small_catg popular_catg">
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"> <img src="../images/112x112.jpg" alt=""> </a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"> <img src="../images/112x112.jpg" alt=""> </a>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                        <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="#"> <img src="../images/112x112.jpg" alt=""> </a>
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
          <div class="single_bottom_rightbar">
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
  </section>
</div>
<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
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
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
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
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
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
