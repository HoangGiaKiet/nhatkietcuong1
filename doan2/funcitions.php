<?php
$domain_name= explode('/',$_SERVER ['REQUEST_URI'])[1];

 function showAllUsers(){
 // để cho nó hiểu biến $con này đang nằm ở ngoài và khi mình cần, thì global nó vào mới thưc thi đc
 global $con;
// 2 Chuẩn bị câu truy vấn $query
$query="SELECT * FROM users";
// 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
$result= mysqli_query($con,$query);
$users= [];
if ($result->num_rows>0){
    $rowNum=1;
    while( $row=$result->fetch_assoc()){
       $users[]=array(
          "index"=>$rowNum++,
          "id"=>$row['id'],
          "usersname"=>$row['usersname'],
          "email"=>$row['email'],
          "password"=>$row['password'],// tất cả cái này đều show ra màn hình cho người dùng xem
          "created_at"=>$row['created_at'],  
          "updated_at"=>$row['updated_at'],
       );   
    }
    
}
return $users;
}
//showAllUsers();
//    var_dump($users);
//  }
 function createUser(){
      global $con;
    if (isset($_POST['sumbit'])){
        $usersname=$_POST['usersname'];
        $email=$_POST['email'];
        $password=$_POST['password']; 
        $queryInsert="INSERT INTO users (usersname, email,password) VALUE ('$usersname','$email','$password')";
        $result=mysqli_query($con,$queryInsert);
        header("Location:index.php");
      }  
 }
 function editUser(){
    global $con;
    if (!isset($_GET['id'])) {
        header('location:index.php');
   }
     $id=$_GET['id']; // lấy id của danh mục sản phẩm 
    // chuẩn bị câu truy vấn dl
     $queryCat= "SELECT * FROM users where id =$id";// có nghĩa là query cái danh mục sp mà có id này 
     // Thực thi câu truy vấn sql để lấy về dữ liệu ban đầu của record của update
     $result=mysqli_query($con,$queryCat);
     $categoryRow=$result->fetch_assoc();// chứa sp vào trong cái categoryrow này 
     // nếu kh tìm thấy dữ liệu --> thông báo lại 
   
     if (empty($categoryRow)) {
       echo "Giá trị id: $id không tồn tại. Vui lòng kiểm tra lại.";
       header("Location:index.php");
     }
     return $categoryRow;
 }
    
 function showAllProducts(){
        // để cho nó hiểu biến $con này đang nằm ở ngoài và khi mình cần, thì global nó vào mới thưc thi đc
        global $con;
        global $domain_name;
       // 2 Chuẩn bị câu truy vấn $query
       $query="SELECT * FROM products";
       // 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
       $result= mysqli_query($con,$query);
       $products= [];
       if ($result->num_rows>0){
           $rowNum=1;
           while( $row=$result->fetch_assoc()){
              $products[]=array(
                 "index"=>$rowNum++,
                 "id"=> $row['id'],
                 "image"=>'/'.$domain_name.$row['image'],
                 "name"=>$row['name'],
                 "description"=>$row['description'],
                 "price"=>$row['price'],// tất cả cái này đều show ra màn hình cho người dùng xem
                 "created_at"=>$row['created_at'],  
                 "updated_at"=>$row['updated_at'],
              );   
           }
           
       }
       return $products;
       
 }
 function createProducts(){
    global $con;
  if (isset($_POST['sumbit'])){
      $name=$_POST['name'];
      $description=$_POST['description'];
      $price=$_POST['price'];
      $image=uploadImage();
      $queryInsert="INSERT INTO products (name, description,price,image) VALUE('$name','$description','$price','$image')";
      $result=mysqli_query($con,$queryInsert);
      header("Location:index.php");
    }  
}
function uploadImage(){

$target_dir = __DIR__."/storage/";
echo $target_dir;
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
      return "/storage/".basename($_FILES["fileToUpload"] ["name"]);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
function showAllCategories(){
    global $con;
    $query="SELECT * FROM categories";
// 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
$result= mysqli_query($con,$query);

$categories= array();
if ($result->num_rows>0){
    
    $rowNum=1;
    while( $row=$result->fetch_assoc()){
       $categories[]=array(
          "index"=>$rowNum++,
          "id"=>$row['id'],
          "name"=>$row['name'],
          "description"=>$row['description'],
          "created_at"=>$row['created_at'],
          "updated_at"=>$row['updated_at']
       );   
    }
   
    
}
   return $categories;
}
  function getProduct($id){
      global $con;

       $queryProducts= "SELECT * FROM products where id=$id ";
       //trả về các hàng có giá trị cột id bằng giá trị của biến $id.
      $result=mysqli_query($con,$queryProducts);
      $product=$result->fetch_assoc();// duyệt tất cả các hàng trên $result và lấy ra 1 cái
    return $product;
  }
  function showUser(){
   $email=$_POST['email'];
   $password=$_POST['password'];
    global $con;
    $query= "SELECT * FROM users where email='$email' and password='$password'";
    $result=mysqli_query($con,$query);
    $row= $result->fetch_assoc();
    if(empty($row)){
      echo" giá trị không tồn tại xin vui lòng nhập lại";
    }
    else{
      $_SESSION['user']=$row;
      header("location:index.php");
    }
  }
 
  
 