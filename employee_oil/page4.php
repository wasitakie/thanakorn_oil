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
                <h4>Happy Soul / จิตวิญญาณดี </h4>
            </div>

            <form action="page4Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 22.
                                โดยรวมแล้วท่านทำนุบำรุงศิลปวัฒนธรรม/ ศาสนา/ การให้ทาน หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-1" value="1">
                            <label class="form-check-label" for="checkq22-1">
                                1. ไม่ทำ/ ทำน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-2" value="2">
                            <label class="form-check-label" for="checkq22-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-3" value="3">
                            <label class="form-check-label" for="checkq22-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-4" value="4">
                            <label class="form-check-label" for="checkq22-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q22" type="radio" name="q22" id="checkq22-5" value="5">
                            <label class="form-check-label" for="checkq22-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 23. โดยรวมแล้ว
                                ท่านปฏิบัติกิจตามศาสนาเพื่อให้จิตใจสงบหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-1" value="1">
                            <label class="form-check-label" for="checkq23-1">
                                1. ไม่ปฏิบัติ/ ปฏิบัติน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-2" value="2">
                            <label class="form-check-label" for="checkq23-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-3" value="3">
                            <label class="form-check-label" for="checkq23-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-4" value="4">
                            <label class="form-check-label" for="checkq23-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q23" type="radio" name="q23" id="checkq23-5" value="5">
                            <label class="form-check-label" for="checkq23-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">24. โดยรวมแล้ว
                                ท่านยกโทษและให้อภัยอย่างจริงใจต่อผู้ที่สำนึกผิด หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-1" value="1">
                            <label class="form-check-label" for="checkq24-1">
                                1. ไม่ยกโทษ/ ให้อภัยน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-2" value="2">
                            <label class="form-check-label" for="checkq24-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-3" value="3">
                            <label class="form-check-label" for="checkq24-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-4" value="4">
                            <label class="form-check-label" for="checkq24-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q24" type="radio" name="q24" id="checkq24-5" value="5">
                            <label class="form-check-label" for="checkq24-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">25. โดยรวมแล้ว
                                ท่านยอมรับและขอโทษในความผิดที่ทำหรือมีส่วนรับผิดชอบ หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-1" value="1">
                            <label class="form-check-label" for="checkq25-1">
                                1. ไม่ยอมรับ/ ขอโทษน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-2" value="2">
                            <label class="form-check-label" for="checkq25-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-3" value="3">
                            <label class="form-check-label" for="checkq25-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-4" value="4">
                            <label class="form-check-label" for="checkq25-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q25" type="radio" name="q25" id="checkq25-5" value="5">
                            <label class="form-check-label" for="checkq25-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 26. โดยรวมแล้ว
                                ท่านตอบแทนผู้มีพระคุณ หรือช่วยเหลือท่าน หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-1" value="1">
                            <label class="form-check-label" for="checkq26-1">
                                1. ไม่ตอบแทน/ ตอบแทนน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-2" value="2">
                            <label class="form-check-label" for="checkq26-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-3" value="3">
                            <label class="form-check-label" for="checkq26-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-4" value="4">
                            <label class="form-check-label" for="checkq26-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q26" type="radio" name="q26" id="checkq26-5" value="5">
                            <label class="form-check-label" for="checkq26-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">CV4.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติจิตวิญญาณดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv4" type="radio" name="cv4" id="checkcv4-1" value="1">
                            <label class="form-check-label" for="checkcv4-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv4" type="radio" name="cv4" id="checkcv4-2" value="2">
                            <label class="form-check-label" for="checkcv4-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv4" type="radio" name="cv4" id="checkcv4-3" value="3">
                            <label class="form-check-label" for="checkcv4-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv4" type="radio" name="cv4" id="checkcv4-4" value="4">
                            <label class="form-check-label" for="checkcv4-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv4" type="radio" name="cv4" id="checkcv4-5" value="5">
                            <label class="form-check-label" for="checkcv4-5">
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
            <script src="../jsStaff/jspage4.js"></script>

        </div>
    </div>

    <?php include '../title/footer.php' ?>
</body>

</html>