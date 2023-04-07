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
                <h4>Happy Family / ครอบครัวดี </h4>
            </div>

            <form action="page5Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 27.
                                ท่านมีเวลาอยู่กับครอบครัว เพียงพอหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-1" value="1">
                            <label class="form-check-label" for="checkq27-1">
                                1. ไม่เพียงพอ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-2" value="2">
                            <label class="form-check-label" for="checkq27-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-3" value="3">
                            <label class="form-check-label" for="checkq27-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-4" value="4">
                            <label class="form-check-label" for="checkq27-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q27" type="radio" name="q27" id="checkq27-5" value="5">
                            <label class="form-check-label" for="checkq27-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 28. ท่าน ทำกิจกรรม
                                (ออกกำลังกาย ทำบุญ ซื้อของ ฯลฯ) ร่วมกันกับคนในครอบครัว หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-1" value="1">
                            <label class="form-check-label" for="checkq28-1">
                                1. ไม่ทำ/ทำน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-2" value="2">
                            <label class="form-check-label" for="checkq28-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-3" value="3">
                            <label class="form-check-label" for="checkq28-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-4" value="4">
                            <label class="form-check-label" for="checkq28-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q28" type="radio" name="q28" id="checkq28-5" value="5">
                            <label class="form-check-label" for="checkq28-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">29.
                                โดยรวมแล้วท่านมีความสุขกับครอบครัวของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-1" value="1">
                            <label class="form-check-label" for="checkq29-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-2" value="2">
                            <label class="form-check-label" for="checkq29-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-3" value="3">
                            <label class="form-check-label" for="checkq29-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-4" value="4">
                            <label class="form-check-label" for="checkq29-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q29" type="radio" name="q29" id="checkq29-5" value="5">
                            <label class="form-check-label" for="checkq29-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">CV5.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติครอบครัวดี ของท่านเพียงใด
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv5" type="radio" name="cv5" id="checkcv5-1" value="1">
                            <label class="form-check-label" for="checkcv5-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv5" type="radio" name="cv5" id="checkcv5-2" value="2">
                            <label class="form-check-label" for="checkcv5-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv5" type="radio" name="cv5" id="checkcv5-3" value="3">
                            <label class="form-check-label" for="checkcv5-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv5" type="radio" name="cv5" id="checkcv5-4" value="4">
                            <label class="form-check-label" for="checkcv5-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv5" type="radio" name="cv5" id="checkcv5-5" value="5">
                            <label class="form-check-label" for="checkcv5-5">
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
            <script src="../jsStaff/jspage5.js"></script>

        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>