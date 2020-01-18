<?php 
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel = "icon" href ="img/icons8-shopping-cart-64.png" type = "image/x-icon"> 

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    
    

    <title>ห้องสมุด</title>
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

    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/book1.jpg" alt="First slide" width="1280" height="760">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/book2.jpg" alt="Second slide" width="1280" height="760">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/book3.jpg" alt="Third slide" width="1280" height="760">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">ย้อนกลับ</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">ถัดไป</span>
        </a>
    </div>
    <!-- End Carousel -->

    <!-- Jumbortron -->
    <div class="jumbotron">
        <div class="container text-center">
        <div class="album py-5 bg-light">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/product/book1.jpg" alt="Card image cap" width="260" height="260">
                <div class="card-body">
                  <p class="card-text">รายละเอียดหนังสือ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-success">ดู</button>
                      <button type="button" class="btn btn-sm btn-danger">ยืม</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/product/book2.jpg" alt="Card image cap" width="260" height="260">
                <div class="card-body">
                  <p class="card-text">รายละเอียดหนังสือ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-success">ดู</button>
                      <button type="button" class="btn btn-sm btn-danger">ยืม</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/product/book3.jpg" alt="Card image cap" width="260" height="260">
                <div class="card-body">
                  <p class="card-text">รายละเอียดหนังสือ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-success">ดู</button>
                      <button type="button" class="btn btn-sm btn-danger">ยืม</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/product/book4.jpg" alt="Card image cap" width="260" height="260">
                <div class="card-body">
                  <p class="card-text">รายละเอียดหนังสือ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-success">ดู</button>
                      <button type="button" class="btn btn-sm btn-danger">ยืม</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/product/book5.jpg" alt="Card image cap" width="260" height="260">
                <div class="card-body">
                  <p class="card-text">รายละเอียดหนังสือ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-success">ดู</button>
                      <button type="button" class="btn btn-sm btn-danger">ยืม</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>  
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/product/book6.jpg" alt="Card image cap" width="260" height="260">
                <div class="card-body">
                  <p class="card-text">รายละเอียดหนังสือ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-success">ดู</button>
                      <button type="button" class="btn btn-sm btn-danger">ยืม</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <br>

        <div class="media border p-3">
            <img src="img/user1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:100px;height:100px;">
            <div class="media-body">
            <h4>เขียนโดย 。ชองมุนจอง <small><i>Posted on Jan 19, 2020</i></small></h4>
            <p>เล่ามุมมองของคนในสังคมผ่านบริบทสังคมเกาหลีแบบอ่านสบาย ทำให้เข้าใจคนอื่นแล้วก็ยอมรับตัวเองไปพร้อมกัน</p>
            <p>เหมาะกับตอนต้องการเพิ่ม self-esteem เป็นหนังสือ healing ที่ดี ยิ้มรับคนไม่ดีที่ผ่านเข้ามาในชีวิต</p>
           <hr>
            <div class="media p-3">
                <img src="img/user1.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:85px;height:100px;">
                <div class="media-body">
                <h4>The Neverending Story <small><i>Posted on Jan 20 2020</i></small></h4>
                <p>พ็อกเก็ตบุ๊คเล่มแรกในชีวิตของ เป๊ก ผลิตโชค บอกเล่าเรื่องราวในชีวิตผ่านบทเพลงทั้ง 7 พร้อมภาพสวยงามจุใจ</p>
                <p>เคยอ่านเล่มนี้เมื่อนานมาแล้ว พระเอกเป็นหัวขโมยที่ค่าจ้างแพงมากกแต่การันตีผลงาน 100%</p>
            <hr>
                <div class="media  p-3">
                <img src="img/user1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:75px;height:100px;">
                <div class="media-body">
                <h4>เขียนโดย 。ชองมุนจอง <small><i>Posted on Jan 19, 2020</i></small></h4>
                <p>เล่ามุมมองของคนในสังคมผ่านบริบทสังคมเกาหลีแบบอ่านสบาย ทำให้เข้าใจคนอื่นแล้วก็ยอมรับตัวเองไปพร้อมกัน</p>
                <p>เหมาะกับตอนต้องการเพิ่ม self-esteem เป็นหนังสือ healing ที่ดี ยิ้มรับคนไม่ดีที่ผ่านเข้ามาในชีวิต</p>
            </div>
            </div>  
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    <!-- End jumbortorn -->

<br>
<br>
<br>
<br>
<br>


    <!-- Start Footer -->
    <footer id="sticky-footer" class="py-4 bg-light text-dark fixed-bottom">
        <div class="container text-center">
        <small>Copyright &copy; Libraly WebSite@</small>
        </div>
    </footer>
    <!-- End Footer -->

</body>

  
  <script src="js/jquery-3.4.1.js"></script>
  <script src="js/bootstrap.min.js"></script>

</html>