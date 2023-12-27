<?php
include_once "../dbconnect.php";
include_once "../funcitions.php";
$products= showAllProducts();
// 2 Chuẩn bị câu truy vấn $query

// 3 Thực thi câu truy vấn sql để lấy về dữ liệu 
?>

      <?php include_once("../inclus/header.php") ?>
                <h1 class="fs-2 text-warning">Danh sách người dùng </h1>
                <a href="./create.php" class="btn btn-primary"><i data-lucide="plus"></i>Thêm </a>
                <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>   
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th> Giá</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật </th>
                        <th>Xử lí</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- b5 thể hiện dữ liệu <trên adimin> ra màn hình -->
                    <?php foreach($products as $product){ ?>
                    <tr>
                        <td><?php echo $product['index']?></td>
                        <td><img src="<?php echo $product['image']?>"style="max-width:80px;max-height:80px;"></td>
                        <td><?php echo $product['name']?></td>
                        <td><?php echo $product['description']?></td>
                        <td><?php echo $product['price']?></td>
                        <td><?php echo $product['created_at']?></td>
                        <td><?php echo $product['updated_at']?></td>
                        <td >
<!-- thẻ a này nó sẽ cho một cái id để khi mình sửa thì nó sẽ nhận tới cái id ban đầu (cụ thể là khi bấm vô nút xóa thì hắn sẽ hiển thị cái mình muốn sửa ra) -->
                        <a href="./edit.php?id=<?php echo $product ['id']?>" class="btn btn-primary"><i data-lucide="pencil"></i></a>
                         <a href="./delete.php?id=<?php echo $product ['id']?>" class="btn btn-danger"><i data-lucide="trash"></i></a>
                        </td>   
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <?php include_once("../inclus/footer.php") ?>
