<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100;200;500;600;900&family=Sarabun:wght@200&display=swap');
body {
  min-height: 100vh;
  overflow-x: hidden;
  font-family: 'Noto Sans Thai', sans-serif;
}
</style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light" id="hid">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <br>
        <form class="d-flex">
        <div class="dropdown" id="hid">
                    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <h3><i class="fa-sharp fa-solid fa-circle-user"></i></h3>
                        <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION['name_ad']?></span>
                    </a>
                        <ul class="dropdown-menu dropdown-menu-white text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-user-gear"></i> แก้ไขข้อมูลส่วนตัว</a></li> 
                        </ul>
        </div>
        <hr>
        </form>

                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="../index.php" class="nav-link text-dark px-0 align  -middle">
                        <i class="fa-solid fa-shop"></i> <span class="ms-1 d-none d-sm-inline">หน้าเว็บแรก</span>
                        </a>
                    </li>
                    <li>
                        <a href="index_admin.php?p=ses" class="nav-link px-0 text-dark align-middle">
                        <i class="fa-solid fa-folder"></i> <span class="ms-1 d-none d-sm-inline">จัดการข้อมูลกิจกรรม</span>
                        </a>
                    </li>
                    <li>
                        <a href="index_admin.php?p=news" class="nav-link text-dark px-0 align-middle ">
                        <i class="fa-solid fa-rectangle-ad"></i> <span class="ms-1 d-none d-sm-inline">จัดการข้อมูลข่าว</span>
                        </a>
                    </li>
                    <li>
                        <a href="index_admin.php?p=user" class="nav-link text-dark px-0 align-middle">
                        <i class="fa-sharp fa-solid fa-user-group"></i> <span class="ms-1 d-none d-sm-inline">สมาชิก</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="index_admin.php?p=pro" class="nav-link px-0 text-dark align-middle">
                        <i class="fa-brands fa-slideshare"></i> <span class="ms-1 d-none d-sm-inline">จัดการสไลด์ภาพ</span>
                        </a>
                    </li>
                    <li>
                        <a href="index_admin.php?p=journal" class="nav-link px-0 text-dark align-middle">
                        <i class="fa-solid fa-image"></i> <span class="ms-1 d-none d-sm-inline">ภาพพื้นหลังวารสาร</span>
                        </a>
                    </li>
                    <li>
                        <a href="index_admin.php?p=paper" class="nav-link px-0 text-dark align-middle">
                        <i class="fa-solid fa-file-circle-plus"></i> <span class="ms-1 d-none d-sm-inline">สร้างวารสาร</span>
                        </a>
                    </li>
                    <li>
                        <a href="../logout.php" class="nav-link px-0 text-dark align-middle">
                        <i class="fa-sharp fa-solid fa-right-from-bracket"></i> <span class="ms-1 d-none d-sm-inline">ออกจากระบบ</span>
                        </a>
                    </li>
                </ul>
                <hr>

            </div>
        </div>

 