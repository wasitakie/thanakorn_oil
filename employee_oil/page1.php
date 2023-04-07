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
                <h4>Happy Body / สุขภาพกายดี </h4>
            </div>
            <form action="page1Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="number" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.
                                        ปัจจุบัน
                                        ท่านมีน้ำหนัก/กิโลกรัม</span></label>
                                <input class="form-control weight" onKeyPress="if(this.value.length==3) return false;" placeholder=" กิโลกรัม" name="weight" id="weight">
                            </div>
                            <div class="col">
                                <label type="number" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        เส้นรอบเอว
                                        /นิ้ว</spna></label>
                                <input class="form-control waist" onKeyPress="if(this.value.length==3) return false;" placeholder=" นิ้ว" name="waist" id="waist">
                            </div>
                            <div class="col">
                                <label type="number" for="formGroupExampleInput" class="form-label"><span class="textQ">ส่วนสูง/เซนติเมตร</span></label>
                                <input class="form-control height" onKeyPress="if(this.value.length==3) return false;" placeholder=" เซนติเมตร" name="height" id="height">
                            </div>
                            <div class="img">
                                <img src="../img/bmi.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 2.
                                โดยปกติท่านกินอาหารเช้า เฉลี่ยสัปดาห์ละกี่วัน</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="checkq2-1" value="1">
                            <label class="form-check-label" for="checkq2-1">
                                1. ไม่กิน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="checkq2-2" value="2">
                            <label class="form-check-label" for="checkq2-2">
                                2. กินแต่ไม่บ่อย (1-2 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="checkq2-3" value="3">
                            <label class="form-check-label" for="checkq2-3">
                                3. กินเป็นบางครั้ง (3-4 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="checkq2-4" value="4">
                            <label class="form-check-label" for="checkq2-4">
                                4. กินเป็นประจำ (5-6 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2" type="radio" name="q2" id="checkq2-5" value="5">
                            <label class="form-check-label" for="checkq2-5">
                                5. กินทุกวัน
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 3.
                                โดยปกติท่านกินอาหารที่มีรสหวานจัด เช่น ลูกอม/ทอฟฟี่ ช็อกโกแลต โดนัท ขนมเค้ก น้ำอัดลม ฯลฯ
                                บ่อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="checkq3-1" value="1">
                            <label class="form-check-label" for="checkq3-1">
                                1.กินทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="checkq3-2" value="2">
                            <label class="form-check-label" for="checkq3-2">
                                2. กินเป็นประจำ (5-6 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="checkq3-3" value="3">
                            <label class="form-check-label" for="checkq3-3">
                                3. กินเป็นบางครั้ง (3-4 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="checkq3-4" value="4">
                            <label class="form-check-label" for="checkq3-4">
                                4.กินแต่ไม่บ่อย (1-2 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" type="radio" name="q3" id="checkq3-5" value="5">
                            <label class="form-check-label" for="checkq3-5">
                                5. ไม่กิน
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 4.
                                โดยปกติท่านกินอาหารที่มีรสเค็มจัด เช่น อาหารที่เพิ่มน้ำปลา หรือ ซอสปรุงรสต่าง ๆ
                                อาหารกระป๋อง
                                ขนมขบเคี้ยว อาหารกึ่งสำเร็จรูป อาหารตากแห้งหมักดอง ฯลฯ บ่อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="checkq4-1" value="1">
                            <label class="form-check-label" for="checkq4-1">
                                1.กินทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="checkq4-2" value="2">
                            <label class="form-check-label" for="checkq4-2">
                                2. กินเป็นประจำ (5-6 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="checkq4-3" value="3">
                            <label class="form-check-label" for="checkq4-3">
                                3. กินเป็นบางครั้ง (3-4 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="checkq4-4" value="4">
                            <label class="form-check-label" for="checkq4-4">
                                4.กินแต่ไม่บ่อย (1-2 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" type="radio" name="q4" id="checkq4-5" value="5">
                            <label class="form-check-label" for="checkq4-5">
                                5. ไม่กิน
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 5.
                                โดยปกติท่านกินอาหารมันจัด/ ของมันจัด เช่น ของทอด หมูกระทะ อาหารที่มีส่วนผสมของชีส/ เนย
                                ฟาสต์ฟู้ด ฯลฯ บ่อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="checkq5-1" value="1">
                            <label class="form-check-label" for="checkq5-1">
                                1.กินทุกวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="checkq5-2" value="2">
                            <label class="form-check-label" for="checkq5-2">
                                2. กินเป็นประจำ (5-6 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="checkq5-3" value="3">
                            <label class="form-check-label" for="checkq5-3">
                                3. กินเป็นบางครั้ง (3-4 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="checkq5-4" value="4">
                            <label class="form-check-label" for="checkq5-4">
                                4.กินแต่ไม่บ่อย (1-2 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" type="radio" name="q5" id="checkq5-5" value="5">
                            <label class="form-check-label" for="checkq5-5">
                                5. ไม่กิน
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 6. โดยปกติท่านกินผักและผลไม้ บ่อยเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="checkq6-1" value="1">
                            <label class="form-check-label" for="checkq6-1">
                                1. ไม่กินเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="checkq6-2" value="2">
                            <label class="form-check-label" for="checkq6-2">
                                2.กินแต่ไม่บ่อย (1-2 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="checkq6-3" value="3">
                            <label class="form-check-label" for="checkq6-3">
                                3. กินเป็นบางครั้ง (3-4 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="checkq6-4" value="4">
                            <label class="form-check-label" for="checkq6-4">
                                4.กินเป็นประจำ (5-6 วัน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q6" type="radio" name="q6" id="checkq6-5" value="5">
                            <label class="form-check-label" for="checkq6-5">
                                5.กินทุกวัน
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 7.
                                ในภาพรวมท่านคิดว่า การใช้กัญชา เป็นเรื่องเรื่องปกติทั่วไป</span></label>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="checkq7-1" value="1">
                            <label class="form-check-label" for="checkq7-1">
                                1. มากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="checkq7-2" value="2">
                            <label class="form-check-label" for="checkq7-2">
                                2. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="checkq7-3" value="3">
                            <label class="form-check-label" for="checkq7-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="checkq7-4" value="4">
                            <label class="form-check-label" for="checkq7-4">
                                4. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q7" type="radio" name="q7" id="checkq7-5" value="5">
                            <label class="form-check-label" for="checkq7-5">
                                5. น้อยที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 8. ปัจจุบันท่านออกกำลังกายโดยเฉลี่ยสัปดาห์ละกี่วัน</span></label>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="checkq8-1" value="1">
                            <label class="form-check-label" for="checkq8-1">
                                1. มากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="checkq8-2" value="2">
                            <label class="form-check-label" for="checkq8-2">
                                2. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="checkq8-3" value="3">
                            <label class="form-check-label" for="checkq8-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="checkq8-4" value="4">
                            <label class="form-check-label" for="checkq8-4">
                                4. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q8" type="radio" name="q8" id="checkq8-5" value="5">
                            <label class="form-check-label" for="checkq8-5">
                                5. น้อยที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 9.
                                ปัจจุบันท่านสูบบุหรี่/ใบจาก/ยาเส้น หรือไม่ </span></label>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="checkq9-1" value="1">
                            <label class="form-check-label" for="checkq9-1">
                                1. สูบเป็นประจำ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="checkq9-2" value="2">
                            <label class="form-check-label" for="checkq9-2">
                                2. สูบบ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="checkq9-3" value="3">
                            <label class="form-check-label" for="checkq9-3">
                                3. สูบนาน ๆ ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="checkq9-4" value="4">
                            <label class="form-check-label" for="checkq9-4">
                                4. ไม่สูบแต่เคยสูบ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q9" type="radio" name="q9" id="checkq9-5" value="5">
                            <label class="form-check-label" for="checkq9-5">
                                5. ไม่เคยสูบเลย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 10.
                                ปัจจุบันท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์ เช่น เหล้า เบียร์ ไวน์ สาโท
                                หรือสุราพื้นบ้านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="checkq10-1" value="1">
                            <label class="form-check-label" for="checkq10-1">
                                1.ดื่มเป็นประจำ (ดื่มเกือบทุกวัน/ เกือบทุกสัปดาห์)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="checkq10-2" value="2">
                            <label class="form-check-label" for="checkq10-2">
                                2.ดื่มบ่อยครั้ง (ดื่มเกือบทุกเดือน)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="checkq10-3" value="3">
                            <label class="form-check-label" for="checkq10-3">
                                3. ดื่มนาน ๆ ครั้ง (ดื่มปีละ 1-2 ครั้ง)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="checkq10-4" value="4">
                            <label class="form-check-label" for="checkq10-4">
                                4.ไม่ดื่มแต่เคยดื่ม
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q10" type="radio" name="q10" id="checkq10-5" value="5">
                            <label class="form-check-label" for="checkq10-5">
                                5. ไม่เคยดื่มเลย
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">11. โดยรวมแล้ว
                                ท่านพึงพอใจกับสุขภาพกายของท่าน เพียงใด </span></label>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="checkq11-1" value="1">
                            <label class="form-check-label" for="checkq11-1">
                                1. ไม่พอใจเลย/พอใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="checkq11-2" value="2">
                            <label class="form-check-label" for="checkq11-2">
                                2. พอใจน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="checkq11-3" value="3">
                            <label class="form-check-label" for="checkq11-3">
                                3. พอใจปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="checkq11-4" value="4">
                            <label class="form-check-label" for="checkq11-4">
                                4. พอใจมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q11" type="radio" name="q11" id="checkq11-5" value="5">
                            <label class="form-check-label" for="checkq11-5">
                                5. พอใจมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV1.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติสุขภาพกายดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv1" type="radio" name="cv1" id="checkcv1-1" value="1">
                            <label class="form-check-label" for="checkcv1-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv1" type="radio" name="cv1" id="checkcv1-2" value="2">
                            <label class="form-check-label" for="checkcv1-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv1" type="radio" name="cv1" id="checkcv1-3" value="3">
                            <label class="form-check-label" for="checkcv1-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv1" type="radio" name="cv1" id="checkcv1-4" value="4">
                            <label class="form-check-label" for="checkcv1-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv1" type="radio" name="cv1" id="checkcv1-5" value="5">
                            <label class="form-check-label" for="checkcv1-5">
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
            <script src="../jsStaff/jspage1.js"></script>




        </div>
    </div>

    <?php include '../title/footer.php' ?>
</body>

</html>