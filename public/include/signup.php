<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/signup.css">
  <title>ลงทะเบียนผู้ใช้งาน</title>
</head>
<body><br><br>
  <center><img src="image/logo1.png" width="270" height="78"></center>
  <div class="container-fluid">
    <div class="row" id="signup">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <h1> ลงทะเบียนผู้ใช้งาน </h1>
      </div>
      <div class="col-md-4">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <br>
<!-- form กรอกข้อมูลสำหรับลงทะเบียนผู้ใช้งาน เพื่อเชื่อมกับ php -->
        <form action="#" method="POST">
          <div class="form-group">
            <!-- <label for="exampleInputID">ID</label> -->
            <input type="text" class="form-control" id="psn_id" placeholder="รหัสพนักงาน">
          </div>

          <div class="form-row">
            <div class="col-4">
            <!-- <label for="exampleInputtitle">Title</label> -->
            <select class="form-control" id="mb_title">
                  <option value="1">นาย</option>
                  <option value="2">นาง</option>
                  <option value="3">นางสาว</option>
              </select>
            </div>
            <div class="col">
            <!-- <label for="exampleInputName">Name</label> -->
            <input type="text" class="form-control" id="mb_name" placeholder="ชื่อ-นามสกุล">
          </div>
          </div>

          <div class="form-group">
            <!-- <label for="exampleInputIDCARD">ID Card</label> -->
            <input type="password" class="form-control" id="mb_idcard" placeholder="หมายเลขบัตรประชาชน">
          </div>

         

          <div class="form-group">
            <!-- <label for="exampleInpuDepartment">Department</label> -->
            <select class="form-control" id="pst_id">
              <option value="0">ตำแหน่งงาน</option>
              <option value="1">Event Marketing Director</option>
              <option value="2">Creative Event Marketing Manage</option>
              <option value="3">Digital PR Manager</option>
              <option value="4">Human Resources Manager</option>
              <option value="5">Accounting</option>
              <option value="6">Digital PR & Event Marketing</option>
              <option value="7">Creative and Graphic Designer</option>
              <option value="8">Web and Graphic Designer</option>
              <option value="9">Systems Analyst</option>
              <option value="10">Programmer</option>
              <option value="11">Web Developer</option>
              <option value="12">Messenger</option>
          </select>
          </div>

          <div class="form-group">
            <!-- <label for="exampleInputE-mail">E-mail</label> -->
            <input type="text" class="form-control" id="mb_email" placeholder="อีเมลล์">
          </div>

          <div class="form-group">
            <!-- <label for="exampleInputPhone">Phone Number</label> -->
            <input type="text" class="form-control" id="mb_mobile" placeholder="หมายเลขโทรศัพท์">
          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-primary">สมัคร</button>
          </div>
        </form>
</div>
     
   
      <div class="col-md-4">
      </div>
    </div><!-- ------- end row Sign up -------- -->
  
  </div><!-- ------- end class container-fluid -------- -->


</body>
</html>