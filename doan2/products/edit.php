<?php
    include_once "../dbconnect.php";
    include_once "../funcitions.php";
    if (!isset($_GET['id'])) {
      header('location:index.php');
 }
   $id=$_GET['id']; // lấy id của danh mục sản phẩm 
  // chuẩn bị câu truy vấn dl
   $queryCat= "SELECT * FROM products where id =$id";// có nghĩa là query cái danh mục sp mà có id này 
   // Thực thi câu truy vấn sql để lấy về dữ liệu ban đầu của record của update
   $result=mysqli_query($con,$queryCat);
   $productRow=$result->fetch_assoc();// chứa sp vào trong cái productrow này 
   // nếu kh tìm thấy dữ liệu --> thông báo lại 
  
   if (empty($productRow)) {
     echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
     header("Location:index.php");
   }
  ?>
               <?php include_once("../inclus/header.php") ?>
                <h1 class="fs-2 text-warning">Trang chỉnh sửa người dùng </h1>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
  <label for="id" class="form-label">id</label>  
  <input value="<?php echo $productRow['id']?>"readonly type="text" class="form-control" name="id" name="name" id='id'>
</div>
<div class="mb-3">
    <?php if ($productRow['image']):?>
      <img style="max-width:120px" src="<?php echo "/".$domain_name.$productRow['image']?>" alt="">
      <?php endif;?>
      <div>

        <label for="image_upload" class="form-label">Sửa Hình ảnh </label>
        <input type="file"  class="form-control" id="image_upload" name="fileToUpload">
      </div>
</div>
        <div class="mb-3">
  <label for="name" class="form-label">Tên</label>
  <input value="<?php echo $productRow ['name']?>" type="text"  name="name" class="form-control" id="name">
</div>
<div class="mb-3">
  <label for="description"class="form-label">Mô tả </label>
  <textarea class="form-control" id="description"name="description" rows="5"><?php echo $productRow['description']; ?></textarea>
</div>
<div class="mb-3">
  <label for="price"class="form-label"> Giá </label>
  <input value="<?php echo $productRow ['price']?>" type="text"  name="price" class="form-control" id="price">
</div>
<input type="submit" class="btn btn-primary" name="save" value="Lưu">
            </form>
            <?php include_once("../inclus/footer.php") ?>
    <?php
    if(isset($_POST['save'])){
      $name=$_POST['name'];
      $description=$_POST['description'];
      $price=$_POST['price'];
      $updated_at= date('Y-m-d H:i:s');
if(isset($_FILES['fileToUpload']))  {
  $image = uploadImage();
  
  $queryUpdate = "UPDATE products SET image = '$image',name= '$name', description='$description',price='$price', updated_at= '$updated_at' where id='$id'";
} else{
  $queryUpdate = "UPDATE products SET name= '$name', description='$description',price='$price', updated_at= '$updated_at' where id='$id'";
  
}

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
