<?php
     $sec = $_GET['sec'];
     $stmt02 = $conn->prepare("SELECT news.* , admin.* FROM news
     inner join admin on news.admin_id = admin.admin_id
     where id_news = ?
     ");
     $stmt02->execute(array($sec));
     $res = $stmt02->fetch();
 ?>
<div class="card">
  <h7 class="card-header">ข่าวสาร /<?php echo $res['hade_news'];?></h7>
  <div class="container">
    <div class="row">

          <div class="col-lg-6 col-sm-4 col-11">
          <a href="index.php?p=img&sec=<?php echo $res['id_news']?>">
            <div class="card" style="width: 500px; margin: 20px;">
              <img
                src="admin/upload/<?php echo $res['img_news'];?>"
                class="card-img-top"/>
            </div>
         </a>
         <hr>
         <div class="row">
         <?php
            $sub_im = $conn->prepare("SELECT * FROM sun_news
             where id_news = ?
            ");
            $sub_im->execute(array($_GET['sec']));
            $sub_res = $sub_im->fetchAll();
            foreach($sub_res as $sub_r){
        ?>
        <div class="col-lg-4 col-sm-6 col-12">
            <div class="card" style="width: 150px; margin: 20px;">
              <img
                src="admin/upimg/<?php echo $sub_r['img_news_sub'];?>"
                class="card-img-top"/>
            </div>
            </div>
         <?php } ?>
         </div>
          </div>
          <div class="col-lg-6 col-sm-4"><br>
          <h2><?php echo $res['hade_news'];?></h2>
          <div style="font-size: 12px;">โดย : <?php echo $res['name_ad'];?></div>
          <div style="font-size: 12px;">วันที่ : <?php echo newformatdate($res['datesave']);?></div>
          <?php echo $res['name_news'];?>
          </div>
    </div>
    <div class="col-lg-6 col-sm-4">
    <a type="button" class="btn btn-secondary" href="index.php?p=subimg&sub=<?php echo $res['id_news']?>"><i class="fa-sharp fa-solid fa-download"></i> ดาวน์โหลด</a>
    </div>
    </div>
    <br>
    </div>