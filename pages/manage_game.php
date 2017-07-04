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
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
  <?php
    require "../dbconnect.php";
    session_start();
    if (empty($_SESSION['user'])) {
     header('Location:../index.php');
    }
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

          <div class="header_top_right">

          </div>
        </div>
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="../index.html">G<strong>AME</strong></a></div>
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
            <li class=""><a href="../index.php">Home</a></li>
            <li class="dropdown"> <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="archive1.html">เกม</a></li>
                <li><a href="archive2.html">รูปภาพและวิดิโอ</a></li>
                <li><a href="archive3.html">บันเทิง</a></li>
                <li><a href="archive3.html">การศึกษา</a></li>
                <li><a href="archive-main.html">มือถือ android</a></li>

              </ul>
            </li>
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
              <h2> <span class="bold_lineอ"><span></span></span> <span class="solid_lineอ"></span> <span class="title_text">
                <?php
                  require "../dbconnect.php";
                  $sql = "SELECT * FROM data_post WHERE post_type = 1 ORDER BY post_id DESC";
                  $query = mysqli_query($DBConect,$sql);
                  $sql_num = mysqli_num_rows($query);
                  echo "จำนวน : ".$sql_num;
                 ?>
              </span> </h2>


          <?php
            require "../dbconnect.php";
            $sql = "SELECT * FROM data_post WHERE post_type = 1 ORDER BY post_id DESC";
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
              echo "<div class='comments_box'> <span class='meta_date'>14/12/2045</span> <span class='meta_comment'><a href='../index.php'>No Comments</a></span> <span class='meta_more'><a  href=''../index.php'>Read More...</a></span> </div>";
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
            <h2>Create Post</h2>
          </div>
          <form action="post_insert.php" method="POST" enctype="multipart/form-data">


            <input type="text" name="post" placeholder=" Header" class="form-control"> <br><br>
            <input type="file" class="custom-file-input" name="news_img"><br>

            <select name="type">
              <option value="g">เกม</option>
              <option value="p">รูปภาพและวิดิโอ</option>
              <option value="en">บันเทิง</option>
              <option value="edu">การศึกษา</option>
              <option value="o">อื่นๆ</option>
              <option value="an">มือถือ android</option>

            </select><br><br>
            <input type="submit" value="เพิ่ม" class="btn btn-default">
          </form>



        </div>
      </div>
    </div>
  </section>
</div>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
