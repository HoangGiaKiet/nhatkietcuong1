<?php
include_once "../dbconnect.php";
// 2 Chuẩn bị câu truy vấn $query
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>categories</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1 class="fs-2 text-warning">Trang danh mục sản phẩm  </h1>
                <a href="./create.php" class="btn btn-primary"><i data-lucide="plus"></i>Thêm </a>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Mô tả </th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật </th>
                        <th>###</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- b5 thể hiện dữ liệu <trên adimin> ra màn hình -->
                    <?php foreach($categories as $cat){ ?>
                    <tr>
                        <td><?php echo $cat['index']?></td>
                        <td><?php echo $cat['id']?></td>
                        <td><?php echo $cat['name']?></td>
                        <td><?php echo $cat['description']?></td>
                        <td><?php echo $cat['created_at']?></td>
                        <td><?php echo $cat['updated_at']?></td>
                        <td>
<!-- thẻ a này nó sẽ cho một cái id để khi mình sửa thì nó sẽ nhận tới cái id ban đầu (cụ thể là khi bấm vô nút xóa thì hắn sẽ hiển thị cái mình muốn sửa ra) -->
                            <a href="./edit.php?id=<?php echo $cat ['id']?>" class="btn btn-primary"><i data-lucide="pencil"></i></a>
                            <a href="./delete.php?id=<?php echo $cat ['id']?>" class="btn btn-danger"><i data-lucide="trash"></i></a>
                        </td>   
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https:///unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>
</html>