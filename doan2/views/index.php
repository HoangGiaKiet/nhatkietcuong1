  <?php
   include_once "../dbconnect.php";
   include_once "./inclues/header.php";
   include_once "../funcitions.php";
   $products=showAllProducts();
   $categories=showAllCategories();
 $user_id=isset($_SESSION['user_id'])?$_SESSION['user_id']:null;
  //var_dump($user_id);

  // kt xem biến $_SESSION['user_id đã được khởi tạo hay chưa nếu đã đc khởi tạo thì
  // giá trị của $_SESSION['user_id'] sẽ được gán cho biến $user_id. (row là giá trị)
  //Nếu chưa được khởi tạo, biến $user_id sẽ được gán giá trị null
        //var_dump($user_id);
    //$user= $_SESSION['user_id'];
//$user_id=isset($_SESSION['user_id'])?$_SESSION['user_id']:null;
?>
  
  <div class="container">
  <div class="row">

      <div class="col-6 col-xl-10">
          <img src="./public/image/logo.1.jpg" style="width:238px;
          height: 128px;
          margin-inline: -70px;">
      </div>
      <div id="actions" style="
      display: flex;
      margin: -71px 0px 0px 1081px;
      font-size: 20px;">
        <div class="item">
          <a href="login.html">
                <i class="fa-solid fa-user " style= "color: black; padding: 20px;">
               </i> </a>
        </div>
        <div class="item">
            <i class="fa-solid fa-cart-shopping" style="color: black; padding: 20px"></i>
        </div>
</div>
          </p>
      </div>
  </div>
</div>
<!-- end nameshop+login_regitter  -->

<!-- navbar  -->
<nav class="navbar navbar-expand-lg " style="margin-top: -35px;" >
  <div class="container">
      <div class="container-fluid fs-5 text">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="shop.html">Shop</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="product.html">Products</a>
                  </li> 
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="category.html" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          Categories
                      </a>
                      <ul class="dropdown-menu">      
                     <li>
                        <?php foreach ($categories as $cat){?>
                      <a class="dropdown-item" href="<?php echo $cat['id']?>"><?php echo $cat['name']?></a>
                      <?php  }?>
                    </li>
                      </ul>
                  </li>

              </ul>
              <form class="d-flex" role="search" action="search.html">
                  <input name="key" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  <a href="./login.php" class="biad">
                  <!-- <i class='bx bxs-user' style="padding-left: 20px;margin-top: 10px;color:gray;font-size:25px"></i>  -->
                </a>
                <!-- <a href="./cart.php"><i class='bx bxs-cart' style="margin-top:10px;padding-left:10px;color:gray;font-size:25px"></i></a>
                 -->
                 <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="category.html" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false" style="padding-left:20px;margin-top:5px">
                          Tài khoản 
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="dangki.php">Đăng kí </a></li>
                        <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>                     
                        <li><a class="dropdown-item" href="">Đăng xuất</a></li>
                      </ul>
                  </li>
              </form>
          </div>
      </div>
  </div>
