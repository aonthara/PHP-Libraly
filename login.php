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
    
    <title>เข้าสู่ระบบ</title>
</head>
<body>
    
    <!-- Start navbar -->
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
<br>
<br>
<br>

    <!-- Start Form -->
    <div class="container">
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center navbar-light">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">เข้าสู่ระบบ</div>
                            <div class="card-body">
                                <form action="check_login.php" method="POST">
                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">ชื่อผู้ใช้</label>
                                        <div class="col-md-6">
                                            <input type="text" id="username" class="form-control" name="name" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">รหัสผ่าน</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="pass" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> จดจำชื่อผู้ใช้
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success" name="btn_login">
                                            ล็อกอิน
                                        </button>
                                        <a class="btn btn-danger ml-2" href="register.php" role="button">สมัคสมาชิก</a>
                                        <a href="#" class="btn btn-link">
                                            ลืมรหัสผ่าน?
                                        </a>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
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