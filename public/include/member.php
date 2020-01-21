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
    <title>สมาชิก</title>
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
                    <h3>สมาชิก</h3>
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

                            <div class="form-row">
                                <div class="col-3">
                                    <label for="exampleInputtitle">คำนำหน้า</label>
                                    <select class="form-control" id="mb_title">
                                        <option value="1">นาย</option>
                                        <option value="2">นาง</option>
                                        <option value="3">นางสาว</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="exampleInputName">ชื่อ - นามสกุล</label>
                                    <input type="text" class="form-control" id="mb_name" placeholder="ชื่อ - นามสกุล">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-6">
                                    <label for="exampleInputIDCARD">วัน/เดือน/ปี เกิด</label>
                                    <input type="date" class="form-control" id="mb" placeholder="วัน/เดือน/ปี เกิด">
                                </div>

                                <div class="col-6">
                                    <label for="exampleInputIDCARD">อายุ</label>
                                    <input type="text" class="form-control" id="mb." placeholder="อายุ">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputIDCARD">หมายเลขบัตรประชาชน</label>
                                <input type="password" class="form-control" id="mb_idcard" placeholder="หมายเลขบัตรประชาชน">
                            </div>
                            <div class="form-group">
                                <label for="exampleInpuDepartment">ตำแหน่งงาน</label>
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
                                <label for="exampleInputE-mail">อีเมลล์</label>
                                <input type="text" class="form-control" id="mb_email" placeholder="อีเมลล์">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPhone">หมายเลขโทรศัพท์</label>
                                <input type="text" class="form-control" id="mb_mobile" placeholder="หมายเลขโทรศัพท์">
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