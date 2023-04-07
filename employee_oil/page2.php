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
                <h4>Happy Relax / ผ่อนคลายดี </h4>
            </div>

            <form action="page2Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 12.
                                โดยรวมแล้วท่านรู้สึกว่าได้รับการพักผ่อนเพียงพอหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-1" value="1">
                            <label class="form-check-label" for="checkq12-1">
                                1. ไม่พอ/ น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-2" value="2">
                            <label class="form-check-label" for="checkq12-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-3" value="3">
                            <label class="form-check-label" for="checkq12-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-4" value="4">
                            <label class="form-check-label" for="checkq12-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q12" type="radio" name="q12" id="checkq12-5" value="5">
                            <label class="form-check-label" for="checkq12-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 13. โดยรวมแล้วใน 1
                                สัปดาห์ท่านทำกิจกรรมเพื่อเป็นการพักผ่อนหย่อนใจ (อ่านหนังสือ ดูหนัง ฟังเพลง ช้อบปิ้ง
                                เล่นเกมส์ ปลูกต้นไม้ ฯลฯ) หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-1" value="1">
                            <label class="form-check-label" for="checkq13-1">
                                1. ไม่ได้ทำ/ น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-2" value="2">
                            <label class="form-check-label" for="checkq13-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-3" value="3">
                            <label class="form-check-label" for="checkq13-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-4" value="4">
                            <label class="form-check-label" for="checkq13-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q13" type="radio" name="q13" id="checkq13-5" value="5">
                            <label class="form-check-label" for="checkq13-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 14.
                                โดยรวมแล้วท่านมีความเครียด (เครียดจากการทำงาน/ เรื่องครอบครัว/ เรื่องอื่น ๆ)
                                บ้างหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-1" value="1">
                            <label class="form-check-label" for="checkq14-1">
                                1. เครียดมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-2" value="2">
                            <label class="form-check-label" for="checkq14-2">
                                2. เครียดมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-3" value="3">
                            <label class="form-check-label" for="checkq14-3">
                                3. เครียดปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-4" value="4">
                            <label class="form-check-label" for="checkq14-4">
                                4. เครียดน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q14" type="radio" name="q14" id="checkq14-5" value="5">
                            <label class="form-check-label" for="checkq14-5">
                                5. ไม่เครียดเลย
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 15.
                                โดยรวมแล้วท่านคิดว่าชีวิตของท่านเป็นไปตามที่ท่านคาดหวัง หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-1" value="1">
                            <label class="form-check-label" for="checkq15-1">
                                1.ไม่เป็นไปตามที่คาดหวังเลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-2" value="2">
                            <label class="form-check-label" for="checkq15-2">
                                2. เป็นไปตามที่คาดหวังเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-3" value="3">
                            <label class="form-check-label" for="checkq15-3">
                                3. เป็นไปตามที่คาดหวังปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-4" value="4">
                            <label class="form-check-label" for="checkq15-4">
                                4. เป็นไปตามที่คาดหวังมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q15" type="radio" name="q15" id="checkq15-5" value="5">
                            <label class="form-check-label" for="checkq15-5">
                                5. เป็นไปตามที่คาดหวังมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 16.
                                เมื่อประสบปัญหาในชีวิต โดยทั่วไปท่านสามารถจัดการกับปัญหาได้หรือไม่ </span></label>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-1" value="1">
                            <label class="form-check-label" for="checkq16-1">
                                1. ไม่สามารถจัดการได้เลย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-2" value="2">
                            <label class="form-check-label" for="checkq16-2">
                                2.จัดการได้น้อยมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-3" value="3">
                            <label class="form-check-label" for="checkq16-3">
                                3.จัดการได้ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-4" value="4">
                            <label class="form-check-label" for="checkq16-4">
                                4. จัดการได้มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q16" type="radio" name="q16" id="checkq16-5" value="5">
                            <label class="form-check-label" for="checkq16-5">
                                5. จัดการได้มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>





                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV2.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติผ่อนคลายดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-1" value="1">
                            <label class="form-check-label" for="checkcv2-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-2" value="2">
                            <label class="form-check-label" for="checkcv2-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-3" value="3">
                            <label class="form-check-label" for="checkcv2-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-4" value="4">
                            <label class="form-check-label" for="checkcv2-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv2" type="radio" name="cv2" id="checkcv2-5" value="5">
                            <label class="form-check-label" for="checkcv2-5">
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
            <script src="../jsStaff/jspage2.js"></script>



        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>