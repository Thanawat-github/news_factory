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
	<h1 class="page-header text-center x">ข้อมูลข่าวประสาสัมพันธ์</h1>
    <div class="col-md-12">
			<a href="index_admin.php?p=newsapp" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span>+เพิ่มข่าว</a>
		</div><br>
</div>
	<table id="ex" class="table table-striped table-bordered">
		<thead>
		    <th><div class="y"><b>ลำดับ</h4></th>
			<th><div class="y"><b>วันเวลา</h4></th>
			<th><div class="y"><b>รูปปก</h4></th>
			<th><div class="y"><b>หัวข้อข่าว</h4></th>
			<th><div class="y"><b>รายละเอียด</h4></th>
			<th><div class="y"><b>จัดการ</h4></th>
		</thead>
		<tbody>
		<?php 
							$i=1;
                                            require_once("../config/conn.php");
                                            $sql = "SELECT * FROM news order by id_news DESC";
                                            $query = mysqli_query($conn,$sql);
                            ?>
                
				<?php
                                        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                {?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $result["datesave"];?></td>
					<td><img src="upload/<?php echo $result['img_news'];?>" class="d-block w-100" alt="...">
					<a class="btn btn-warning btn-sm" href="index_admin.php?p=imgsub&sub=<?php echo $result["id_news"];?>">เพิ่มรูป</a>
				   </td>
					<td><?php echo $result["hade_news"];?></td>
					<td><?php echo $result["name_news"];?></td>
					<td>
					<a class="btn btn-danger btn-sm" href="index_admin.php?p=editnews&edit=<?php echo $result["id_news"];?>">
                    แก้ไข</a>
					<a class="btn btn-danger btn-sm" href="index_admin.php?p=del_slide&del=<?php echo $result["id_news"];?>" onclick="return confirm('คุณต้องการลบ <?php echo $result['hade_news'];?> หรือไม่ ?')">
                    ลบ</a>
					</td>
				</tr>	
				<?php
                $i++; }
                ?>
		</tbody>
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


