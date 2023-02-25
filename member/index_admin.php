<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>
<head>

<title>Admin</title>
</head>
<body>


<?php session_start();?>
<div class="container-fluid">
     <div class="row flex-nowrap"> 
        <?php include('nav_menu.php')?>
        <div class="col py-3">
        <ul class="list-unstyled">

               <?php 
                            if(isset($_GET['p'])){
                                  
                                $page = $_GET['p'];
                                if($page == 'home'){//หน้าแรก
                                    require_once('news.php');
                                }elseif($page == 'list'){//รายการสั่งซื้อ
                                    require_once('manage_user.php');
                                }elseif($page == 'pro'){//จัดการสินค้า
                                    require_once('product.php');
                                }elseif($page == 'news'){
                                    require_once('news.php');
                                }elseif($page == 'user'){
                                    require_once('ManageAdmin.php');
                                }elseif($page == 'contect'){
                                    require_once('contect.php');
                                }elseif($page == 'new'){
                                    require_once('new_user.php');
                                }elseif($page == 'newsapp'){
                                    require_once('news_add.php');
                                }elseif($page == 'proadd'){
                                    require_once('product_add.php');
                                }elseif($page == 'uppro'){
                                    require_once('product_update.php');
                                }elseif($page == 'sell'){
                                    require_once('menu_list.php');
                                }elseif($page == 'bill'){
                                    require_once('report_sell_form.php');
                                }elseif($page == 'sell_form'){
                                    require_once('report_sell_form.php');
                                }elseif($page == 'del_th'){
                                    require_once('del_th.php');
                                }elseif($page == 'edit_th'){
                                    require_once('techer_edit.php');
                                }elseif($page == 're'){
                                    require_once('techer.php');
                                }elseif($page == 'edituser'){
                                    require_once('EditAdmin.php');
                                }elseif($page == 'techeradd'){
                                    require_once('techer_add.php');
                                }elseif($page == 'del_slide'){
                                    require_once('del_slide.php');
                                }elseif($page == 'editnews'){
                                    require_once('edit_news.php');
                                }elseif($page == 'imgsub'){
                                    require_once('img_sub.php');
                                }
                                else{
                                    require_once('news.php');
                                }
                            }else{
                                require_once('news.php');
                            }
                        ?>
</div>
        </div>

</div>
</div>

</body>