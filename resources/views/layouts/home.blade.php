<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="/sb-admin/dist/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">
            <!-- <img src="../img/logov2-01.png" alt=""> -->
            &nbsp; &nbsp;<i class="fas fa-hourglass-half"></i> BWS </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" /> -->
                <div class="input-group-append">

                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <!-- <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

              </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i></a>
                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">ออกจากระบบ</a>
                </div> -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">ข้อมูลส่วนตัว</a>
                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('ออกจากระบบ') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          @endguest
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="{{route('home')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i> หน้าแรก
                            </div>
                        </a>
                        <a class="nav-link" href="{{route('ot')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-hourglass-half"></i> ค่า OT
                            </div>
                        </a>

                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i> ค่าเดินทาง
                            </div>
                        </a>

                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-paste"></i>
                            </div>
                            รายงาน
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i></div>
                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.html">
                                    รายงานค่า OT</a>
                                <a class="nav-link" href="layout-static.html">
                                    รายงานค่าเดินทาง</a>
                                <a class="nav-link" href="layout-sidenav-light.html">รายงานประจำเดือน</a>
                            </nav>
                        </div>


                    </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>
                <div class="container-fluid ">
                    <!-- <h1 class="mt-4">Dashboard</h1> -->
                    @yield('content')
                </div>
            </main>

        </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="/sb-admin/dist/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/sb-admin/dist/assets/demo/chart-area-demo.js"></script>
    <script src="/sb-admin/dist/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="/sb-admin/dist/assets/demo/datatables-demo.js"></script>
    <script src="/sb-admin/dist/assets/demo/chart-area-demo.js"></script>
    <script src="/sb-admin/dist/assets/demo/chart-bar-demo.js"></script>
    <script>
        $("input[name='radio1']").change(function () {
            if ($(".commisdetail input").is(":checked",true)) {
                $('.hidetext').show();
            }else{
                $('.hidetext').hide();
            }
        });
    </script>
</body>
<script>
	$(function(){
		$('#plus1').hide();
		$('#plus').click(function(){
			$('#plus1').toggle(100);
            $('#plus').hide();
		});
	});
</script>
<script>
		$('#plus3').hide();
		$("#plus2").click(function(){
  			$("#plus3").show();
              $('#plus2').hide();
              $('#plus02').hide();
});

</script>
<script>
		$('#plus5').hide();
		$("#plus4").click(function(){
  			$("#plus5").show();
              $('#plus4').hide();
              $('#plus04').hide();
});

</script>
<script>
 $("#plus02").click(function(){
    $("#plus1").hide();
    $('#plus').show();
  });
</script>
<script>
 $("#plus04").click(function(){
    $("#plus3").hide();
    $('#plus2').show();
    $('#plus02').show();
  });
</script>
<script>
 $("#plus06").click(function(){
    $("#plus5").hide();
    $('#plus4').show();
    $('#plus04').show();
  });
</script>

</html>
