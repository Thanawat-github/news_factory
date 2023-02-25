
<div class="row g-0 bg-light">

<?php
     $stmt = $conn->prepare("SELECT* FROM slider");
     $stmt->execute();
     $result = $stmt->fetchAll();
?>

<div class="card">
<div class="row">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <?php
                            //กำหนด class active เพื่อเรียกใช้ button สำหรับคลิกสไลด์
                              $i=0;
                              foreach($result as $row){
                              $actives='';
                              if($i==0){
                              $actives='active';
                              }
                              ?>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i;?>" class="<?php echo $actives;?>" aria-current="true" aria-label="Slide <?php echo $i;?>"></button>
                            <?php $i++; } ?>
                          </div>
                          <div class="carousel-inner">
 
                            <?php
                            //กำหนด class active สำหรับเรียกรูปมาแสดง
                              $i=0;
                              foreach($result as $row){
                              $actives='';
                              if($i==0){
                              $actives='active';
                              }
                              ?>
 
                            <div class="carousel-item <?php echo $actives;?>">
                               <a href="" target="_blank" title="คลิก">
                              <img src="admin/upload/<?php echo $row['img_slide'];?>" class="d-block w-100" alt="...">
                              </a>
                            </div>
                            <?php $i++; } ?>
 
                          </div>
 
 
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
 
                         <!-- // slide -->
</div>
</div>
<br>
<div class="card">
  <h7 class="card-header">ข่าวสาร</h7>
  <div class="container-fluid">
    <div class="row">
    
  <?php
     $stmt02 = $conn->prepare("SELECT news.* , admin.* FROM news
     inner join admin on news.admin_id = admin.admin_id
     ");
     $stmt02->execute();
     $res = $stmt02->fetchAll();
     foreach($res as $rownews){
 ?>
          <div class="col-lg-3 col-sm-4 col-11">
          <a href="index.php?p=img&sec=<?php echo $rownews['id_news']?>">
            <div class="card" style="width: 250px; margin: 20px;">
              <img
                src="admin/upload/<?php echo $rownews['img_news'];?>"
                class="card-img-top"/>

              <div class="card-body">
                <h8 class="card-title"><?php echo $rownews['hade_news'] ?></h8>
                <p class="card-text">
               
                </p>
              </div>
            </div>
         </a>
            </div>
            <?php } ?>
          
          </div>
    </div>
    </div>
    <br>
<div class="card">
  <h7 class="card-header">กิจกรรม</h7>
  <div class="card-body">
 <!-- Carousel wrapper -->
<div
  id="carouselMultiItemExample"
  class="carousel slide carousel-dark text-center"
  data-mdb-ride="carousel"
>
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button
      class="carousel-control-prev position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="prev"
    >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next position-relative"
      type="button"
      data-mdb-target="#carouselMultiItemExample"
      data-mdb-slide="next"
    >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
             
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->

  </div>
</div><br>



<div class="card">
  <h5 class="card-header">Contect Us</h5>
  <div class="card-body">

  </div>
</div>
</div>

</div>

</body>
</html>
