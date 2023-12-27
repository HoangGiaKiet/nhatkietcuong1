<?php
include_once "../dbconnect.php";
include_once "../funcitions.php";
$users = showAllUsers();
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
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Password </th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật </th>
                        <th>###</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- b5 thể hiện dữ liệu <trên adimin> ra màn hình -->
                    <?php foreach($users as $cat){ ?>
                    <tr>
                        <td><?php echo $cat['index']?></td>
                        <td><?php echo $cat['id']?></td>
                        <td><?php echo $cat['usersname']?></td>
                        <td><?php echo $cat['email']?></td>
                        <td><?php echo $cat['password']?></td>
                        <td><?php echo $cat['created_at']?></td>
                        <td><?php echo $cat['updated_at']?></td>
                        <td >
<!-- thẻ a này nó sẽ cho một cái id để khi mình sửa thì nó sẽ nhận tới cái id ban đầu (cụ thể là khi bấm vô nút xóa thì hắn sẽ hiển thị cái mình muốn sửa ra) -->
                            <a href="./edit.php?id=<?php echo $cat ['id']?>" class="btn btn-primary"><i data-lucide="pencil"></i></a>
                            <a href="./delete.php?id=<?php echo $cat ['id']?>" class="btn btn-danger"><i data-lucide="trash"></i></a>
                        </td>   
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <?php include_once("../inclus/footer.php") ?>
