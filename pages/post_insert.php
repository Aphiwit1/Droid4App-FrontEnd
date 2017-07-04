<?php
               // comment
                session_start();
                require "../dbconnect.php";

                date_default_timezone_set("America/New_York");
                $namepost_day = date("d");
                $namepost_month = date("m");
                $namepost_year = date("Y");
                $namepost_time =date("h:i:sa");

                if(!empty($_POST['post'])){
     			       $namenews = mysqli_escape_string($DBConect,$_POST["post"]);
                 $compost_nameuser = $_SESSION['user'];
                 $type = $_POST['type'];

                 // เช็คว่า dropdonw list  ส่งค่าอ่ะไรมา
                 if ($type=="g") { // ส่งคำว่า เกม
                   $t = 1; // เลข 1 แทนหมวดหมู่ว่า game
                 }
                 if ($type=="p") { // photo
                   $t = 2;
                 }
                 if ($type=="en") { //entertrain
                   $t = 3;
                 }
                 if ($type=="edu") { //education
                   $t = 4;
                 }
                 if ($type=="o") { //other
                   $t = 5;
                 }
                 if ($type=="an") { //news android
                   $t = 6;
                 }

               }
                 // ส่วนของการ upload รูปภาพ

                  if(!empty($_FILES['news_img']['tmp_name'])&&!empty($_POST['post'])){

                 $ext = pathinfo(basename($_FILES['news_img']['name']),PATHINFO_EXTENSION); // ดึงนามสกุลของภาพมาใส่ใน $ext
                 $new_image_name = 'img_'.uniqid().".".$ext;
                 $image_path = "../images/";
                 $upload_path = $image_path.$new_image_name;
                 $success = move_uploaded_file($_FILES['news_img']['tmp_name'], $upload_path);
                 $news_img = $new_image_name;
                 // จบ ภาพ

                 $uniqid = uniqid();
       		    	 $sql_news = "INSERT INTO data_post (post_id,post_name,post_by,post_day,post_img,post_month,post_year,post_type,post_view)
                 VALUES ('$uniqid','$namenews','$compost_nameuser','$namepost_day','$news_img','$namepost_month','$namepost_year','$t',0)";
                 $resultf_news = mysqli_query($DBConect,$sql_news, MYSQLI_USE_RESULT) or die(mysql_error());

                }



 ///////////////////////

                //$sql_del = "SELECT * FROM comment_12zodiac WHERE comzodiac_time LIKE  '%$x%' ";
                //$result_del = mysqli_query($DBConnect,$sql_del);
                //$row_del = mysqli_fetch_assoc($result_del);

                  //$com_del = $row_del['comzodiac_id'];
                 /*$text_del = "<form method='POST' ><input type = 'hidden' name = 'com' value = 'ทดสอบ'></form>";



                 $sql_del="UPDATE comment_12zodiac SET comzodiac_del = '$text_del'  WHERE comzodiac_id =  93 " or die (mysql_error());
                 $resultf = mysqli_query($DBConnect, $sql_del, MYSQLI_USE_RESULT) or die(mysql_error());*/




                 if ($type=="g") { // ส่งคำว่า เกม
                  header("Location:category_game.php");
                 }
                 if ($type=="p") {
                   # code...
                   header("Location:category_photo.php");
                 }
                 if ($type=="en") {
                   # code...
                   header("Location:category_entertainment.php");
                 }
                 if ($type=="edu") {
                   # code...
                   header("Location:category_education.php");
                 }
                 if ($type=="o") {
                   # code...
                   header("Location:category_other.php");
                 }
                 if ($type=="an") {
                   # code...
                   header("Location:category_newsAndroid.php");
                 }





			    ?>
