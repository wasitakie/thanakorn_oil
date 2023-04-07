<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include '../title/title.php' ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../boot/css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="../boot/js/mdb.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#slider-range-max").slider({
                range: "max",
                min: 0,
                max: 10,
                value: 0,
                step: 0.1,
                slide: function(event, ui) {
                    $("#amount").val(ui.value);
                }
            });
            $("#amount").val($("#slider-range-max").slider("value"));
        });
        $(function() {
            $("#slider-range-max1").slider({
                range: "max",
                min: 0,
                max: 10,
                value: 0,
                step: 0.1,
                slide: function(event, ui) {
                    $("#amount1").val(ui.value);
                }
            });
            $("#amount1").val($("#slider-range-max1").slider("value"));
        });
    </script>
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <div class="container manu">
        <div class="col-md-12">
            <div class="headText">
                <h4>คำชี้แจงในการตอบแบบสำรวจ</h4>
                <p>ให้ใส่เครื่องหมาย <i class="fa-solid fa-check"></i> ในช่อง <i class="fa-regular fa-square"></i>
                    ทุกข้อที่ท่านเลือก </p>
            </div>

            <div class="headpage">
                <h4>สมดุลชีวิตกับการทำงาน</h4>
            </div>

            <form action="page11Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">69.
                                ท่านรู้สึกว่าโดยเฉลี่ยในหนึ่งสัปดาห์ท่านทำงานกี่วัน</span></label>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-1" value="1">
                            <label class="form-check-label" for="checkq69-1">
                                1. 1- 2 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-2" value="2">
                            <label class="form-check-label" for="checkq69-2">
                                2. 3 – 4 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-3" value="3">
                            <label class="form-check-label" for="checkq69-3">
                                3. 5 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-4" value="4">
                            <label class="form-check-label" for="checkq69-4">
                                4. 6 วัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q69" type="radio" name="q69" id="checkq69-5" value="5">
                            <label class="form-check-label" for="checkq69-5">
                                5. 7 วัน (ทุกวัน)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 70.
                                ท่านรู้สึกว่าโดยเฉลี่ยท่านทำงานวันละกี่ชั่วโมง
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-1" value="1">
                            <label class="form-check-label" for="checkq70-1">
                                1. น้อยกว่า 6 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-2" value="2">
                            <label class="form-check-label" for="checkq70-2">
                                2. 6 – 8 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-3" value="3">
                            <label class="form-check-label" for="checkq70-3">
                                3. 9 – 10 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-4" value="4">
                            <label class="form-check-label" for="checkq70-4">
                                4. 11 – 12 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q70" type="radio" name="q70" id="checkq70-5" value="5">
                            <label class="form-check-label" for="checkq70-5">
                                5. มากกว่า 12 ชั่วโมง
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">71. ท่านรู้สึกว่า
                                ได้พักผ่อนโดยเฉลี่ย (ไม่รวมการนอนหลับตอนกลางคืน) วันละกี่ชั่วโมง
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-1" value="1">
                            <label class="form-check-label" for="checkq71-1">
                                1. น้อยกว่า 1 ชั่วโมงด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-2" value="2">
                            <label class="form-check-label" for="checkq71-2">
                                2. 1 – 2 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-3" value="3">
                            <label class="form-check-label" for="checkq71-3">
                                3. 3 – 5 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-4" value="4">
                            <label class="form-check-label" for="checkq71-4">
                                4. 6 - 7 ชั่วโมง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q71" type="radio" name="q71" id="checkq71-5" value="5">
                            <label class="form-check-label" for="checkq71-5">
                                5. 8 ชั่วโมง
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">72. หน่วยงานของท่าน
                                มีความยืดหยุ่น ในการทำงาน (ในสถานการณ์ปกติ) หรือไม่ (เช่น
                                ความยืดหยุ่นในการทำงานนอกสถานที่
                                ไม่ต้องเข้างาน/ออกงาน ตามเวลาที่กำหนด/ สามารถเลือกวันหยุดของตนเองได้ ฯลฯ)</span></label>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-1" value="1">
                            <label class="form-check-label" for="checkq72-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-2" value="2">
                            <label class="form-check-label" for="checkq72-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-3" value="3">
                            <label class="form-check-label" for="checkq72-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-4" value="4">
                            <label class="form-check-label" for="checkq72-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q72" type="radio" name="q72" id="checkq72-5" value="5">
                            <label class="form-check-label" for="checkq72-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">73.
                                ท่านทำงานตรงตามวุฒิการศึกษาหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-1" value="1">
                            <label class="form-check-label" for="checkq73-1">
                                1. ไม่ตรงตามวุฒิ/ น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-2" value="2">
                            <label class="form-check-label" for="checkq73-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-3" value="3">
                            <label class="form-check-label" for="checkq73-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-4" value="4">
                            <label class="form-check-label" for="checkq73-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q73" type="radio" name="q73" id="checkq73-5" value="5">
                            <label class="form-check-label" for="checkq73-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="customRange3" class="form-label"><span class="textQ">
                                74. ปัจจุบัน ความสุข ของท่านอยู่ในระดับใด ขอให้ท่านกากบาท X ลงบนเส้นด้านล่างโดยคะแนนจะเรียงจากน้อยไป
                                หามากเริ่มจาก 0 หมายถึง ไม่มีความสุขเลย ไปจนถึง 10 หมายถึง มีความสุขที่สุด
                            </span></label>
                        <p>
                            <label for="amount">ผลคะแนนที่ท่านเลือก:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;" name="q74">
                        </p>
                        <div id="slider-range-max"></div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="customRange3" class="form-label"><span class="textQ">
                                75. ปัจจุบันสถานการณ์การแพร่ระบาดโควิด-19 (COVID-19) ส่งผลกระทบต่อชีวิตความเป็นอยู่ของท่านในระดับใด โปรด กากบาท X ลงบนเส้นด้านล่าง โดยคะแนนเริ่มจาก 0 หมายถึง ไม่ส่งผลกระทบต่อชีวิตความเป็นอยู่เลย ไปจนถึง 10 หมายถึง ส่งผลกระทบต่อชีวิตความเป็นอยู่มากที่สุด </span></label>
                        <p>
                            <label for="amount1">ผลคะแนนที่ท่านเลือก:</label>
                            <input type="text" id="amount1" readonly style="border:0; color:#f6931f; font-weight:bold;" name="q75">
                        </p>
                        <div id="slider-range-max1"></div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>

            </form>



            <script src="../jsStaff/jspage11.js"></script>



        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>