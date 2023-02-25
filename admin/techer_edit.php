<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>

<head>

</head>

<body>
    
<?php include('../config/conn.php');
?>
    <center>
        <h4>เพิ่มข้อมูลบุคลากร</h4>
        <div>
            <!--เริ่มฟอร์มของหน้าเพิ่มรายการอาหาร-->
            <div class="container">
                <form method="POST" action="techer_update.php" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">รหัสบุคลากร:</label>
                            </div>
                            <?php
                            $id = $_GET['i'];
                            $query1 = "SELECT * FROM teacher where id_teacher = '".$id."'"
                            or die("Error:" . mysqli_error());
                            $result1 = mysqli_query($conn, $query1);
                            $row = mysqli_fetch_array($result1);
                            ?>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="id_teacher" value="<?php echo $id; ?>" required readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">ชื่อ-นามสกุล:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">ตำแหน่ง:</label>
                            </div>
                            <div class="col-md-7">
                            <select class="form-select" name="position" aria-label=".form-select-sm example">
                                <option selected><?php
                                    if($row['position']==1){
                                    echo 'ผู้อำนวยการโรงเรียน';
                                    }elseif($row['position']==2){
                                    echo 'รองผู้อำนวยการโรงเรียน';	
                                    }
                                    elseif($row['position']==3){
                                    echo 'ครูชำนาญการ';	
                                    }
                                    elseif($row['position']==4){
                                    echo 'ครูชำนาญการพิเศษ';	
                                    }
                                    elseif($row['position']==5){
                                    echo 'ครูเชี่ยวชาญ';	
                                    }
                                    elseif($row['position']==6){
                                    echo 'ครู';	
                                    }
                                    elseif($row['position']==7){
                                    echo 'ครูผู้ช่วย';	
                                    }
                                    elseif($row['position']==8){
                                    echo 'ครูอัตราจ้าง';	
                                    }
                                    ?></option>
                                <option value="1">ผู้อำนวยการโรงเรียน</option>
                                <option value="2">รองผู้อำนวยการโรงเรียน</option>
                                <option value="3">ครูชำนาญการ</option>
                                <option value="4">ครูชำนาญการพิเศษ</option>
                                <option value="5">ครูเชี่ยวชาญ</option>
                                <option value="6">ครู</option>
                                <option value="7">ครูผู้ช่วย</option>
                                <option value="8">ครูอัตราจ้าง</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">รูป:</label>
                                
                            </div>
                            <div class="col-md-7">
                                <input type="file" class="form-control" name="photo" id="imgInput">
                                <?php $photo = $row['img_teac']; ?>
                                <img width="50%" <?php if($photo == ""){ echo "" ; }else{ echo "src='upload/$photo'";} ?> id="previewImg" alt="">
                                <input type="hidden" value="<?php echo $row['img_teac']; ?>" required class="form-control" name="photo2">
                            </div>
                        </div>
                    </div>
        </div>
        <!--จบฟอร์มของหน้าเพิ่มรายการอาหาร-->
        <br>
        <button type="button" onclick="history.back()" class="btn btn-primary">ย้อนกลับ</button>
        &nbsp;&nbsp;
        <button type="submit" class="btn btn-success" name="save" id="save" value="save" >บันทึก</button>
        </form>
        </th>
        </table>
        </div>
        <!--จบ <div style="margin-top:10px;"> -->
    </center>
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
