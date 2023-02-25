<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
   
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  
</head>

<body>

        <div class="content">
            <div class="container-fluid">
                            <div class="header">
                                <h1 class="page-header text-center">จัดการบัญชีสมาชิก</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="index_admin.php?p=new" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> เพิ่มสมาชิก</a>
                                </div>
                            </div><br>
                            <div class="content">
                                <div class="content table-responsive table-full-width">
                                <table id="ex" class="table table-striped">
                                  
                                    <?php 
                                            require_once("../config/conn.php");
                                            $sql = "SELECT * FROM user order by Userlevel DESC";
                                            $query = mysqli_query($conn,$sql);
                                        ?>
                                    <form name="frmMain" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                                        <input type="hidden" name="hdnCmd" value="">
                                    <thead>
                                    <th width="15%"><b>ชื่อผู้ใช้</b></th>
                                        <th width="15%"><b>รหัสผ่าน</b></th>
                                    	<th width="15%"><b>ชื่อ</b></th>
                                    	<th width="15%"><b>นามสกุล</b></th>
                                    	<th width="15%"><b>เบอร์โทร</b></th>
                                        <th width="15%"><b>สถานะ</b></th>
                                        <th width="30%"><b>แก้ไข</b></th>
                                    </thead>
                                    <tbody>
                                         
                                        <?php
                                        while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        {?>
                                        <tr>
                                            <td><?php echo $result["Username"];?></td>
                                        	<td>********</td>
                                        	<td><?php echo $result["Firstname"];?></td>
                                        	<td><?php echo $result["Lastname"];?></td>
                                            <td><?php echo $result["Tel"];?></td>
                                            <td><?php if($result["Userlevel"]==1){
                                                echo 'บรรณาธิการ';
                                            }elseif($result["Userlevel"]==2){
                                                echo 'นักสื่อสารองค์กร';
                                            }else{
                                                echo 'นักประชาสัมพันธ์';
                                            };?></td>
                                            <td>

                                            <a class="btn btn-primary btn-sm" href="index_admin.php?p=edituser&UserID=<?php echo $result["ID_user"];?>">
                                             แก้ไข</a>
                                             <a class="btn btn-danger btn-sm" href="index_admin.php?p=edituser&UserID=<?php echo $result["ID_user"];?>">
                                             ลบ</a>
                                            </td> 
                                        </tr>                                                                        
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </form></table>  
                                </div>
                            </div>
                        </div>
           
            </div>


</html>

    <?php
mysqli_close($conn);
?>
<script>
            $(document).ready(function() {
            $('#ex').DataTable();
            } );
        </script>
<script>