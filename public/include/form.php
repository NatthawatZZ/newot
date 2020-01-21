<!DOCTYPE html>
<html>

<head>
	<title>form</title>
	<meta charset="utf-8">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<?PHP
include("nav.php"); ?>
<style>
	body {
		line-height: 5em;
	}

	input {
		line-height: 1.5em;
	}

	.containform {
		border: 1px solid #ddd;
		border-radius: 5px;
		-webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
		box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
		padding: 3em;
		box-sizing: border-box;
		position: relative;
	}

	.containform:after {
		content: '';
		position: absolute;
		left: -1px;
		height: 98%;
		top: 1%;
		border-left: 5px solid blue;
	}

	.btnplus {
		border-radius: 50%;
		font-weight: bold;
		padding: 0;
		padding-bottom: 5px;
		width: 40px;
		height: 40px;
		font-size: 30px;
		line-height: 0px;
	}

	.inputtext {
		border-top: none;
		border-left: none;
		border-right: none;
		padding: 0.2em 0.5em;
		margin: -0.2em -0.5em;
		border-bottom: 1px solid black;
		box-sizing: border-box;
	}

	.inputmoney {
		border: 1px solid #ddd;
		border-radius: 5px;
		background-color: #ddd;
	}

	.btn-save {
		padding: 0.5em 3em;
		margin: 5em 1em 0 1em;
	}

	div.hidetext {
		line-height: 3em;
		margin: 0.5em 0 0 1.5em;
		display: none;
	}
</style>

<body>
	<div id="wrapper" >
		<?PHP 
		include("sidebar.php"); ?>
		<div class="container-fluid mt-5">
			<div class="containform mx-5">
				<h5>Firstname Lastname</h5>
				<p class="mt-4">00/00/2563</p>
				
				<div class="row">
					<div class="col-md-2">
						<p>ขอเบิกค่า</p>
					</div>
					<div class="col-md-10">
						<div class="pretty p-default p-round">
							<input type="radio" name="radio1">
							<div class="state"><label>ทำงานล่วงเวลา</label></div>
						</div>

						<div class="pretty p-default p-round">
							<input type="radio" name="radio1">
							<div class="state"><label>ทำงานในวันหยุด</label></div>
						</div>
						<div class="pretty p-default p-round">
							<input type="radio" name="radio1">
							<div class="state"><label>ทำงานล่วงเวลาในวันหยุด</label></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-10">
						<div class="pretty p-default p-round commisdetail">
							<input type="radio" name="radio1">
							<div class="state"><label>ค่าคอมมิชชั่น</label></div>
						</div>
						<input class="inputtext commisinput" type="text" name="radio1" placeholder="ระบุ...">

						<div class="hidetext">
							<span class="mr-3">ชื่อโครงการ </span>
							<input class="inputtext" type="text" name="withdraw" placeholder="ระบุ...">
							<br>

							<span class="mr-3">จำนวนเงิน </span>
							<input class="inputtext" type="text" name="withdraw" placeholder="ระบุ...">
							<span class="ml-3">บาท</span>
							<br>
							<div class="pretty p-default p-round">
								<input type="radio" name="radio2">
								<div class="state"><label>3% (รัฐบาล)</label></div>
							</div>
							<div class="pretty p-default p-round">
								<input type="radio" name="radio2">
								<div class="state"><label>5% (เอกชน)</label></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-2">
						<p>เมื่อวันที่</p>
					</div>
					<div class="col-md-10">
						<input type="date" name="date">
						<div class="d-inline-block mx-2">
							<span class="mr-2">ตั้งแต่เวลา</span>
							<input type="time" name="date">
						</div>
						<div class="d-inline-block mx-2">
							<span class="mr-2">ถึง</span>
							<input type="time" name="date">
						</div>
						<div class="d-inline-block">
							<button type="button" class="btn btn-primary btnplus">+</button>
						</div>

					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-2">
						<p>งานที่ได้รับมอบหมาย</p>
					</div>
					<div class="col-md-10">
						<input class="inputtext" style="width:50%;" type="text" placeholder="ระบุ...">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-3">
						<p>ขอเบิกค่าตอบแทนเป็นเงินทั้งสิ้น</p>
					</div>
					<div class="col-md-9">
						<input class="inputmoney" style="width:50%;" type="text">
						<span class="ml-3">บาท</span>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex justify-content-center">
						<button type="button" class="btn btn-primary btn-sm btn-save">บันทึก</button>
						<button type="button" class="btn btn-danger btn-sm btn-save">ยกเลิก</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<script>
	$("input[name='radio1']").change(function() {
		if ($(".commisdetail input").is(":checked", true)) {
			$('.hidetext').show();
		} else {
			$('.hidetext').hide();
		}
	});
</script>

</html>