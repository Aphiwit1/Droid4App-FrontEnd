<?php
               // comment
                session_start();
                require "../dbconnect.php";

                if(!empty($_POST['detailpost'])){
     			       $detail_txt = mysqli_escape_string($DBConect,$_POST["detailpost"]);
                 $compost_nameuser = $_SESSION['user'];
               }else{
                 $detail_txt = "";
                 $compost_nameuser = $_SESSION['user'];
               }
                 // ส่วนของการ upload รูปภาพ

                 if(!empty($_FILES['news_img']['tmp_name'])){

                 $ext = pathinfo(basename($_FILES['news_img']['name']),PATHINFO_EXTENSION); // ดึงนามสกุลของภาพมาใส่ใน $ext
                  echo "1";
                 $new_image_name = 'img_'.uniqid().".".$ext;
                  echo "2";
                 $image_path = "../images_detail/";
                  echo "3";
                 $upload_path = $image_path.$new_image_name;
                 echo "4";
                 $success = move_uploaded_file($_FILES['news_img']['tmp_name'], $upload_path);
                  echo "5";
                 $news_img = $new_image_name;
                 // จบ ภาพ
               }else{
                 $news_img = null;
               }
                 $id = $_GET['id'];



       		    	 $sql_new = "INSERT INTO data_detailpost (detailpost_id,post_id,detailpost_detail,detailpost_img)
                 VALUES (0,'$id','$detail_txt','$news_img')";

                 $resultf_new = mysqli_query($DBConect,$sql_new,MYSQLI_USE_RESULT) or die(mysql_error());


                 header("Location:single.php?id=".$_GET['id']);


 ///////////////////////

                //$sql_del = "SELECT * FROM comment_12zodiac WHERE comzodiac_time LIKE  '%$x%' ";
                //$result_del = mysqli_query($DBConnect,$sql_del);
                //$row_del = mysqli_fetch_assoc($result_del);

                  //$com_del = $row_del['comzodiac_id'];
                 /*$text_del = "<form method='POST' ><input type = 'hidden' name = 'com' value = 'ทดสอบ'></form>";



                 $sql_del="UPDATE comment_12zodiac SET comzodiac_del = '$text_del'  WHERE comzodiac_id =  93 " or die (mysql_error());
                 $resultf = mysqli_query($DBConnect, $sql_del, MYSQLI_USE_RESULT) or die(mysql_error());*/











			    ?>
