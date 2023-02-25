<?php
    include "config/config.php";
	
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
   min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
a:link {
text-decoration:none;
}
</style>
<body>
<br>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <div class="card px-5 py-5">
			<div class="card-body">
				<form class="" method="post" action="config/chacklogin.php">
					<div class="row d-flex justify-content-center">
						<img src="img/logo.png">
					<br>
					<h4 class="text-center">เข้าสู่ระบบ</h4>
					</div>
					เลือก
					<div class="wrap-input100 validate-input" data-validate = "Enter UserID">
					<select id="disabledSelect" class="form-select" name="check" required>
					    <option value="">กรุณาเลือก</option>
						<option value="1">ผู้ดูแลระบบ</option>
						<option value="2">เจ้าหน้าที่</option>
					</select>
					</div>
					ชื่อผู้ใช้
					<div class="wrap-input100 validate-input" data-validate = "Enter UserID">
						<input class="form-control"type="text" id="Username" name="Username" required>
					</div>
					รหัสผ่าน
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="form-control" type="password" id="Password" name="Password" required>
					</div><br>
						<div class="d-flex justify-content-center">
							<button class="btn btn-primary" name="Login">เข้าสู่ระบบ</button>&nbsp;&nbsp;&nbsp;
                			<a  href="forget_user.php" button type="button" class="btn btn-primary">ลืมรหัสผ่าน</a>  
						</div> 
				</form>
				</div>

				</div>
			</div>
			</div>
		</div>

</body>
</html>