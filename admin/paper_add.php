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
        <h4>สร้างวารสาร</h4>
        <div>
            <!--เริ่มฟอร์มของหน้าเพิ่มรายการอาหาร-->
            <div class="container">
                <form method="POST" action="product_seve.php" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">เลือกหัวข้อข่าว:</label>
                            </div>
                            <div class="col-md-7">
                            <select class="form-control" name="color" id="color">
                                <option value="">--- กรุณาเลือกหัวข้อข่าว ---</option>
                                      <?php
                                      $query1 = "SELECT * FROM news order by id_news"
                                      or die("Error:" . mysqli_error());
                                      $result1 = mysqli_query($conn, $query1);
                                      $row = mysqli_fetch_array($result1);
                                      ?>
                                <option value="<?php echo $row['id_news']?>"><?php echo $row['hade_news']?></option>
                            </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">พื้นหลัง:</label>
                                
                            </div>
                            <div class="col-md-7">
                                <label class="control-label">แนะนำรูปขนาด 1200x567 Px เพื่อความสวยงามในการแสดงผล</label>
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
