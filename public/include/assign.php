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
    <title>กำหนดสิทธิ์</title>
    <link rel="Stylesheet" href="css/a.css">
    <link rel="Stylesheet" href="css/search.css">
    <style>
        body,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        a {
            font-family: 'kanit';
        }

        #customers {
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: rgb(12, 117, 150);
            color: white;
        }
        i.fas.fa-trash-alt{
            color: #CD0000;
        }
        i.fas.fa-edit{
            color:#00688B;
        }
        i.far.fa-eye{
            color: #228B22;
        }
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
                    <div class="wrap">
                        <div class="search">
                            <h6>ชื่อ : </h6>&nbsp;<input type="text" class="searchTerm" placeholder="ค้นหา">
                            <button type="submit" class="searchButton">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div><br><br>
                    <table id="customers">
                        <tr>

                            <th>
                                ลำดับ
                            </th>
                            <th>
                                รหัสพนักงาน
                            </th>
                            <th>
                                ชื่อพนักงาน
                            </th>
                            <th>
                                กลุ่มผู้ใช้งาน
                            </th>
                            <th>
                                จัดการ
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p>1</p>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <center>
                                    <i class="far fa-eye"></i> &nbsp; &nbsp;
                                    <i class="fas fa-edit"></i> &nbsp; &nbsp;
                                    <i class="fas fa-trash-alt"></i>

                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>2</p>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                            <center>
                                <i class="far fa-eye" ></i> &nbsp; &nbsp; 
                                <i class="fas fa-edit"></i> &nbsp;  &nbsp; 
                                <i class="fas fa-trash-alt"></i>
                            
                            </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
</body>

</html>