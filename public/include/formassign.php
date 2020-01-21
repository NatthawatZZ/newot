<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper_1_14_3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="Stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <title>การกำหนดสิทธิ์การใช้งาน</title>
    <link rel="Stylesheet" href="css/per.css">
    <style>
    </style>
</head>

<body>
<img src="img/010203-01-01.jpg" width="100%">
    <?PHP
    include("linkbs.php");
    ?>
    <div id="wrapper">
        <?php
        include("sidebar.php");
        ?>
        <div class="container-fluid mt-5">
            <div class="containform mx-5">
                <center>
                    <h3>การกำหนดสิทธิ์การใช้งาน</h3>
                    <div class="col-2"></div>
                    <div class="col-8">
                        <fieldset>

                            <div class="form-group">
                                <label for="exampleInputID">รหัสพนักงาน</label>
                                <input type="text" class="form-control" id="psn_id" placeholder="รหัสพนักงาน">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputID">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="#" placeholder="รหัสผ่าน">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputE-mail">ผู้ใช้งาน</label>
                                <input type="text" class="form-control" id="mb_name" placeholder="ผู้ใช้งาน">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPhone">ตำแหน่ง</label>
                                <input type="text" class="form-control" id="pst_id" placeholder="ตำแหน่ง">
                            </div>

                            <div class="form-group">
                                <label for="exampleInpuDepartment">กลุ่มผู้ใช้งาน</label>
                                <select class="form-control" id="ug_id">
                                    <option value="0">กลุ่มผู้ใช้งาน</option>
                                    <option value="1">สมาชิกทั่วไป</option>
                                    <option value="2">เจ้าหน้าที่</option>
                                    <option value="3">ผู้ดูแลระบบ</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <center>
                                    <button type="submit" class="btn btn-success">บันทึก</button>
                                </center>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-2">
                    <div class="col-4">
  <img src="img/otsd.png" class="img1" width="200" height="200">
</div>
                    </div>

                </center>
            </div>
        </div>
</body>
</html>