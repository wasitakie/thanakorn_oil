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
                <h4>Happy Society / สังคมดี</h4>
            </div>

            <form action="page6Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">30. โดยรวมแล้ว
                                เพื่อนบ้านมีความสัมพันธ์ที่ดีต่อท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-1" value="1">
                            <label class="form-check-label" for="checkq30-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-2" value="2">
                            <label class="form-check-label" for="checkq30-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-3" value="3">
                            <label class="form-check-label" for="checkq30-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-4" value="4">
                            <label class="form-check-label" for="checkq30-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q30" type="radio" name="q30" id="checkq30-5" value="5">
                            <label class="form-check-label" for="checkq30-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">31.
                                โดยรวมแล้วท่านปฏิบัติตามกฎระเบียบ/ ข้อบังคับของสังคม หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-1" value="1">
                            <label class="form-check-label" for="checkq31-1">
                                1. ไม่ปฏิบัติ/ ปฏิบัติน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-2" value="2">
                            <label class="form-check-label" for="checkq31-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-3" value="3">
                            <label class="form-check-label" for="checkq31-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-4" value="4">
                            <label class="form-check-label" for="checkq31-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q31" type="radio" name="q31" id="checkq31-5" value="5">
                            <label class="form-check-label" for="checkq31-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">32.
                                โดยรวมแล้วท่านรู้สึก
                                ปลอดภัยในชีวิตและทรัพย์สิน หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-1" value="1">
                            <label class="form-check-label" for="checkq32-1">
                                1. ไม่รู้สึก /รู้สึกน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-2" value="2">
                            <label class="form-check-label" for="checkq32-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-3" value="3">
                            <label class="form-check-label" for="checkq32-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-4" value="4">
                            <label class="form-check-label" for="checkq32-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q32" type="radio" name="q32" id="checkq32-5" value="5">
                            <label class="form-check-label" for="checkq32-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">33. โดยรวมแล้ว
                                เมื่อท่านมีปัญหา ท่านสามารถขอความช่วยเหลือจากคนในชุมชน ได้หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-1" value="1">
                            <label class="form-check-label" for="checkq33-1">
                                1. ไม่ได้/ ได้น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-2" value="2">
                            <label class="form-check-label" for="checkq33-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-3" value="3">
                            <label class="form-check-label" for="checkq33-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-4" value="4">
                            <label class="form-check-label" for="checkq33-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q33" type="radio" name="q33" id="checkq33-5" value="5">
                            <label class="form-check-label" for="checkq33-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">34. โดยรวมแล้ว
                                ท่านรู้สึกว่า สังคมไทยทุกวันนี้ มีความสงบสุข หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-1" value="1">
                            <label class="form-check-label" for="checkq34-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-2" value="2">
                            <label class="form-check-label" for="checkq34-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-3" value="3">
                            <label class="form-check-label" for="checkq34-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-4" value="4">
                            <label class="form-check-label" for="checkq34-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q34" type="radio" name="q34" id="checkq34-5" value="5">
                            <label class="form-check-label" for="checkq34-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">35.
                                โดยรวมแล้วทุกวันนี้ท่านใช้ชีวิตในสังคมอย่างมีความสุข หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-1" value="1">
                            <label class="form-check-label" for="checkq35-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-2" value="2">
                            <label class="form-check-label" for="checkq35-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-3" value="3">
                            <label class="form-check-label" for="checkq35-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-4" value="4">
                            <label class="form-check-label" for="checkq35-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q35" type="radio" name="q35" id="checkq35-5" value="5">
                            <label class="form-check-label" for="checkq35-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>






                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">CV6.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสังคมดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv6" type="radio" name="cv6" id="checkcv6-1" value="1">
                            <label class="form-check-label" for="checkcv6-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv6" type="radio" name="cv6" id="checkcv6-2" value="2">
                            <label class="form-check-label" for="checkcv6-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv6" type="radio" name="cv6" id="checkcv6-3" value="3">
                            <label class="form-check-label" for="checkcv6-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv6" type="radio" name="cv6" id="checkcv6-4" value="4">
                            <label class="form-check-label" for="checkcv6-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv6" type="radio" name="cv6" id="checkcv6-5" value="5">
                            <label class="form-check-label" for="checkcv6-5">
                                5. มีผลกระทบน้อยที่สุด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStaff/jspage6.js"></script>
        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>