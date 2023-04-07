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
                <h4>Happy Money / สุขภาพเงินดี</h4>
            </div>

            <form action="page8Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">39. ท่านรู้สึกว่า
                                การผ่อนชำระหนี้สินต่าง ๆ โดยรวมของท่านในปัจจุบันเป็นภาระ หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-1" value="1">
                            <label class="form-check-label" for="checkq39-1">
                                1. เป็นภาระหนักที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-2" value="2">
                            <label class="form-check-label" for="checkq39-2">
                                2. เป็นภาระหนักมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-3" value="3">
                            <label class="form-check-label" for="checkq39-3">
                                3. เป็นภาระปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-4" value="4">
                            <label class="form-check-label" for="checkq39-4">
                                4. เป็นภาระน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q39" type="radio" name="q39" id="checkq39-5" value="5">
                            <label class="form-check-label" for="checkq39-5">
                                5. ไม่เป็นภาระ/ ไม่ได้ผ่อนชำระ/ ไม่มีหนี้สิน
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">40. ท่านผ่อนชำระหนี้
                                ตามกำหนดเวลาทุกครั้ง หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-1" value="1">
                            <label class="form-check-label" for="checkq40-1">
                                1. ไม่ตรงเวลาทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-2" value="2">
                            <label class="form-check-label" for="checkq40-2">
                                2. ไม่ตรงเวลาบ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-3" value="3">
                            <label class="form-check-label" for="checkq40-3">
                                3. ตรงเวลาบ้างบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-4" value="4">
                            <label class="form-check-label" for="checkq40-4">
                                4. ตรงเวลาเกือบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q40" type="radio" name="q40" id="checkq40-5" value="5">
                            <label class="form-check-label" for="checkq40-5">
                                5. ตรงเวลาทุกครั้ง/ ไม่ได้ผ่อนชำระ/ ไม่มีหนี้สิน
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">41. โดยรวมแล้ว
                                ท่านมีเงินเก็บออมในแต่ละเดือนหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-1" value="1">
                            <label class="form-check-label" for="checkq41-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-2" value="2">
                            <label class="form-check-label" for="checkq41-2">
                                2. มี/ เก็บออมเพียงเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-3" value="3">
                            <label class="form-check-label" for="checkq41-3">
                                3. มี/ เก็บออมปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-4" value="4">
                            <label class="form-check-label" for="checkq41-4">
                                4. มี/ เก็บออมมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q41" type="radio" name="q41" id="checkq41-5" value="5">
                            <label class="form-check-label" for="checkq41-5">
                                5. มี/ เก็บออมมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">42. โดยรวมแล้ว
                                ค่าตอบแทนที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไร
                                เมื่อเปรียบเทียบกับรายจ่ายทั้งหมดในแต่ละเดือน</span></label>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-1" value="1">
                            <label class="form-check-label" for="checkq42-1">
                                1. รายจ่ายเกินกว่ารายได้มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-2" value="2">
                            <label class="form-check-label" for="checkq42-2">
                                2. รายจ่ายเกินกว่ารายได้เล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-3" value="3">
                            <label class="form-check-label" for="checkq42-3">
                                3. รายจ่ายพอ ๆ กับรายได้
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-4" value="4">
                            <label class="form-check-label" for="checkq42-4">
                                4. รายจ่ายน้อยกว่ารายได้
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q42" type="radio" name="q42" id="checkq42-5" value="5">
                            <label class="form-check-label" for="checkq42-5">
                                5. รายจ่ายน้อยกว่ารายได้มาก
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">CV8.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสุขภาพเงินดี
                                ของท่านเพียงใดของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-1" value="1">
                            <label class="form-check-label" for="checkcv8-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-2" value="2">
                            <label class="form-check-label" for="checkcv8-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-3" value="3">
                            <label class="form-check-label" for="checkcv8-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-4" value="4">
                            <label class="form-check-label" for="checkcv8-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv8" type="radio" name="cv8" id="checkcv8-5" value="5">
                            <label class="form-check-label" for="checkcv8-5">
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
            <script src="../jsStaff/jspage8.js"></script>

        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>