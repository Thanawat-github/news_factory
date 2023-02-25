<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>

<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card" style="width: auto;">
       <div style="margin-top:10px;"><br>

                    <center>
                        <h4 class="modal-title x" id="myModalLabel">ช่องการติดต่อ</h4>
                        <br><br>
                        <div>
                            <!--เริ่มฟอร์มของหน้าเพิ่มประเภทอาหาร-->
                            <div class="container-fluid">
                            <?php
        include('../config/conn.php');
        $sql="select * FROM contact";
              //AND category.categoryid = product.categoryid";
	    $query=$conn->query($sql);
	    $row=$query->fetch_array();
    ?>
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group " style="margin-top:10px;">
                                        <div class="row">
                                            <div class="col-md-3 text-right"  style="margin-top:7px;">
                                                <label class="y">Facebook :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control y" value="<?php echo $row['facebook'];?>" style="background-color: #eee;" name="facebook">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-3 text-right"  style="margin-top:7px;">
                                                <label class="y">Line :</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control y" value="<?php echo $row['line'];?>" style="background-color: #eee;" name="line">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-3 text-right"  style="margin-top:7px;">
                                                <label class="y">โทร :</label>
                                            </div><br>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control y" value="<?php echo $row['tol'];?>" style="background-color: #eee;" name="tol">
                                            </div>
                                        </div>
                                    </div><br>
                                    <button type="button" onclick="history.back()" class="btn btn-primary">ย้อนกลับ</button>
                         &nbsp;&nbsp;
                        <button type="submit" class="btn btn-success custom_1" name="save" id="save" value="save" >บันทึก</button>
                        </form><br><br>
                        </div>
                        </div>
                        <!--จบฟอร์มของหน้าเพิ่มประเภทอาหาร-->
                        <br><br><br>
                      
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--จบ <div style="margin-top:10px;"> -->
    </center>
</body>

</html>

<?php
    include('../config/conn.php');
    if(isset($_POST["save"])){ //เมื่อกดปุ่ม save

    $facebook=$_POST['facebook'];
	$line=$_POST['line'];
    $tol=$_POST['tol'];
    $id_con = 1;

    $sql1 = "UPDATE contact
    SET facebook = '$facebook',line = '$line',tol = '$tol'
    WHERE id_con = '$id_con'";

if(mysqli_query($conn,$sql1)){ 
    echo "<script>alert('อัพเดทข้อมูลสำเร็จแล้ว');window.location='contact.php';</script>";
  }
         }
?>