
 <?php 
    include_once "../funcitions.php";
    include_once("../dbconnect.php");
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
      $action=(isset($_GET['action']))? $_GET['action']:'add';
      $quantity=(isset($_GET['quantity']))?$_GET['quantity']:1;
      if($quantity<=0){
        $quantity=1;
      }
//echo $action; in ra update
//echo "<br>";
//echo $id;    
// ktr id có tồn tại   hay kh
//  session_destroy();

      
        global $con; 
       $queryCart= mysqli_query($con,"SELECT * FROM products WHERE id=$id");
          if($queryCart){
        $product=mysqli_fetch_assoc($queryCart);
             }
             //var_dump ($product);
             $item =[
            'id'=>$product['id'],
             'name'=>$product['name'],
             'image'=>$product['image'],
             'price'=>$product['price'],
             'quantity'=>$quantity
        ];
              
            if($action=='add'){ // nếu trường hợp $action=='add' thì thêm như dưới
            if(isset($_SESSION['cart'][$id])){ // mãng nhiều chiều cứ mỗi cái id thì hắn sẽ tạo ra những phần tử khác
        
              $_SESSION['cart'][$id]['quantity'] +=$quantity; // nếu trường hợp có sp này r thì hàm[quantity] sl nhảy
            }
            else{
                $_SESSION['cart'][$id]=$item; // nếu chưa có sp thì lưu như bth
                
            }
         }

        // if($action =='update'){
        //   $_SESSION['cart'][$id]['quantity']=$quantity; // cập nhật    
        //       }

          // if($action='delete'){
          //  unset($_SESSION['cart'][$id]);// xóa
          // } // unset được sử dụng để xóa một hoặc nhiều biến hoặc mảng đã được khai báo.
  
 
          header('location:viewcarr.php');
      echo "<pree>";
     print_r($_SESSION['cart']);
    
?>
<!DOCTYPE html>



<script src="./public/js/cart.js"></script>

</html>