@extends('layouts.password')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 55px;">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <br>
                <div class="card-header"><h3 class="text-center font-weight-light my-4">รหัสผ่านใหม่</h3></div>
                <div class="card-body">
                    <!-- <div class="small mb-3 text-muted">Enter your email address and we will send you a link to reset your password.</div> -->
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group ">

                          <label class="small mb-1" for="inputEmailAddress">อีเมลล์</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group"><label class="small mb-1" for="password">รหัสผ่านใหม่</label>
                            <input id="password" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password"  placeholder="รหัสผ่านใหม่" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">ยืนยันรหัสผ่าน</label>
                                <input id="password-confirm" type="password" class="form-control py-4" name="password_confirmation" placeholder="************" required autocomplete="new-password">
                        </div>
                        <!-- <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="login.html">กลับ</a> -->

                            <br>
                          <center><button type="submit" class="btn btn-primary">ยืนยัน</button></center>
                          <br>
                    </form>

                </div>
                <!-- <div class="card-footer text-center">
                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
