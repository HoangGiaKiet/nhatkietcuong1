
<?php
 include_once("../dbconnect.php");
include_once("../funcitions.php");
    if(isset($_POST['submit'])){
        showUser();
       // $querylogin="SELECT *FROM users email='$email',password='$password'";
     
    }
 ?> 
      

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    * {
        margin: 0;
        padding: 0;
        font-family: 'poppins', sans-serif;
    }
    
    footer {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-color: gray;
    }
    
    .form-box {
        position: relative;
        width: 400px;
        height: 450px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .5);
        border-radius: 20px;
        backdrop-filter: blur(15px);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    h2 {
        font-size: 2em;
        color: #fff;
        text-align: center;
    }
    
    .inputbox {
        position: relative;
        margin: 30px 0;
        width: 310px;
        border-bottom: 2px solid #fff;
    }
    
    .inputbox label {
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        color: #fff;
        font-size: 1em;
        pointer-events: none;
        transition: .5s;
    }
    
    input:focus~label,
    input:valid~label {
        top: -5px;
    }
    
    .inputbox input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 1em;
        padding: 0 35px 0 5px;
        color: #fff;
    }
    
    .inputbox ion-icon {
        position: absolute;
        right: 8px;
        color: #fff;
        font-size: 1.2em;
        top: 20px;
    }
    
    .forget {
        margin: -15px 0 15px;
        font-size: .9em;
        color: #fff;
        display: flex;
        justify-content: space-between;
    }
    
    .forget label input {
        margin-right: 3px;
    }
    
    .forget label a {
        color: #fff;
        text-decoration: none;
    }
    
    .forget label a:hover {
        text-decoration: underline;
    }
    
    button {
        width: 100%;
        height: 40px;
        border-radius: 40px;
        background: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
    }
    
    .register {
        font-size: .9em;
        color: #fff;
        text-align: center;
        margin: 25px 0 10px;
    }
    
    .register p a {
        text-decoration: none;
        color: #fff;
        font-weight: 600;
    }
    
    .register p a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <footer >
        <div class="form-box">
            <div class="form-value">
          
                    <h2>Đăng nhập</h2>
                    <form action="" method="post">
                    <div class="inputbox">
                        <input type="text" name="email" id=""required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password" id="" required>
                        <label for="">Mật Khẩu</label>
                    </div>
                    <button class="btn btn-primary" name="submit"type="submit"><i data-lucide="chevron-right"></i>Sumbit</button>
                </form>
            </div>
        </div>
        </footer>            
    </div>
</body>
</html>
