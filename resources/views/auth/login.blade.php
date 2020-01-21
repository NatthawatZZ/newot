@extends('layouts.login')

@section('content')
<nav class="navbar navbar-light bg-light shadow">
    <a class="navbar-brand " href="#">
        <img src="sb-admin/img/logov2-02-01.png" width="100%" height="100%" class="d-inline-block align-top" alt="">
    </a>
</nav>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <img src="sb-admin/img/login-01-1-01.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                              <form method="POST" action="{{ route('login') }}">
                                  @csrf
                                    <h3 class="text-center font-weight-light"> <b> เข้าสู่ระบบ</b></h3>
                                    <div class="form-group"><label class="small mb-1"
                                            for="inputEmailAddress">รหัสพนักงาน</label>
                                    <input id="email" type="email" class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="รหัสพนักงาน">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                    <div class="form-group"><label class="small mb-1"
                                            for="inputPassword">รหัสผ่าน</label>
                                            <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="****">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block" >เข้าสู่ระบบ</button>
                                    <div
                                        class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="{{route('register')}}">ลงทะเบียน</a>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <!-- <a class="small" href="password.html">ลืมรหัสผ่าน?</a> -->
                                            @if (Route::has('password.request'))
                                                <a class="small" href="{{ route('password.request') }}">
                                                    {{ __('ลืมรหัสผ่าน') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form><br>
                            </div>
                            <!-- <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">ลงทะเบียน</a></div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="sb-admin/dist/js/scripts.js"></script>


@endsection
<!-- <div class="container-fluid">
  <nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top">
    <br><br><left><a href="#"><img src="include/img/logo1.png"  height="60"></a></left>

    <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="my-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><br>
          <h5>ระบบขอเบิกค่า OT และ ค่าเดินทาง</h5>
        </li>

      </ul>
    </div>
  </nav>
</div>
<br>
<br>

<div class="contain">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <div class="card" id="logincontain">
        <img class="card-img-top" src="include/img/Untitled-2-01.jpg" alt="Card image cap">

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
              @csrf
          <h1 style="color:#034791" class="text-center">เข้าสู่ระบบ</h1>
          <form action="#" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">รหัสพนักงาน</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="รหัสพนักงาน">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
            <div class="form-group">
              <label for="password" >{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="รหัสผ่าน">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
            <button type="submit" class="btn btn-block">
                {{ __('เข้าสู่ระบบ') }}
            </button>

            <p>สมาชิกใหม่?
                <a href="{{ route('register') }}">ลงทะเบียน</a><br>
            คลิกเพื่อสมัคร -->
              <!-- <a href="#">ลืมรหัสผ่าน?</a> -->


            <!-- </p>
          </form>
        </div>
      </div>
    </div>
  <div class="col-md-4"></div>
  </div>
</div> -->
