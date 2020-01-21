<!DOCTYPE html>
<html>

<head>
    <title>ค่าเดินทาง</title>
    <meta charset="utf-8">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<?PHP
include("linkbs.php"); ?>

<style>
    body {
        line-height: 2em;
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
        text-align: left;
        font-size: 15px;
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



    .btn-save {
        padding: 0.5em 3em;
        margin: 5em 1em 0 1em;
    }

    div.hidetext {
        line-height: 3em;
        margin: 0.5em 0 0 1.5em;
        display: none;
    }

    label {
        display: inline-block;
        margin-bottom: 0;
    }

    #col12 {
        margin-bottom: 50px;
    }
    #textareab textarea {
    /* overflow: auto;
    resize: vertical; */
    border-radius: 5px;
}
#wrapper p{
 text-align: left;

}
</style>

<body>
<img src="img/0102-01-01-01.jpg" style="width: 100%;">

    <div id="wrapper">
        <div class="container-fluid mt-5 " style="  text-align: left;">
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
                            <div class="state"><label>ค่าเดินทางฃยานพาหนะ</label></div>
                        </div>

                        <div class="pretty p-default p-round commisdetail">
                            <input type="radio" name="radio1">
                            <div class="state"><label>ค่าอื่นๆ</label></div>
                        </div>
                        <input class="inputtext commisinput" type="text" name="radio1" placeholder="ระบุ...">
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-md-5">
                        <p>เนื่องจากมีความจำเป็นต้องออกไปปฏิบัติงานนอกสถานที่ เมื่อวันที่</p>
                    </div>
                    <div class="col-md-3">
                        <?PHP
                        include("datepicker.php"); ?>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12" id="textareab">
                        <p>วัตถุประสงค์เพื่อ</p>
                        <div class="mdc-text-field mdc-text-field--textarea mdc-text-field--no-label">
                            <textarea class="mdc-text-field__input" rows="8" cols="100" aria-label="Label" ></textarea>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <br> -->
                <div class="row mt-3">
                    <div class="col-md-3">
                        <p>หลักฐานการเบิก</p>
                    </div>
                    <div class="col-md-5">
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                            <label class="custom-file-label" for="customFile">เลือกไฟล์</label>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                <!-- <br> -->
                <div class="row mt-3">
                    <div class="col-md-3">
                        <p>ขอเบิกค่าตอบแทนเป็นเงินทั้งสิ้น</p>
                    </div>
                    <div class="col-md-5">
                        <input class="form-control form-control-sm" type="text" placeholder="" style="background-color: #ddd;">
                    </div>

                    <div class="col-md-4">
                        <span class="ml-3">บาท</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                        <button type="button" class="btn btn-primary btn-md btn-save ">บันทึก</button>

                    </div>
                    <div class="col-md-3 d-flex justify-content-center">

                        <button type="button" class="btn btn-danger btn-md btn-save ">ยกเลิก</button>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>

            </div>
            <div class="row" id="col12">
                <div class="col-md-12 d-flex justify-content-center">

                </div>
            </div>
        </div>
        <!-- <div class="mdc-form-field demo-radio-form-field"><div class="mdc-radio mdc-ripple-upgraded mdc-ripple-upgraded--unbounded" style="--mdc-ripple-fg-size:24px; --mdc-ripple-fg-scale:1.66667; --mdc-ripple-left:8px; --mdc-ripple-top:8px;"><input class="mdc-radio__native-control" type="radio" id="0.5624188945282125" name="demo-radio-set" checked=""><div class="mdc-radio__background"><div class="mdc-radio__outer-circle"></div><div class="mdc-radio__inner-circle"></div></div><div class="mdc-radio__ripple"></div></div><label for="0.5624188945282125">Radio 1</label></div> -->
    </div>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

</body>


</html>