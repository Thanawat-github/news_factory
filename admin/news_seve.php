<?php
    session_start();
	include('../config/conn.php');
    if(isset($_POST["save"])){ //เมื่อกดปุ่ม save

    $name_ad = $_SESSION['admin_id'];
    $hade_news = $_POST['hade_news'];
    $date_news = $_POST['date_news'];
    $name_news = $_POST['name_news'];


    $sql3 = "SELECT * FROM news WHERE hade_news = '$hade_news' ";
    $qry = mysqli_query($conn,$sql3);
    $row = mysqli_num_rows($qry);
    if($row > 0) {
    exit("<script>alert('มีรายการข่าว $hade_news นี้แล้ว!');history.back();</script>");
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

	
	$sql="insert into news (admin_id, hade_news, datesave, name_news, img_news) values ('$name_ad','$hade_news','$date_news' ,'$name_news','$fileNew')";
	$conn->query($sql);

    if($sql){
		echo "<script type='text/javascript'>";
		echo "alert('บันทึกข้อมูลสำเร็จ');";
		echo "window.location = 'index_admin.php?p=news'; ";
		echo "</script>";
		}
		else{
		echo "<script type='text/javascript'>";
		echo "alert('บันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบ');";
			echo "window.location = 'index_admin.php?p=news'; ";
		echo "</script>";
	}
    }
    }
}
}
}
?>
