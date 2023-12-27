<?php
include_once "../dbconnect.php";
include_once "../funcitions.php";
$products= showAllProducts();
$cart=(isset($_SESSION['cart']))? $_SESSION['cart']:[];
 //echo "<pree>";//
//print_r($cart);  
 //var_dump($cart);
//var_dump($_SESSION['cart']);
// 2 Chuẩn bị câu truy vấn $query

// 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
?>

      <?php include_once("../inclus/header.php") ?>
                <h1 class="fs-2 text-warning">Trang Giỏ hàng  </h1>
                <!-- <a href="./create.php" class="btn btn-primary"><i data-lucide="plus"></i>Thêm </a> -->
                <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>   
                        <th>Tên</th>
                        <th>Số lượng </th>
                        <th> Đơn giá</th>
                         <th>Thành tiền </th>
                    </tr>
                </thead>
                    <!-- b5 thể hiện dữ liệu <trên adimin> ra màn hình -->
                        <!-- 
                     <?php foreach ($cart as $key=>$value){?>
                             <tr>
                         <td></td>
                          <td><img src="<?php echo "/".$domain_name.$value['image']?>" alt="" width="100px"></td>
                          <td><?php echo $value['name']?></td>
                          <td>
                           <form action="cart.php">
                           <input type="hidden" name="action" value="update">
                           <input type="hidden" name="id" value="<?php echo $value ['id']?>">
                          <input type="text" name="quantity" value="<?php echo $value['quantity']?>">   
                          <button type="submit"> Cập nhật</button>
                          </form>
                          </td>
                          <td><?php echo $value['price']?></td>
                          <td><a href="cart.php?id=<?php echo $value['id']?>&action=delete"class ="btn btn-danger">Xóa</a></td>
                          </tr>
                          <?php }?> -->
                         
                 
                 <tbody>
                 <?php $total_price=0;?>
                 <?php foreach ($cart as $key=>$value):$total_price+=($value['price']*$value['quantity']);?>
                 <tr>
                    <td></td>
                    <td><img src="<?php echo "/".$domain_name.$value['image']?>" alt="" width="100px"></td>
                    <td><?php echo $value['name']?></td>
                    <td>
                    <form action="cart.php">
                  <input type="hidden" name="action" value="update">
                  <input type="hidden" name="id" value="<?php echo $value ['id']?>">
                    <input type="text" name="quantity" value="<?php echo $value['quantity']?>">
                    <button type="submit" style="display:plex"> Cập nhật</button>
                    </form>
                    </td>
                    <td><?php echo $value['price']?></td>
                    <td><?php echo $value['price']*$value['quantity']?></td>
                    <td><a href="cart.php?id=<?php echo $value['id']?>&action=delete"class ="btn btn-danger">Xóa</a></td>            
                </tr>
                 <?php endforeach?>
                 <tr>
                    <td>Tổng tiền </td>
                    <td colspan="6  " class="text-center bg-info "><?php echo number_format($total_price)?></td>
                 </tr>
                </tbody>
                </table>
                <?php include_once("../inclus/footer.php") ?>
                 