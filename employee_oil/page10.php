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
                <h4>ความผูกพัน</h4>
            </div>


            <form action="page10Insert.php" method="post" class="btnsub">

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">60.
                                ท่านจะแนะนำญาติ/เพื่อน/คนรู้จักมาทำงานที่องค์กรของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-1" value="1">
                            <label class="form-check-label" for="checkq60-1">
                                1. ไม่/ แนะนำน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-2" value="2">
                            <label class="form-check-label" for="checkq60-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-3" value="3">
                            <label class="form-check-label" for="checkq60-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-4" value="4">
                            <label class="form-check-label" for="checkq60-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q60" type="radio" name="q60" id="checkq60-5" value="5">
                            <label class="form-check-label" for="checkq60-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">61.
                                หากมีใครกล่าวถึงองค์กรในทางที่ไม่เหมาะสม ท่านจะปกป้ององค์กรของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-1" value="1">
                            <label class="form-check-label" for="checkq61-1">
                                1. ไม่/ ปกป้องน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-2" value="2">
                            <label class="form-check-label" for="checkq61-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-3" value="3">
                            <label class="form-check-label" for="checkq61-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-4" value="4">
                            <label class="form-check-label" for="checkq61-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q61" type="radio" name="q61" id="checkq61-5" value="5">
                            <label class="form-check-label" for="checkq61-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">62.
                                ท่านภาคภูมิใจที่ได้เป็นพนักงาน/ บุคลากรขององค์กร/
                                ได้ทำงานในองค์กรนี้หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-1" value="1">
                            <label class="form-check-label" for="checkq62-1">
                                1. ไม่ภาคภูมิใจ/ ภูมิใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-2" value="2">
                            <label class="form-check-label" for="checkq62-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-3" value="3">
                            <label class="form-check-label" for="checkq62-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-4" value="4">
                            <label class="form-check-label" for="checkq62-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q62" type="radio" name="q62" id="checkq62-5" value="5">
                            <label class="form-check-label" for="checkq62-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">63.
                                ขณะที่ทำงานอยู่ในองค์กรนี้ หากท่านมีโอกาสได้ศึกษาต่อและเมื่อสำเร็จการศึกษาแล้ว
                                ท่านจะทำงานต่อหรือว่าลาออก</span></label>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-1" value="1">
                            <label class="form-check-label" for="checkq63-1">
                                1. ลาออกแน่นอน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-2" value="2">
                            <label class="form-check-label" for="checkq63-2">
                                2. อาจจะลาออก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-3" value="3">
                            <label class="form-check-label" for="checkq63-3">
                                3. น่าจะลาออก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-4" value="4">
                            <label class="form-check-label" for="checkq63-4">
                                4. ไม่ลาออก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q63" type="radio" name="q63" id="checkq63-5" value="5">
                            <label class="form-check-label" for="checkq63-5">
                                5. ไม่ลาออกแน่นอน
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">64.
                                ถ้าท่านมีโอกาสเปลี่ยนสถานที่ทำงาน หรือองค์กรอื่นชวน/ติดต่อไปทำงาน ท่านพร้อมที่จะไป
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-1" value="1">
                            <label class="form-check-label" for="checkq64-1">
                                1. ไปแน่นอน/ ไปทันที
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-2" value="2">
                            <label class="form-check-label" for="checkq64-2">
                                2. คิดว่าจะไป
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-3" value="3">
                            <label class="form-check-label" for="checkq64-3">
                                3. ไม่แน่ใจ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-4" value="4">
                            <label class="form-check-label" for="checkq64-4">
                                4. ไม่ไป
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q64" type="radio" name="q64" id="checkq64-5" value="5">
                            <label class="form-check-label" for="checkq64-5">
                                5. ไม่ไปแน่นอน
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">65.
                                ท่านรู้สึกเป็นเจ้าของร่วมขององค์กรที่ท่านทำงานในปัจจุบัน หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-1" value="1">
                            <label class="form-check-label" for="checkq65-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-2" value="2">
                            <label class="form-check-label" for="checkq65-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-3" value="3">
                            <label class="form-check-label" for="checkq65-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-4" value="4">
                            <label class="form-check-label" for="checkq65-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q65" type="radio" name="q65" id="checkq65-5" value="5">
                            <label class="form-check-label" for="checkq65-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">66.
                                ท่านทุ่มเททำงานเพื่อประโยชน์ขององค์กรของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-1" value="1">
                            <label class="form-check-label" for="checkq66-1">
                                1. ไม่/ ทุ่มเทน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-2" value="2">
                            <label class="form-check-label" for="checkq66-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-3" value="3">
                            <label class="form-check-label" for="checkq66-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-4" value="4">
                            <label class="form-check-label" for="checkq66-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q66" type="radio" name="q66" id="checkq66-5" value="5">
                            <label class="form-check-label" for="checkq66-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">67. ท่านเป็นคน คิดใหม่
                                ทำใหม่ เพื่อสร้างความก้าวหน้าให้กับองค์กรของท่านหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-1" value="1">
                            <label class="form-check-label" for="checkq67-1">
                                1. ไม่/ น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-2" value="2">
                            <label class="form-check-label" for="checkq67-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-3" value="3">
                            <label class="form-check-label" for="checkq67-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-4" value="4">
                            <label class="form-check-label" for="checkq67-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q67" type="radio" name="q67" id="checkq67-5" value="5">
                            <label class="form-check-label" for="checkq67-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">68. ในแต่ละวัน
                                ท่านทำงานอย่างมีเป้าหมาย หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-1" value="1">
                            <label class="form-check-label" for="checkq68-1">
                                1. ไม่/ น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-2" value="2">
                            <label class="form-check-label" for="checkq68-2">
                                2.น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-3" value="3">
                            <label class="form-check-label" for="checkq68-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-4" value="4">
                            <label class="form-check-label" for="checkq68-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q68" type="radio" name="q68" id="checkq68-5" value="5">
                            <label class="form-check-label" for="checkq68-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </form>


            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStaff/jspage10.js"></script>

        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>