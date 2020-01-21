@extends('layouts.signup')

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
                    <div class="col-lg-8">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <br>
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4"> <b> ลงทะเบียน</b></h3>
                            </div>
                            <hr>
                            <div class="card-body">
                              <form method="POST" action="{{ route('register') }}">
                                  @csrf
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">รหัสพนักงาน*</label>
                                                <input class="form-control " id="inputFirstName" type="text"
                                                    placeholder="รหัสพนักงาน" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">คำนำหน้า</label>
                                                <select class="form-control " id="exampleFormControlSelect1"
                                                    placeholder="เลือกคำนำหน้า">
                                                    <option>นาย</option>
                                                    <option>นาง</option>
                                                    <option>นางสาว</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">ชื่อ*
                                                </label>
                                                <input class="form-control " id="inputFirstName" type="text"
                                                    placeholder="ชื่อ" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName"> นามสกุล*</label>
                                                <input class="form-control " id="inputFirstName" type="text"
                                                    placeholder="นามสกุล" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1"
                                                    for="inputFirstName">วัน/เดือน/ปีเกิด*</label>
                                                <input type="date" class="form-control " id="date"
                                                    placeholder="วัน/เดือน/ปี เกิด"  onchange="calAge(this);">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">อายุ</label>
                                                <input class="form-control " id="age"  type="text"
                                                   readonly/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">ตำแหน่งงาน*</label>
                                                <select class="form-control  " id="exampleFormControlSelect1"
                                                    placeholder="เลือกคำนำหน้า">
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
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">เบอร์โทรศัพท์</label>
                                                <input class="form-control " id="inputFirstName" type="text"
                                                    placeholder="เบอร์โทรศัพท์" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">อีเมลล์*</label>
                                                <input class="form-control " id="inputFirstName" type="text"
                                                    placeholder="อีเมลล์" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">รหัสผ่าน*</label>
                                                <input class="form-control " id="inputFirstName" type="text"
                                                    placeholder="รหัสผ่าน" />
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg " >ลงทะเบียน</button>
                                    </div>
                                    <br>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="sb-admin/dist/js/scripts.js"></script>
<script src="sb-admin/dist/js/calage.js"></script>



@endsection

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
