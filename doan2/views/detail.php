<?php
 include_once("../dbconnect.php");
 include_once("../funcitions.php");
 if(!isset( $_GET['id'])){
    header ('Location:index.php'); // dùng để khi nếu mà xóa id thì hắn sẽ điều hướng về lại trang home 
 }
 //$id= $_GET['id'];// lấy id của trang index
 $id=$_GET['id']; 
$product = getProduct($id);
//var_dump($product);

?>
<!DOCTYPE html>
<html lang="vi" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nền tảng - Kiến thức cơ bản về WEB | Bảng tin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../assets/css/product-detail.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>


    <!-- content -->
    <section class="py-5">
        <div class="container" id="product-detail">
            <!-- details  -->
            <div class="row gx-5">
                <aside class="col-lg-6">

                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                     <img src="<?php echo "/".$domain_name.$product['image']?>" alt=" "> 
                    </div>
                   
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                        <?php echo $product['price']?>
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">
                    
                      </span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <span class="h5"></span>

                        </div>

                        <p>
                            <?php echo $product['description'] ?>
                        </p>

                        <div class="row">
                            <dt class="col-3">Vận Chuyển</dt>
                            <dd class="col-9">Nhanh</dd>

                            <dt class="col-3">Màu Sắc</dt>
                            <dd class="col-9">Đỏ</dd>

                            <dt class="col-3">Thương Hiệu</dt>
                            <dd class="col-9">Gucci</dd>


                        </div>

                        <hr />
                        <form method="GET" action="cart.php">
                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                        <option>Size M</option>
                        <option>Size L</option>
                        <option>Size XL/option>
                      </select>
                            </div>
                           <div class="col-md-4 col-6 mb-3">
                            <div class="input-group mb-3" style="width: 170px;">
                            <input type="number" name="quantity"value="1" style="margin-top:35px;">
                            <input type="hidden" name="id"value="<?php echo $product ['id']?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Mua</button>
                        </form>
            
                    </div>
                </main>
               
            </div>
        </div>
    </section>
    <!-- content -->

    <script src="./public/js/detail.js"></script>

</body>

</html>