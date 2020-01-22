<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" type="text/css" media="screen" href="sb-admin/dist/js/jquery-ui.css" />
    <link href="sb-admin/dist/css/styles.css" rel="stylesheet" />

        <script src="include/js/jquery-3.3.1.min.js"></script>
    <script src="sb-admin/dist/js/jquery.js"></script>
    <script src="sb-admin/dist/js/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
<script language="javascript">
        function calAge(o){
             var tmp = o.value.split("-");
             var current = new Date();
             var current_year = current.getFullYear();
             document.getElementById("mb_age").value = current_year - tmp[0];
        }</script>

</head>
<body class="bg-primary" >
  @yield('content')
</body>

</html>
