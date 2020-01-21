<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("linkbs.php"); ?>
  <link rel="stylesheet" href="css/login.css">
  <title>เข้าสู่ระบบ</title>
</head>

<body id="bg">
<img src="img/0102-01-01-01.jpg" style="width: 100%;">
  
  <br>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
      <br>
      </div>
    </div>



    <div class="row" id="btn">
      <div class="col-md-4">
      </div>

      <!-- <div class="col-md-1">
      </div> -->
      <div class="col-md-4">
        <div class="card" style="width: 30rem;">
          <img class="card-img-top" src="img/Untitled-2-01.jpg" alt="Card image cap">
          <div class="card-body">
            <h1 style="color:#034791">เข้าสู่ระบบ</h1>


            <form action="#" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">รหัสพนักงาน</label>
                <input type="email" class="form-control" id="#" aria-describedby="emailHelp" placeholder="รหัสพนักงาน">

              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">รหัสผ่าน</label>
                <input type="password" class="form-control" id="#" placeholder="รหัสผ่าน"><!-- ยังไม่กำหนดตัวเลขที่จะใส่,ตัวเลขเท่านั้น หรือตัวอักษรด้วย? -->
              </div>


              <button type="submit" class="btn btn-block">เข้าสู่ระบบ</button>
              <p>สมาชิกใหม่?
                <a href="signup.html">ลงทะเบียน</a> <br>
                <!-- คลิกเพื่อสมัคร -->

                <a href="forgetpassword.php">ลืมรหัสผ่าน?</a>
              </p>

            </form>

            <div class="col-md-4">
            </div>

          </div>
        </div>
      </div><!-- ------- end row id login -------- -->
    </div><!-- ------- end class container-fluid -------- -->


</body>

</html>