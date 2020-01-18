<?php 

include('include/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel = "icon" href ="img\icons8-shopping-cart-64.png" type = "image/x-icon"> 

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

    <title>สมัครสมาชิก</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand " href="index.php">ห้องสมุด</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link " href="index.php">หน้าแรก</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">หนังสือ</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">ติดต่อ</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['id'])) { ?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ยินดีต้อนรับคุณ: <?php echo $_SESSION['name']; ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">รายการหนังสือ</a>
                  <a class="dropdown-item" href="#">หน้าแดชบอร์ด</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">ล็อกเอ้าน์</a>
                  </div>
              </li>
              <?php } else { ?>
              <li class="nav-item">
                  <a class="nav-link " href="login.php">เข้าสู่ระบบ</a>
              </li>
              <?php } ?>
            </ul>
        </div>
        </div>
    </nav>
    <!-- End navbar -->
<br>
ิ<br>
<br>
<br>    
    <!-- Start Form -->
    <div class="container">
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center navbar-dark">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">สมัครสมาชิก</div>
                        <div class="card-body">
                            <form  action="r_regis.php" method="POST">
                                <div class="form-group">
                                <label for="name">ชื่อผู้ใช้ :</label>
                                <input type="text" class="form-control" placeholder="กรอกชื่อ"  name="name">
                                </div>
                                <div class="form-group">
                                <label for="pwd">รหัสผ่าน :</label>
                                <input type="password" class="form-control" placeholder="กรอกรหัส" name="pass">
                                </div>
                                <div class="form-group">
                                <label for="email">อีเมล :</label>
                                <input type="text" class="form-control" placeholder="กรอกอีเมล" name="mail">
                                </div>
                                <div class="form-group">
                                <label for="tel">เบอร์โทร. :</label>
                                <input type="text" class="form-control" placeholder="กรอกเบอร์" name="tel">
                                </div>
                                <label for="man">เพศ :</label>
                                <select name="sex" class="custom-select">
                                    <option value="Men">ชาย </option>
                                    <option value="Women">หญิง </option>
                                </select>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-success " name="btn_save">ยืนยัน</button>
                            </from>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-- End Form -->
    
    <!-- Footer -->
    <footer id="sticky-footer" class="py-4 bg-dark text-dark fixed-bottom">
    <div class="container text-center">
      <small>Copyright &copy; Libraly WebSite@</small>
    </div>
  </footer>
    <!-- End Footer -->

</body>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>