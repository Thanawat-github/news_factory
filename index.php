<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {

  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
a:link {
text-decoration:none;
}
</style>
<?php include 'config/config.php' ?>
<!doctype html>
<html lang="en">
<body>
<?php
   session_start();
   if(empty($_SESSION["admin_id"])){

    include "login/login.php"
    ;
   }else{
?>   
<?php include 'page/nav.php'?>
<?php include 'page/fulldate.php'?>
<?php 
                            if(isset($_GET['p'])){
                                  
                                $page = $_GET['p'];
                                if($page == 'home'){//หน้าแรก
                                    require_once('page/home.php');
                                }elseif($page == 'news'){//รายการสั่งซื้อ
                                    require_once('page/news_page.php');
                                }elseif($page == 'section'){//จัดการสินค้า
                                    require_once('page/section_page.php');
                                }elseif($page == 'theme'){
                                    require_once('page/theme_page.php');
                                }elseif($page == 'teacher'){
                                    require_once('page/teacher_page.php');
                                }elseif($page == 'contact'){
                                    require_once('page/contactuser.php');
                                }elseif($page == 'img'){
                                    require_once('page/news_img.php');
                                }elseif($page == 'edit_news'){
                                    require_once('page/edit_news.php');
                                }
                                elseif($page == 'subimg'){
                                    require_once('page/putsubimg.php');
                                }
                                else{
                                    require_once('page/home.php');
                                }
                            }else{
                                require_once('page/home.php');
                            }
?>

<?php } ?>