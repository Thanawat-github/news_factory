<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</head>
<!doctype html>
<html lang="en">

<body>
<?php
      require_once("../config/conn.php");
	  ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                             <div class="header">
	<h1 class="page-header text-center x">บุคลากร</h1>
    <div class="col-md-12">
			<a href="index_admin.php?p=techeradd" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>+เพิ่มบุคคลกร</a>
		</div><br>
</div>
<?php 
    require_once("../config/conn.php");
    $sql = "SELECT * FROM teacher order by position";
    $query = mysqli_query($conn,$sql);
?>
	<table id="ex" class="table table-striped table-bordered">
		<thead>
		    <th><div class="y"><b>ลำดับ</h4></th>
			<th width="20%"><div class="y"><b>รูปภาพ</h4></th>
			<th><div class="y"><b>ชื้อ-นามสกุล</h4></th>
			<th><div class="y"><b>ตำแหน่ง</h4></th>
			<th><div class="y"><b>จัดการ</h4></th>
		</thead>
		<?php
		    $i=1;
            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
        {?>
		<tbody>
			<td><?php echo $i;?></td>
			<td><img src="upload/<?php echo $result['img_teac'];?>" class="d-block w-100" alt="..."></td>
			<td><?php echo $result['name'];?></td>
			<td><?php
				if($result['position']==1){
				echo 'ผู้อำนวยการโรงเรียน';
				}elseif($result['position']==2){
				echo 'รองผู้อำนวยการโรงเรียน';	
				}
				elseif($result['position']==3){
				echo 'ครูชำนาญการ';	
				}
				elseif($result['position']==4){
				echo 'ครูชำนาญการพิเศษ';	
				}
				elseif($result['position']==5){
				echo 'ครูเชี่ยวชาญ';	
				}
				elseif($result['position']==6){
				echo 'ครู';	
				}
				elseif($result['position']==7){
				echo 'ครูผู้ช่วย';	
				}
				elseif($result['position']==8){
				echo 'ครูอัตราจ้าง';	
				}
				?>
			</td>
			<td>
			<a class="btn btn-Primary btn-sm" href="index_admin.php?p=edit_th&i=<?php echo $result["id_teacher"]?>">
                    แก้ไข</a>
					<a class="btn btn-danger btn-sm" href="index_admin.php?p=del_th&del=<?php echo $result["id_teacher"];?>" onclick="return confirm('คุณต้องการลบ <?php echo $result['name'];?> หรือไม่ ?')">
                    ลบ</a>
					</td>
		</tbody>
		<?php
        $i++; }
        ?>
	</table>
</div>
</div>
</div>

</body>
</html>

<script>
            $(document).ready(function() {
            $('#ex').DataTable();
            } );
        </script>
<script>

<!--<td><a href="details=<?php echo $row["purshase_id"];?>"  class="btn btn-success btn-sm"><span class="glyphicon glyphicon-search"></span> รายละเอียด</a> 


