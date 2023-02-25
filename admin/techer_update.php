<?php
include('../config/conn.php');


	$id_teacher= $_POST['id_teacher'];
	@$name=$_POST['name'];
	@$position=$_POST['position'];

	
	@$sql="select * from teacher where id_teacher='".$id_teacher."'";
	@$query=$conn->query($sql);
	@$row=$query->fetch_array();

	@$fileinfo=PATHINFO($_FILES["photo"]["name"]);

	if (empty($fileinfo['filename'])){
		$location = $row['photo'];
	}
	else{
        $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
		move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
		$location="" . $newFilename;
	}
	$sql="UPDATE teacher SET name='$name', position='$position', img_teac='$location' where id_teacher='$id_teacher'";
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($conn);

	header('location:index_admin.php?p=re');

	
	if(mysqli_query($conn,$sql)){ 
		echo "<script>alert('บันทึก');window.location='index_admin.php?p=re';</script>";
	  }
   
?>