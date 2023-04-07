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
                <h4>Happy Heart / น้ำใจดี </h4>
            </div>

            <form action="page3Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 17. โดยรวมแล้ว
                                ท่านรู้สึกเอื้ออาทร/ ห่วงใยต่อคนรอบข้างหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-1" value="1">
                            <label class="form-check-label" for="checkq17-1">
                                1. ไม่รู้สึกเลย/ น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-2" value="2">
                            <label class="form-check-label" for="checkq17-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-3" value="3">
                            <label class="form-check-label" for="checkq17-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-4" value="4">
                            <label class="form-check-label" for="checkq17-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q17" type="radio" name="q17" id="checkq17-5" value="5">
                            <label class="form-check-label" for="checkq17-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 18. โดยรวมแล้ว
                                ท่านให้การช่วยเหลือแก่คนรอบข้างหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-1" value="1">
                            <label class="form-check-label" for="checkq18-1">
                                1. ไม่เคย/ แทบจะไม่เคยช่วย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-2" value="2">
                            <label class="form-check-label" for="checkq18-2">
                                2. นาน ๆ ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-3" value="3">
                            <label class="form-check-label" for="checkq18-3">
                                3. ช่วยบ้างบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-4" value="4">
                            <label class="form-check-label" for="checkq18-4">
                                4. ช่วยแทบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q18" type="radio" name="q18" id="checkq18-5" value="5">
                            <label class="form-check-label" for="checkq18-5">
                                5. ช่วยทุกครั้ง
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 19.
                                โดยรวมแล้วท่านเต็มใจและยินดี ในการทำประโยชน์เพื่อส่วนรวม หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-1" value="1">
                            <label class="form-check-label" for="checkq19-1">
                                1. ไม่เต็มใจ/ เต็มใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-2" value="2">
                            <label class="form-check-label" for="checkq19-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-3" value="3">
                            <label class="form-check-label" for="checkq19-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-4" value="4">
                            <label class="form-check-label" for="checkq19-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q19" type="radio" name="q19" id="checkq19-5" value="5">
                            <label class="form-check-label" for="checkq19-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 20.
                                โดยรวมแล้วท่านเข้าร่วมกิจกรรมที่เป็นประโยชน์ต่อสังคม เช่น การปลูกป่า การบริจาคสิ่งของ
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-1" value="1">
                            <label class="form-check-label" for="checkq20-1">
                                1. ไม่เข้าร่วม/เข้าร่วมน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-2" value="2">
                            <label class="form-check-label" for="checkq20-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-3" value="3">
                            <label class="form-check-label" for="checkq20-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-4" value="4">
                            <label class="form-check-label" for="checkq20-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q20" type="radio" name="q20" id="checkq20-5" value="5">
                            <label class="form-check-label" for="checkq20-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 21.
                                โดยรวมแล้วท่านได้ทำกิจกรรมที่สามารถทำได้ด้วยตนเองและมีประโยชน์ต่อสังคม เช่น การคัดแยกขยะ
                                การลดใช้ถุงพลาสติก หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-1" value="1">
                            <label class="form-check-label" for="checkq21-1">
                                1. ไม่ทำ/ ทำน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-2" value="2">
                            <label class="form-check-label" for="checkq21-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-3" value="3">
                            <label class="form-check-label" for="checkq21-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-4" value="4">
                            <label class="form-check-label" for="checkq21-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q21" type="radio" name="q21" id="checkq21-5" value="5">
                            <label class="form-check-label" for="checkq21-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> CV3.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติน้ำใจดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-1" value="1">
                            <label class="form-check-label" for="checkcv3-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-2" value="2">
                            <label class="form-check-label" for="checkcv3-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-3" value="3">
                            <label class="form-check-label" for="checkcv3-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-4" value="4">
                            <label class="form-check-label" for="checkcv3-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv3" type="radio" name="cv3" id="checkcv3-5" value="5">
                            <label class="form-check-label" for="checkcv3-5">
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
            <script src="../jsStaff/jspage3.js"></script>
        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>