@extends('layouts.signup')

@section('content')

<!-- <div id="body1"> -->

<div class="container-fluid ">

  <div class="row">
  <div class="col-2">

  </div>
  <div class="col-8">
<form action="#" method="get" name="form"><br><br>
  <h1>ลงทะเบียน</h1>
<fieldset>
  <legend>กรอกข้อมูล</legend>
  <div class="form-group">
    <label for="exampleInputID">รหัสพนักงาน<b >*</b></label>
    <input type="text" class="form-control" id="psn_id" placeholder="รหัสพนักงาน">
  </div>

  <div class="form-group">
    <label for="exampleInputID">รหัสผ่าน<b >*</b></label>
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
    <label for="exampleInputName">ชื่อ - นามสกุล<b >*</b></label>
    <input type="text" class="form-control" id="mb_name" placeholder="ชื่อ - นามสกุล">
  </div>
  </div>

  <div class="form-row">
    <div class="col-6">
    <label for="exampleInputIDCARD">วัน/เดือน/ปี เกิด<b >*</b></label>
    <input type="date" class="form-control" id="mb" placeholder="วัน/เดือน/ปี เกิด">
  </div>

  <div class="col-6">
    <label for="exampleInputIDCARD">อายุ</label>
    <input type="text" class="form-control" id="mb." placeholder="อายุ">
  </div>
  </div>

  <div class="form-group">
    <label for="exampleInputIDCARD">หมายเลขบัตรประชาชน<b >*</b></label>
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
    <label for="exampleInputE-mail">อีเมลล์<b >*</b></label>
    <input type="text" class="form-control" id="mb_email" placeholder="อีเมลล์">
  </div>

  <div class="form-group">
    <label for="exampleInputPhone">หมายเลขโทรศัพท์<b >*</b></label>
    <input type="text" class="form-control" id="mb_mobile" placeholder="หมายเลขโทรศัพท์">
  </div>
  <div class="form-group">
  <center>
    <button type="submit" class="btn btn-danger">ยกเลิก</button> &nbsp;&nbsp;&nbsp;
    <button type="submit" class="btn btn-primary">ลงทะเบียน</button></center>
  </div>
</fieldset>
</form>
</div>

<div class="col-4">
<img src="/include/img/regis.png" class="img1" width="175" height="300">
</div>
</div>
</div>
<!-- </div> -->


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
