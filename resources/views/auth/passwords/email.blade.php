@extends('layouts.password')

@section('content')

<div class="container">

    <div class="row justify-content-center" style="margin-top: 61px;">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <br>
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">ลืมรหัสผ่าน</h3></div>
                <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <form method="POST" action="{{ route('password.email') }}">
                      @csrf
                        <div class="form-group"><label class="small mb-1" for="inputEmailAddress">ระบุอีเมลที่กรอกไว้ในระบบ*</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ระบุอีเมล..." autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                        <br>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="{{route('login')}}">กลับ</a>
                            <button type="submit" class="btn btn-warning" >ดำเนินการ</button></div>
                    </form>
                    <br>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <button  class="btn btn-danger">
                                  {{ __('ยกเลิก ') }}
                              </button>
                                <button type="submit" class="btn btn-warning">
                                    {{ __('ดำเนินการต่อ ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
