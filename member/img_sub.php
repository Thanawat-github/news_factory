<?php include("file-upload.php"); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>Admin</title>
  <style>
    .container {
      max-width: 450px;
    }
    .imgGallery img {
      padding: 8px;
      max-width: 100px;
    }    
  </style>
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
</head>

<body>

  <div class="container mt-5">
  <?php
     $sub = $_GET['sub'];
     $stmt = $conn->prepare("SELECT news.* , admin.* FROM news
     inner join admin on news.admin_id = admin.admin_id
     where id_news = ?
     ");
     $stmt->execute(array($sub));
     $res = $stmt->fetch();
 ?>
    <form action="" method="post" enctype="multipart/form-data" class="mb-3">
      <h3 class="text-center mb-1">เพิ่มภาพข่าว</h3>

      <div class="custom-file">
        <input type="hidden" name="id_news" class="" value="<?php echo $res['id_news']; ?>">
      </div>

      <div class="custom-file">
        <input type="file" name="fileUpload[]" class="custom-file-input" id="chooseFile" multiple>
        <label class="custom-file-label" for="chooseFile">เลือกรูปภาพ</label>
      </div>
       
      <div class="user-image mb-3 text-center">
        <div class="imgGallery"> 
          <!-- Image preview -->
        </div>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
        อัพโหลดไฟล์
      </button>
      
    </form>

    <!-- Display response messages -->
    <?php if(!empty($response)) {?>
        <div class="alert <?php echo $response["status"]; ?>">
           <?php echo $response["message"]; ?>
        </div>
    <?php }?>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(this, 'div.imgGallery');
      });
    });    
  </script>

  
</body>

</html>