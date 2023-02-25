

    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100&display=swap" rel="stylesheet">
        <style> body{font-family: 'Sarabun', sans-serif;}</style>
    <title>แก้ไขข้อมูลสมาชิก</title>
</head>
<style type="text/css">
body{
  background-image: radial-gradient(white,ghostwhite);
}
</style>
<align="center">
<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php 
        include('../config/server.php');
        $ID = $_GET['UserID'];
        $sql = "SELECT * FROM user Where ID = '$ID'";
        $query = mysqli_query($conn,$sql);

        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
    ?>
      <div class="card" style="width: Auto;">
				<form class="login100-form validate-form" name ="form1" method="post" action="updateuser.php" onsubmit="return checkPassword()">
        <div class="form-group ">
                <div class="col-md-12 mb-3 mb-md-1">
                <center><h2 class="x">แก้ไขข้อมูลสมาชิก</h2></center>
                </div>
              </div>
              <div class="form-group y">
              <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">ชื่อผู้ใช้</label>
                  <input type="text" id="username" class="form-control" style="background-color: #eee;" value="<?php echo $result['Username']?>" name="username" required readonly>
                  <input type="hidden" id="ID" class="form-control" style="background-color: #eee;" value="<?php echo $result['ID']?>" name="ID" required >
                </div>
              <br>
              <div class="form-group y">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="password">รหัสผ่านใหม่</label>
                  <input type="password" id="password" class="form-control" style="background-color: #FFFFF;" value="" placeholder="***********" name="password">
                  <label class="font-weight-bold" for="password">ยืนยันรหัสผ่านใหม่</label>
                  <input type="password" id="password02" class="form-control" style="background-color: #FFFFF;" value="" placeholder="***********" name="password02">
                  <input type="hidden" id="password" class="form-control" style="background-color: #eee;" value="<?php echo $result['Password']?>"  name="password01" required >
                </div>
              </div>
              <br>
              <div class="form-group y">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="firstname">ชื่อ</label>
                  <input type="text" id="firstname" class="form-control" style="background-color: #eee;" value="<?php echo $result['Firstname']?>" name="firstname" required readonly>
                </div>
              </div>
              <br>
              <div class="form-group y">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="lastname">นามสกุล</label>
                  <input type="text" id="lastname" class="form-control" style="background-color: #eee;" value="<?php echo $result['Lastname']?>" name="lastname" required readonly>
                </div>
              </div>
              <br>
              <div class="form-group y">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="tel">เบอร์โทรศัพท์</label>
                  <input type="text" id="tel" class="form-control" style="background-color: #FFFFF;" value="<?php echo $result['Tel']?>" name="tel" required >
                </div>
              </div>
              <br>
              <div class="form-group y">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="userlevel">สถานะ</label>
                  <select name="userlevel" id="userlevel" style="background-color: #eee;" class="form-control" required >
                    <option value="<?php echo $result['Userlevel']?>"><?php echo $result['Userlevel']?></option>
                  </select>
                </div>
              </div>
              <br>
              <?php } ?>
                <center>
                  <button type="button" onclick="history.back()" class="btn btn-primary">ย้อนกลับ</button>
                  <button type="submit" name="save" class="btn btn-primary  py-2 px-4">บันทึก</button> 
                </center>
            </form>
            <br>
            </div>
          </div>
          </div>
          </div>
          </div>
          </body>

</html>
<script>
    function checkPassword() {
        let password_1 = document.getElementById("password");
        let password_2 = document.getElementById("password02");
        if( password_1.value != password_2.value ) {
            alert("กรุณากรอกรหัสผ่าน และยืนยันรหัสผ่านให้ตรงกัน");
            return false;
        }
    }
</script>







