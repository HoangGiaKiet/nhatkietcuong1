<?php
   include_once "../dbconnect.php";
   include_once "../funcitions.php";
   createUser();
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
                <h1 class="fs-2 text-warning">Thêm người dùng </h1>
                <form action="" method="post">
 <div class="mb-3">
  <label for="usersname" class="form-label"> Usersname</label>
  <input type="text" class="form-control" id="usersname" name="usersname">
</div>
<div class="mb-3">
 <label for="email" class="form-label">Email</label>
 <input type="text" class="form-control" id="email" name="email">
</div>
<div class="mb-3">
 <label for="password" class="form-label"> Password</label>
 <input type="text" class="form-control" id="password" name="password">
</div>

<button class="btn btn-primary" name="sumbit"type="sumbit"><i data-lucide="chevron-right"></i>Thêm</button>
           </form>
    