@extends('layouts.signup')

@section('content')

@if(count($errors)  > 0)
      <div class="alert alert-danger">
       <ul> @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
      </ul>
       </div>
      @endif
      @if(\Session::has('success'))
      <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div>
@endif

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
                              <form method="POST" action="{{ url('register') }}">
                                    {{ csrf_field() }}
                                    <div class="form-row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">รหัสพนักงาน*</label>
                                                <input class="form-control"  name="psn_id" id="inputFirstName" type="text"
                                                    placeholder="รหัสพนักงาน" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">คำนำหน้า</label>
                                                <select class="form-control " name="mb_title" id="exampleFormControlSelect1"
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
                                                <input class="form-control "  name="mb_fname" id="inputFirstName" type="text"
                                                    placeholder="ชื่อ" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName"> นามสกุล*</label>
                                                <input class="form-control "   name="mb_lname" id="inputFirstName" type="text"
                                                    placeholder="นามสกุล" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label class="small mb-1" for="inputFirstName">เลขประจำตัวประชาชน*</label>
                                              <input class="form-control "  name="mb_idcard" id="inputFirstName" type="text"
                                                  placeholder="เลขประจำตัวประชาชน" />
                                          </div>
                                      </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="small mb-1"
                                                    for="inputFirstName">วัน/เดือน/ปีเกิด*</label>
                                                <input type="date" class="form-control " name="mb_birth" id="date"
                                                    placeholder="วัน/เดือน/ปี เกิด"  onchange="calAge(this);">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">อายุ</label>
                                                <input class="form-control" id="mb_age" name="mb_age"  type="text"
                                                   readonly/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">ตำแหน่งงาน*</label>
                                                <select class="form-control"  name="pst_id" id="exampleFormControlSelect1"
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
                                                <input class="form-control " name="mb_mobile" id="inputFirstName" type="text"
                                                    placeholder="เบอร์โทรศัพท์" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">อีเมลล์*</label>
                                                <input class="form-control "  name="email" id="inputFirstName" type="email"
                                                    placeholder="อีเมลล์" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputFirstName">รหัสผ่าน*</label>
                                                <input class="form-control " name="password" id="inputFirstName" type="password"
                                                    placeholder="รหัสผ่าน" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="password-confirm" class="small mb-1">{{ __('ยืนยันรหัสผ่าน*') }}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="ยืนยันรหัสผ่าน">
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
