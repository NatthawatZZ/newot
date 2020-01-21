@extends('layouts.home')
@section('content')
<style>
	body{
		line-height: 2em;
		font-family: 'kanit';
	}
	input{
		line-height: 1.5em;
	}
	.containform{
		border: 1px solid #ddd;
		border-radius: 5px;
		-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
		padding: 5em;
		box-sizing: border-box;
		position: relative;
		background-color: white;
		font-size: 15px;
        margin-bottom: 40px;
	}
	.containform:after{
		content: '';
		position: absolute;
		left: -1px;
		height: 98%;
		top: 1%;

	}
	.btnplus{
		border-radius: 50%;
		padding: 0;
		width: 30px;
		height: 30px;
		font-size: 25px;
        line-height: 0px;
        padding-bottom: 3px;
    }
	.inputtext{
        display:inline;
	}
	.inputmoney{
        display: block;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #ddd;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;

	}
	.btn-save{
		padding: 0.5em 3em;
		margin: 5em 1em 0 1em;
	}
	div.hidetext{
		line-height: 3em;
		margin:0.5em 0 0 1.5em;
		display: none;
	}
	h2{
		text-align: center;
    }
    h5{
        color: white;
        padding-top: 5px;
    }

</style>
    <ol class="breadcrumb mb-4">
       <h4><li class="breadcrumb-item active">ระบบขอเบิกค่าทำงานล่วงเวลา (OT)</li></h4>
    </ol>
    <div class="row">
        <div class="container-fluid mt-5">
            <div class="containform mx-5">
                <h6>Firstname Lastname</h6>
                <p class="mt-4">00/00/2563</p>
                <div class="row">
                    <div class="col-md-2">
                        <p>ขอเบิกค่า</p>
                    </div>
                    <div class="col-md-10">
                        <div class="form-row">
                            <div class="col-sm-3">
                                <input type="radio" name="radio1">&nbsp;<label>ทำงานล่วงเวลา</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="radio" name="radio1">&nbsp;<label>ทำงานในวันหยุด</label>
                            </div>
                            <div class="col-sm-3">
                                <input type="radio"
                                    name="radio1">&nbsp;<label>ทำงานล่วงเวลาในวันหยุด</label> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="form-row commisdetail">
                            <div class="col-sm-2">
                                <input type="radio" name="radio1">&nbsp;<label>ค่าคอมมิชชั่น</label>
                            </div>
                        </div>
                        <div class="hidetext">
                            <label>ชื่อโครงการ </label>
                            <input class="inputtext" type="text" name="withdraw" placeholder="ระบุ...">
                            <br>

                            <!-- <label> จำนวนเงิน </label> -->
                            จำนวนเงิน : <input class="inputtext" type="text" name="withdraw" placeholder="ระบุ..."> บาท

                            <br>
                            <div class="form-row">
                                <div class="col-sm-2">
                                    <input type="radio" name="radio2">&nbsp;<label>3% (รัฐบาล)</label>
                                </div>

                                <div class="col-sm-2">
                                    <input type="radio" name="radio2">&nbsp;<label>5% (เอกชน)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2">
                        <p>เมื่อวันที่</p>
                    </div>
                    <div class="col-md-10">
                        <input class="inputtext" type="date" name="date">
                        <div class="d-inline-block mx-2">
                            <span class="mr-2">ตั้งแต่เวลา</span>
                            <input class="inputtext" type="time" name="time1">
                        </div>
                        <div class="d-inline-block mx-2">
                            <span class="mr-2">ถึง</span>
                            <input class="inputtext" type="time" name="time2">
                        </div>
                        <div class="d-inline-block">
                            <button type="button" class="btn btn-primary btnplus" id="plus"
                                onclick="formShow()">+</button>
                        </div>
                        <!-- <div class="d-inline-block">
                            <button type="button" class="btn btn-success btnminus" id="plus00" onclick="formShow()">-</button>
                        </div>  -->
                    </div>
                </div>
                <div id="plus1">
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>เมื่อวันที่</p>
                        </div>
                        <div class="col-md-10">
                            <input class="inputtext" type="date" name="date1">
                            <div class="d-inline-block mx-2">
                                <span class="mr-2">ตั้งแต่เวลา</span>
                                <input class="inputtext" type="time" name="time3">
                            </div>
                            <div class="d-inline-block mx-2">
                                <span class="mr-2">ถึง</span>
                                <input class="inputtext" type="time" name="time4">
                            </div>
                            <div class="d-inline-block">
                                <button type="button" class="btn btn-primary btnplus" id="plus2"
                                    onclick="formShow()">+</button>
                            </div>
                            <div class="d-inline-block">
                                <button type="button" class="btn btn-danger btnplus" id="plus02"
                                    onclick="formShow()">-</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="plus3">
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>เมื่อวันที่</p>
                        </div>
                        <div class="col-md-10">
                            <input class="inputtext" type="date" name="date2">
                            <div class="d-inline-block mx-2">
                                <span class="mr-2">ตั้งแต่เวลา</span>
                                <input class="inputtext" type="time" name="time5">
                            </div>
                            <div class="d-inline-block mx-2">
                                <span class="mr-2">ถึง</span>
                                <input class="inputtext" type="time" name="time6">
                            </div>
                            <div class="d-inline-block">
                                <button type="button" class="btn btn-primary btnplus" id="plus4"
                                    onclick="formShow()">+</button>
                            </div>
                            <div class="d-inline-block">
                                <button type="button" class="btn btn-danger btnplus" id="plus04"
                                    onclick="formShow()">-</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="plus5">
                    <div class="row mt-3">
                        <div class="col-md-2">
                            <p>และเมื่อวันที่</p>
                        </div>
                        <div class="col-md-10">
                            <input class="inputtext" type="date" name="date3">
                            <div class="d-inline-block mx-2">
                                <span class="mr-2">ตั้งแต่เวลา</span>
                                <input class="inputtext" type="time" name="time7">
                            </div>
                            <div class="d-inline-block mx-2">
                                <span class="mr-2">ถึง</span>
                                <input class="inputtext" type="time" name="time8">
                            </div>
                            <div class="d-inline-block">
                                <button type="button" class="btn btn-danger btnplus" id="plus06"
                                    onclick="formShow()">-</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-2">
                        <p>งานที่ได้รับมอบหมาย</p>
                    </div>
                    <div class="col-md-7">
                        <div class="md-form">
                            <textarea id="textarea-char-counter"
                            class="form-control md-textarea" length="120" rows="3" placeholder="ระบุ..." ></textarea>
                          </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3">
                        <p>ขอเบิกค่าตอบแทนเป็นเงินทั้งสิ้น</p>
                    </div>
                    <div class="col-md-8 form-row">
                        <input class="inputmoney" style="width:50%;" type="text" placeholder="จำนวนเงิน" readonly>
                        <span class="ml-2">บาท</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="button" class="btn btn-primary btn-save">บันทึก</button>
                        <button type="button" class="btn btn-danger btn-save">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