</nav>
                            
    <section class="main-home " style="background-image:url(./public/image/banner-3.png); ">
      <div class="main-text ">
         <h5 style="color:black">Winter Collection 2022</h5>
         <h1>New winter <br> Collection</h1>
         <p>There's Nothing like Trend</p>
         <a href=" # "class="main-btn ">Shop Now <i class='bx bx-right-arrow-alt'></i></a>
      </div>
      <div class=" down-arrow ">
           <a href="#trending "class=" down "><i class='bx bx-down-arrow-alt'></i></a>
      </div>
    </section>
    
    <!-- tranding-products-section -->
       <section class=" trending-product " id="trending ">
        <divn class="center-text ">
           <h2>Our Trending <span>Products</span></h2>
        </div>
        <div class="products ">
          <?php foreach ($products as $product){?>
        
                 <div class="row ">
             <a href="./detail.php?id=<?php echo $product['id']?>">  
                <img src=" <?php echo $product['image']?>" alt=" ">
                </a>
              <div class=" product-text ">
                <h5>Sale</h5>
             </div>
             <div class="heart-icon ">
              <i class='bx bx-heart' ></i>
             </div>
               <div class="ratting ">
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>
                <i class='bx bx-star'></i>  
                <i class='bx bxs-star-half'></i>
               </div>
                <div class="price ">
                  <h4><?php echo $product['name'] ?></h4>
                  <p> <?php echo $product ['price']?></p>
                </div>
                <div class="cart">
                    <a href="cart.php?id=<?php echo $product['id']?>"><input type="submit" value="Mua hàng " name="submit" style="color:red;font-size:18px;">
                    </a>
                </div>
              </div>
              
              <?php  }?>
                
              
              </div>
              </section>
              <section class=" trending-product " id="trending ">
        <divn class=" center-text ">
           <h2>Quality <span>t-shirts</span></h2>
        </div>
        <div class="products ">
             <div class="row ">
              <img src="./public/image/3.a1.jpg " alt=" ">
    <div class=" product-text ">
        <h5>New</h5>
    </div>
    <div class="heart-icon ">
        <i class='bx bx-heart'></i>
    </div>
    <div class="ratting ">
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bxs-star-half'></i>
    </div>
    <div class="price ">
        <h4>T-shirts for men and women</h4>
        <p> $99-$129</p>
    </div>
    </div>
    <div class="row ">
        <img src="./public/image/2.a.jpeg " alt=" ">
        <div class=" product-text ">
            <h5>Sale</h5>
        </div>
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p> $150-$170</p>
        </div>
    </div>

    <div class="row ">
        <img src="./public/image/3.a.webp " alt=" ">
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p> $120-$125</p>
        </div>
    </div>

    <div class="row ">
        <img src="./public/image/4.a.jpeg " alt=" ">
        <div class=" product-text ">
            <h5>Hot</h5>
        </div>
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p> $170-$185</p>
        </div>
    </div>

    <div class="row ">
        <img src="./public/image/5.a.webp " alt=" ">
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p> $99-$120</p>
        </div>
    </div>

    <div class="row ">
        <img src="./public/image/6.a.jpeg " alt=" ">
        <div class=" product-text ">
            <h5>Hot</h5>
        </div>
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p>$200-220$</p>
        </div>
    </div>

    <div class="row ">
        <img src="./public/image/7.a.jpeg " alt=" ">
        <div class=" product-text ">
            <h5>Sale</h5>
        </div>
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p>$33-40$</p>
        </div>
    </div>

    <div class="row ">
        <img src="./public/image/8.a.webp " alt=" ">
        <div class=" product-text ">
            <h5>Sale</h5>
        </div>
        <div class="heart-icon ">
            <i class='bx bx-heart'></i>
        </div>
        <div class="ratting ">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bxs-star-half'></i>
        </div>
        <div class="price ">
            <h4>T-shirts for men and women</h4>
            <p> $199-$229</p>
        </div>
    </div>

    </div>

    </section>
    
    <section class=" trending-product " id="trending ">
        <div class="center-textt ">
            <h2>High quality <span>hat</span></h2>
            </div>
            <div class="products ">
                <div class="row ">
                    <img src="./public/image/1.l.jpg " alt=" ">
                    <div class=" product-text ">
                        <h5>New</h5>
                    </div>
                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>High quality men's and women's hats</h4>
                        <p> $55-$60</p>
                    </div>
                </div>
                <div class="row ">
                    <img src="./public/image/2.l.jpg " alt=" ">
                    <div class=" product-text ">
                        <h5>Sale</h5>
                    </div>
                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>High quality men's and women's hats</h4>
                        <p> $50-$70</p>
                    </div>
                </div>

                <div class="row ">
                    <img src="./public/image/3.l.jpg " alt=" ">

                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>High quality men's and women's hats</h4>
                        <p> $120-$125</p>
                    </div>
                </div>

                <div class="row ">
                    <img src="./public/image/4.l.jpg " alt=" ">
                    <div class=" product-text ">
                        <h5>Hot</h5>
                    </div>
                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>High quality men's and women's hats</h4>
                        <p> $170-$185</p>
                    </div>
                </div>

                <div class="row ">
                    <img src="./public/image/5.l.jpg " alt=" ">

                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>T-shirts for men and women</h4>
                        <p> $229-$240</p>
                    </div>
                </div>

                <div class="row ">
                    <img src="./public/image/6.l.jpg " alt=" ">
                    <div class=" product-text ">
                        <h5>Hot</h5>
                    </div>
                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>High quality men's and women's hats</h4>
                        <p>$299-$300</p>
                    </div>
                </div>

                <div class="row ">
                    <img src="./public/image/7.l.jpg " alt=" ">
                    <div class=" product-text ">
                        <h5>Sale</h5>
                    </div>
                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>High quality men's and women's hats</h4>
                        <p>$50-$70</p>
                    </div>
                </div>

                <div class="row ">
                    <img src="./public/image/8.l.jpg " alt=" ">
                    <div class=" product-text ">
                        <h5>Sale</h5>
                    </div>
                    <div class="heart-icon ">
                        <i class='bx bx-heart'></i>
                    </div>
                    <div class="ratting ">
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="price ">
                        <h4>T-shirts for men and women</h4>
                        <p> $99-$199</p>
                    </div>
                </div>

            </div> 

            </section>


            <!-- contacsection -->
            <section class="contact ">
                 <div class="contact-info ">
                  <div class="first-info "> 
                    <img src="./public/image/logo.png " alt=" ">
                    <p>3245 Grant Street Longview,<br> TX united kingdom 756378</p>
                    <p>01601348732</p>
                    <p>saidulahmed3080@gmail.com</p>
                    <div class="social-icon ">
                      <a href="# "><i class='bx bxl-facebook'></i></a>
                      <a href="# "><i class='bx bxl-twitter'></i></a>
                      <a href="# "><i class='bx bxl-instagram' ></i></a>
                      <a href="# "><i class='bx bxl-youtube' ></i></a>
                      <a href="# "><i class='bx bxl-linkedin'></i></a>
                    </div>
                  </div>
                  <div class="secon-info ">
                    <h4>Support</h4>
                    <p>Contac us</p>
                    <p>About page </p>
                    <p>Size Guide</p>
                    <p>Shopping & Restunrs</p>
                    <p>Pricavy</p>
                  </div>
                  <div class="third-info ">
                    <h4>Shop</h4>
                    <p>Men's Shopping </p>
                    <p>Women'S Shopping </p>
                    <p>Kids's Shopping </p>
                    <p>Furniture </p>
                    <p>Discont</p>
                  </div>
                   <div class="fourth-info ">
                    <h4>Company</h4>
                    <p>About</p>
                    <p>Blog</p>
                    <p>Affiliate</p>
                    <p>Login</p>
                   </div>
                   <div class="five ">
                     <h4>Subsribe</h4>
                     <p>Recetive Update,Hot Deals,Discounts Sent Straghit In Your Inbox Daily</p>
                     <p>>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Eum Debitis</p>
                     <p>Recerive Update,Hot Deals,Disconts Sent Straight In your Inbox Daily</p>
                   </div>
                 </div>
            </section>
            <div class="end-text ">
              <p>Copyright @ 2022.All Right Resserved .Designd By Saidul IsLam</p>
            </div>
    <script></script>
    </body>
</html>

</html>