<nav class="navbar navbar-light sticky-top" style="background-color: #ffffff;">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="img/logo2.png" alt="" width="70" height="70">
    </a>
 
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
    <a style="font-size: 20px; color: #FF6600;">ระบบสื่อสารองค์กรคณะวิทยาศาสาตร์</a><br>
    <a style="font-size: 16px; color: #0666b7;">มหาวิทยาลัยอุบลราชธานี</a></li>
    </ul>


	  <a class="" style="font-size: 14px; color: #0666b7;" href="index.php?p=home">หน้าแรก</a>&nbsp; &nbsp;
	  <a class="" style="font-size: 14px; color: #0666b7;" href="index.php?p=news">ข่าวสาร</a>&nbsp; &nbsp;
	  <a class="" style="font-size: 14px; color: #0666b7;" href="index.php?p=section">กิจกรรม</a>&nbsp; &nbsp;
      <?php if(isset($_SESSION["admin_id"])) {?>
      <a class="" style="font-size: 14px; color: #0666b7;" href="admin/index_admin.php">จัดการหลังบ้าน</a>&nbsp; &nbsp;
      <?php } ?>
    </div>  
</nav>
