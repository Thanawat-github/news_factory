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
        <h4>เพิ่มรายการข่าวประชาสมัพันธ์</h4>
        <div>
            <!--เริ่มฟอร์มของหน้าเพิ่มรายการอาหาร-->
            <div class="container">
                <form method="POST" action="news_seve.php" enctype="multipart/form-data">

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">หัวข้อข่าว:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="hade_news" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">วันที่ประกาศ:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="date" class="form-control" name="date_news" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3" style="margin-right:0px;">
                                <label class="control-label">รายละเอียดข่าว:</label>
                            </div>
                            <div class="col-md-7">
                                <textarea  type="text" class="form-control" name="name_news" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">รูปปก:</label>
                                <button type="submit" class="btn btn-warning btn-sm" id="save" value="save" >เพิ่มรูป</button>
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
