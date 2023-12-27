<?php
   include_once "../dbconnect.php";
  // if(isset($_POST['sumbit'])){
       if(isset($_POST['sumbit'])){
        $name=$_POST['name'];
        $description=$_POST['description'];
        // chuẩn bị câu truy vấn 
            $queryInsert="INSERT INTO categories(name, description) VALUE('$name','$description')";
            $result=mysqli_query($con,$queryInsert);
            header("Location:index.php");
       }
   
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1 class="fs-2 text-warning">Trang thêm  danh mục sản phẩm</h1>
                <form action="" method="post">
                <div class="mb-3">
  <label for="name" class="form-label">Tên</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục của sản phẩm ">
</div>
<div class="mb-3">
  <label for="description"class="form-label">Mô tả </label>
  <textarea class="form-control" id="description"name="description" rows="5"></textarea>
</div>
<button class="btn btn-primary" name="sumbit"type="sumbit"><i data-lucide="chevron-right"></i>Thêm</button>
           </form>
            </div>
        </div>
    </div>
    
    <script src="https:///unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>