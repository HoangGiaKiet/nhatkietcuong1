<?php
   include_once "../dbconnect.php";
   if (!isset($_GET['id'])) {
    header('location:index.php');
   }
   $id= $_GET['id'];// lấy id của danh mục sản phẩm 
   // chuẩn bị câu truy vấn 
   $querysql= "DELETE FROM categories where id= $id";
// thực thi câu truy vấn
   $result =mysqli_query($con,$querysql);

   if($result){
    header('location:index.php');
   }else{
    die(mysqli_close($con));                                                                    

   }
?>
