<head>
	<?php
    session_start();
	?>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> 
</head>
<?php 
require_once("conn.php");
if($_POST['check'] == 1){
if(isset($_POST['Login'])){
	$username = $_POST['Username'];
	$password = $_POST['Password'];
    
	$sql="SELECT * FROM admin Where user_ad='".$username."' AND Pass_ad='".$password."'";
    $result = mysqli_query($conn,$sql)or die("Error: " . mysqli_error($conn));
	
	if(mysqli_num_rows($result)==1){
		$row = mysqli_fetch_array($result);

        $_SESSION["admin_id"] = $row["admin_id"];
        $_SESSION["name_ad"] = $row["name_ad"];
        $_SESSION["user_ad"] = $row["user_ad"];


                echo '<script>
                setTimeout(function() {
                swal({
                        title: "เข้าสู่ระบบสำเร็จ",
                        type: "success"
                    }, function() {
                        window.location.replace("../admin/index_admin.php?p=home");
                    });
                    }, 1000);
                </script>';
                header("refresh:3; ../index.php");

		}
        else{    
            echo '<script>
            setTimeout(function() {
            swal({
                title: "ไม่สามารถเข้าระบบได้",
                text: "กรุณาตรวจสอบชื้อผู้ใช้ หรือรหัสผ่าน",
                type: "error"
            }, function() {
                window.location = "../index.php"; //หน้าที่ต้องการให้กระโดดไป
            });
            }, 1000);
           </script>';
    }

        
        }
    }
    
elseif($_POST['check'] == 2){
        if(isset($_POST['Login'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        
        $sql="SELECT * FROM user Where Username='".$username."' AND Password='".$password."'";
        $result = mysqli_query($conn,$sql)or die("Error: " . mysqli_error($conn));
        
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
    
            $_SESSION["Username "] = $row["Username"];
            $_SESSION["Firstname"] = $row["Firstname"];
            $_SESSION["Lastname"] = $row["Lastname"];
    
                    
                        echo "<script>
                        alert('กำลังเข้าสู่ระบบ  ');
                        window.location.replace('../member/index_mem.php?p=home');
                        </script>";
    
    
            }{    
                echo "<script>
            alert('ไม่สามารถเข้าสู่ระบบได้ชื่อผู้ใช้หรือรหัสผ่านของคุณไม่ถูกต้อง');
            window.location.replace('../index.php');
            </script>";
            }
    }
}
?>
