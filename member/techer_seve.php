<?php
    session_start();
	include('../config/conn.php');
    if(isset($_POST["save"])){ //เมื่อกดปุ่ม save

    $name_ad = $_SESSION['admin_id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $id_teacher = $_POST['id_teacher'];    

    $sql3 = "SELECT * FROM teacher WHERE name = '$name' ";
    $qry = mysqli_query($conn,$sql3);
    $row = mysqli_num_rows($qry);
    if($row > 0) {
    exit("<script>alert('มีรายการ $name นี้แล้ว!');history.back();</script>");
    }
	else{

        $img = $_FILES['photo'];

        $allow = array('jpg', 'jpeg', 'png');
        $extension = explode('.', $img['name']);
        $fileActExt = strtolower(end($extension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = 'upload/'.$fileNew;
    
        if (in_array($fileActExt, $allow)) {
            if ($img['size'] > 0 && $img['error'] == 0) {
                if (move_uploaded_file($img['tmp_name'], $filePath)) {

	
	$sql="insert into teacher (id_teacher,admin_id, name, position, img_teac) values ('$id_teacher','$name_ad','$name','$position','$fileNew')";
	$conn->query($sql);

    if($sql){
		echo "<script type='text/javascript'>";
		echo "alert('บันทึกข้อมูลสำเร็จ');";
		echo "window.location = 'index_admin.php?p=re'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('บันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบ');";
			echo "window.location = 'index_admin.php?p=re'; ";
		echo "</script>";
	}
    }
    }
}
}
}
?>
