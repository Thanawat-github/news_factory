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
                <form method="POST" action="techer_seve.php" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">รหัสบุคลากร:</label>
                            </div>
                            <?php
                            $query1 = "SELECT MAX(id_teacher) AS id_teacher FROM teacher order by id_teacher"
                            or die("Error:" . mysqli_error());
                            $result1 = mysqli_query($conn, $query1);
                            $row = mysqli_fetch_array($result1);
                            $P_ID = $row['id_teacher'];
                                if($P_ID == ""){
                                $nextID = "th001";
                                }else{
                                $code = "th";
                                $maxId = substr($row['id_teacher'], -3); 
                                $maxId = ($maxId + 1); 
                                $maxId = substr("000".$maxId, -3);
                                $nextID = ($code.$maxId);
                            }
                            ?>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="id_teacher" value="<?php echo $nextID; ?>" required readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">ชื่อ-นามสกุล:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="name" required>
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
                                <option selected>กรุณาเลือกตำแหน่ง</option>
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
                                <img loading="lazy" width="70%" id="previewImg" alt="">
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
