<?php
    include_once "../dbconnect.php";
    if (!isset($_GET['id'])) {
     header('location:index.php');
}
  $id=$_GET['id']; // lấy id của danh mục sản phẩm 
 // chuẩn bị câu truy vấn dl
  $queryCat= "SELECT * FROM categories where id =$id";// có nghĩa là query cái danh mục sp mà có id này 
  // Thực thi câu truy vấn sql để lấy về dữ liệu ban đầu của record của update
  $result=mysqli_query($con,$queryCat);
  $categoryRow=$result->fetch_assoc();// chứa sp vào trong cái categoryrow này 
  // nếu kh tìm thấy dữ liệu --> thông báo lại 

  if (empty($categoryRow)) {
    echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
    header("Location:index.php");
  }
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
                <h1 class="fs-2 text-warning">Trang edit danh mục sản phẩm</h1>
                <form action="" method="post">
                <div class="mb-3">
  <label for="id" class="form-label">id</label>
  <input value="<?php echo $categoryRow['id']?>"readonly type="text" class="form-control" name="id" name="name" id='id'>
</div>
        <div class="mb-3">
  <label for="name" class="form-label">Tên</label>
  <input value="<?php echo $categoryRow ['name']?>" type="text"  name="name" class="form-control" id="name" placeholder="Nhập tên danh mục của sản phẩm ">
</div>
<div class="mb-3">
  <label for="description"class="form-label">Mô tả </label>
  <textarea class="form-control" id="description"name="description" rows="5"><?php echo $categoryRow['description']; ?></textarea>
</div>
<input type="submit" class="btn btn-primary" name="save" value="Lưu">
            </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['save'])){
      $name=$_POST['name'];
      $description=$_POST['description'];
      $updated_at= date('Y-m-d H:i:s');;
  
    $queryUpdate = "UPDATE categories SET name = '$name', description = '$description', updated_at= '$updated_at' WHERE id='$id'";
      if(mysqli_query($con,$queryUpdate)){
        // đóng kết nối
          mysqli_close($con);
          // sau khi cập nhật thì phải điều hướng về trang danh sách 
          header('location:index.php');
      }else{
        echo "error:".$queryInsert."<br>".mysqli_error($con);
      }
  }
    ?>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>