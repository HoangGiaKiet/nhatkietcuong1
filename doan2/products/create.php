<?php
   // $root= $_SERVER['DOCUMENT_ROOT']."/doan2";
    //echo $root; 
   include_once "../dbconnect.php";
   include_once "../funcitions.php";
       createProducts();
  // if(isset($_POST['sumbit'])){
    // kiểm tra xem có một trường dữ liệu có ten sumbit đc gởi đi '
      //và nhận đc phương thức  post hay kh
       // $name=$_POST['name']; // name của 2 cái input bên dưới(phải bắt được 2 cái name này)
       // $description=$_POST['description']; // name của 2 cái input bên dưới
        //Chuẩn bị câu truy vấn dữ liệu 
        // Tạo thêm INSERT INTO
     //   $queryInsert="INSERT INTO categories(name,description) VALUE('$name','$description')";
        // Thực thi câu truy vấn dữ liệu để lấy về dữ liệu
       // $result=mysqli_query($con,$queryInsert);
        // $con là biến kết nối đến cơ sở dữ liệu
        // thêm vào được rồi thì phải xử lí đoạn này khi thêm vào rồi nhưng nó vẫn đứng ở trang này 
        // sau khi coliu mình phải điều hướng nó về lại trang danh sách của categories
        // thì phải dùng lệnh header
     //    header("Location:index.php");
  
  
?>
                <?php include_once("../inclus/header.php") ?>
                <h1 class="fs-2 text-warning">Thêm sản phẩm  </h1>
                <form action="" method="post" enctype="multipart/form-data">
 <div class="mb-3">
  <label for="usersname" class="form-label"> Tên</label>
  <input type="text" class="form-control" id="name" name="name">
</div>
 <div class="mb-3">
  <label for="usersname" class="form-label">Hình ảnh </label>
  <input type="file" class="form-control" id="image_upload" name="fileToUpload">
</div>
<div class="mb-3">
  <label for="description"class="form-label">Mô tả </label>
  <textarea class="form-control" id="price"name="description" rows="5"></textarea>
</div>
<div class="mb-3">
  <label for="name"class="form-label"> Giá</label>
  <input type="number" class="form-control" id="price " name="price">
</div>

<button class="btn btn-primary" name="sumbit"type="sumbit"><i data-lucide="chevron-right"></i>Thêm</button>
           </form>
    