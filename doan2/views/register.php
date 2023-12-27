<?php 
include_once("../dbconnect.php");
include_once("../funcitions.php");
 $err=[];
 if(isset($_POST['usersname'])){
    $usersname=$_POST['usersname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $rpassword=$_POST['rpassword'];
    if(empty($usersname)){
        $err['usersname']='Bạn chưa nhập tên';// gán cho lỗi của của email vào tròn err này     
    }
    if(empty($email)){
        $err['email']='Bạn chưa nhập email';// gán cho lỗi của của email vào tròn err này     
    }
    if(empty($password)){
        $err['password']='Bạn chưa nhập mật khẩu';// gán cho lỗi của của email vào tròn err này     
    }
    if(($password != $rpassword)){
        $err['rpassword']='Nhập lại mật khẩu không đúng ';// gán cho lỗi của của email vào tròn err này     
    }
    if(empty($err)){
      //      $pass=password_hash($password,PASSWORD_DEFAULT);// mã hóa password
        //var_dump($pass);
        //die();
        $query="INSERT INTO users(usersname,email,password) VALUE(' $usersname','$email','$password')";
        $result=mysqli_query($con,$query);
        if($result){
            header('location:login.php');
        }
    }
   // var_dump(empty($err));
    //die();

 }
?>
<style>
    .has-error{
        color: red;
    }
</style>
<?php include_once("../inclus/header.php") ?>
<h1 class="fs-2 text-warning">Đăng kí  </h1>
     <form action="" method="post">
 <div class="mb-3">
  <label for="usersname" class="form-label"> Tên người dùng </label>
  <input type="text" class="form-control" id="usersname" name="usersname">
  <div class="has-error">
       <span><?php echo(isset($err['usersname']))?$err['usersname']:''?></span>
  </div>
</div>
<div class="mb-3">
 <label for="" class="form-label">Email</label>
 <input type="text" class="form-control" id="" name="email">
 <div class="has-error">
       <span><?php echo(isset($err['email']))?$err['email']:''?></span>
  </div>
</div>

<div class="mb-3">
 <label for="" class="form-label">Mật khẩu </label>
 <input type="password" class="form-control" id="" name="password">
 <div class="has-error">
       <span><?php echo(isset($err['password']))?$err['password']:''?></span>
  </div>
</div>

<div class="mb-3">
 <label for=""> Nhập lại mật khẩu </label>
 <input type="password" class="form-control" id="" name="rpassword">
 <div class="has-error">
       <span><?php echo(isset($err['rpassword']))?$err['rpassword']:''?></span>
  </div>
</div>

<button class="btn btn-primary" name="sumbit"type="sumbit"><i data-lucide="chevron-right"></i>Submit</button>
           </form>