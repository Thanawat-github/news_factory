<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>

<!DOCTYPE html>
<html lang="en">

      
    <center>
        <h4>แก้ไขรายการอาหาร</h4>
        <?php
        include('../config/server.php');
        $id = $_GET['product_id'];
        $sql="select category.*,product.* FROM product
        inner join category on category.category_id = product.category_id
        WHERE product_id = '$id'";
              //AND category.categoryid = product.categoryid";
	    $query=$conn->query($sql);
	    $row=$query->fetch_array();
    ?>

        <form action="product_up.php" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
            <div class="form-group" style="margin-top:10px;">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:7px;">
                            <label class="control-label">รหัส:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="<?php echo $row['product_id']; ?>"
                                name="product_id" readonly/>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-top:10px;">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:7px;">
                            <label class="control-label">ชื่อรายการ:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="<?php echo $row['product_name']; ?>"
                                name="product_name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:7px;">
                            <label class="control-label">ประเภท:</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option value="<?=$row['category_id'];?>"><?=$row['category_name'];?></option>
                                <?php
                                        $sql="select * from category";
                                        $cquery=$conn->query($sql);
                                        while($crow=$cquery->fetch_array()){
                                ?>
                                <option value="<?php echo $crow['category_id']; ?>"><?php echo $crow['category_name']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:7px;">
                            <label class="control-label">สถาน:</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" name="product_status">
                                <option value="<?php echo $row['product_status'];?>"><?php echo $row['product_status']; ?></option>
                                <option value="เปิดการใช้งาน">เปิดการใช้งาน</option>
                                <option value="ปิดการใช้งาน">ปิดการใช้งาน</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:7px;">
                            <label class="control-label">ราคา:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="<?php echo $row['price']; ?>" name="price">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3" style="margin-top:7px;">
                            <label class="control-label">รูป:</label>
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="photo" class="form-control" id="imgInput">
                            <?php $photo = $row['photo']; ?>
                            <img width="50%" <?php if($photo == ""){ echo "" ; }else{ echo "src='uplode/$photo'";} ?> id="previewImg" alt="">
                            <input type="hidden" value="<?php echo $row['photo']; ?>" required class="form-control" name="photo2">
                        </div>
                    </div>
                </div>
                <div>
                <button type="button" onclick="history.back()" class="btn btn-primary"><i class="fas fa-reply"></i> ย้อนกลับ</button>
                         &nbsp;&nbsp;
                    <button type="submit" name="save" id="save" value="save" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>
                        อัพเดท</button>
        </div> 
    </form>


</body>

</html>
<script>
        let imgInput = document.getElementById('imgInput');
        let previewImg = document.getElementById('previewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
                if (file) {
                    previewImg.src = URL.createObjectURL(file)
            }
        }

    </script>
<script>

