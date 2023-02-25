
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
        include('config/conn.php');
        $sql="select * FROM contact
        WHERE id_con = 1";
              //AND category.categoryid = product.categoryid";
	    $query=$conn->query($sql);
	    $row=$query->fetch_array();
    ?>
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="form-group " style="margin-top:10px;">
                                        <div class="row">
                                        <div class="col-md-4 text-right"  style="margin-top:-37px;">
                                        <h1 class="yy"><i class="fa-brands fa-square-facebook" style="color: #0d6efd;"></i></h1>
                                            </div>
                                            <div class="col-md-4">
                                                <a type="button" target="_blank" href="<?php echo $row['facebook'];?>" class="btn btn-light" style="background-color: #0d6efd; width: 350px; color: #ffffff;"><?php echo $row['facebook'];?></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4 text-right"  style="margin-top:-37px;">
                                        <h1 class="yy"><i class="fa-brands fa-line" style="color: #198754;"></i></h1>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="button" class="btn" value="<?php echo $row['line'];?>" style="background-color: #198754; width: 350px; color: #ffffff;" name="line" readonly/>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4 text-right"  style="margin-top:-37px;">
                                        <h1 class="yy"><i class="fa-solid fa-square-phone" style="color: #dc3545;"></i></h1>
                                            </div>
                                            <div class="col-md-4">
                                            <input type="button" class="btn" value="<?php echo $row['tol'];?>" style="background-color: #dc3545; width: 350px; color: #ffffff;" name="tol"  readonly/>
                                            </div>
                                        </div>
                                    </div>
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
