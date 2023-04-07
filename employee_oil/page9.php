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
                <h4>Happy Work Life (Happy Plus) / การงานดี</h4>
            </div>



            <form action="page9Insert.php" method="post" class="btnsub">
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">43. งานของท่าน
                                มีความท้าทายและส่งเสริมให้ท่านได้เรียนรู้สิ่งใหม่ๆ หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-1" value="1">
                            <label class="form-check-label" for="checkq43-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-2" value="2">
                            <label class="form-check-label" for="checkq43-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-3" value="3">
                            <label class="form-check-label" for="checkq43-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-4" value="4">
                            <label class="form-check-label" for="checkq43-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q43" type="radio" name="q43" id="checkq43-5" value="5">
                            <label class="form-check-label" for="checkq43-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">44. งานของท่าน
                                มีความชัดเจนของโอกาสในการเติบโตในตำแหน่ง หน้าที่หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-1" value="1">
                            <label class="form-check-label" for="checkq44-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-2" value="2">
                            <label class="form-check-label" for="checkq44-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-3" value="3">
                            <label class="form-check-label" for="checkq44-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-4" value="4">
                            <label class="form-check-label" for="checkq44-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q44" type="radio" name="q44" id="checkq44-5" value="5">
                            <label class="form-check-label" for="checkq44-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">45.
                                งานของท่านในขณะนี้มีความมั่นคง หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-1" value="1">
                            <label class="form-check-label" for="checkq45-1">
                                1. ไม่มั่นคง/ มั่นคงน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-2" value="2">
                            <label class="form-check-label" for="checkq45-2">
                                2. มั่นคงน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-3" value="3">
                            <label class="form-check-label" for="checkq45-3">
                                3. มั่นคงปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-4" value="4">
                            <label class="form-check-label" for="checkq45-4">
                                4. มั่นคงมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q45" type="radio" name="q45" id="checkq45-5" value="5">
                            <label class="form-check-label" for="checkq45-5">
                                5. มั่นคงมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">46. ในการทำงาน
                                ท่านสามารถแสดงความคิดเห็นและมีส่วนร่วมในข้อเสนอแนะกับนายจ้าง หรือหัวหน้างาน
                                หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-1" value="1">
                            <label class="form-check-label" for="checkq46-1">
                                1. ไม่มีส่วนร่วม/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-2" value="2">
                            <label class="form-check-label" for="checkq46-2">
                                2. มีส่วนร่วมบ้างเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-3" value="3">
                            <label class="form-check-label" for="checkq46-3">
                                3. มีส่วนร่วมปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-4" value="4">
                            <label class="form-check-label" for="checkq46-4">
                                4. มีส่วนร่วมมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q46" type="radio" name="q46" id="checkq46-5" value="5">
                            <label class="form-check-label" for="checkq46-5">
                                5. มีส่วนร่วมมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">47. ท่านได้รับ
                                การปฏิบัติอย่างถูกต้องตามกฎหมายแรงงาน/ พ.ร.บ.ข้าราชการ 2551/ พรบ.
                                แรงงานรัฐวิสาหกิจสัมพันธ์
                                2547/ กฎหมายอื่น ๆ จากองค์กรของท่าน หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-1" value="1">
                            <label class="form-check-label" for="checkq47-1">
                                1. ไม่ได้เลย/ ได้รับน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-2" value="2">
                            <label class="form-check-label" for="checkq47-2">
                                2. ได้รับเล็กน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-3" value="3">
                            <label class="form-check-label" for="checkq47-3">
                                3. ได้รับพอสมควร
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-4" value="4">
                            <label class="form-check-label" for="checkq47-4">
                                4. ได้รับมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q47" type="radio" name="q47" id="checkq47-5" value="5">
                            <label class="form-check-label" for="checkq47-5">
                                5. ได้รับมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">48.
                                ท่านได้รับการพิจารณาเลื่อนขั้น/ เลื่อนตำแหน่ง/ ปรับขึ้นเงินค่าจ้างประจำ
                                ในปีที่ผ่านมาด้วยความเหมาะสมหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-1" value="1">
                            <label class="form-check-label" for="checkq48-1">
                                1. ไม่เหมาะสม/ เหมาะสมน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-2" value="2">
                            <label class="form-check-label" for="checkq48-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-3" value="3">
                            <label class="form-check-label" for="checkq48-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-4" value="4">
                            <label class="form-check-label" for="checkq48-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q48" type="radio" name="q48" id="checkq48-5" value="5">
                            <label class="form-check-label" for="checkq48-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">49. ความถูกต้อง
                                ของการจ่ายค่าจ้าง ค่าล่วงเวลา ฯลฯ
                                ที่ท่านได้รับจากองค์กรของท่านเป็นอย่างไร</span></label>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-1" value="1">
                            <label class="form-check-label" for="checkq49-1">
                                1. ไม่ถูกต้องทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-2" value="2">
                            <label class="form-check-label" for="checkq49-2">
                                2. ไม่ถูกต้องบ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-3" value="3">
                            <label class="form-check-label" for="checkq49-3">
                                3. ถูกต้องบ้างเป็นบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-4" value="4">
                            <label class="form-check-label" for="checkq49-4">
                                4. ถูกต้องเกือบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q49" type="radio" name="q49" id="checkq49-5" value="5">
                            <label class="form-check-label" for="checkq49-5">
                                5. ถูกต้องทุกครั้ง
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">50. ความตรงเวลา
                                ของการจ่ายค่าจ้าง ค่าล่วงเวลา ฯลฯ
                                ที่ท่านได้รับจากองค์กรของท่านเป็นอย่างไร</span></label>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-1" value="1">
                            <label class="form-check-label" for="checkq50-1">
                                1. ไม่ตรงเวลาทุกครั้งด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-2" value="2">
                            <label class="form-check-label" for="checkq50-2">
                                2. ไม่ตรงเวลาบ่อยครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-3" value="3">
                            <label class="form-check-label" for="checkq50-3">
                                3. ตรงเวลาบ้างเป็นบางครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-4" value="4">
                            <label class="form-check-label" for="checkq50-4">
                                4. ตรงเวลาเกือบทุกครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q50" type="radio" name="q50" id="checkq50-5" value="5">
                            <label class="form-check-label" for="checkq50-5">
                                5. ตรงเวลาทุกครั้ง
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">51.
                                ค่าตอบแทนที่ท่านได้รับคุ้มค่ากับความเสี่ยงที่อาจเกิดจากการทำงาน (การถูกฟ้องร้อง/
                                การได้รับอันตรายจากการ
                                ทำงาน ฯลฯ) หรือไม่
                            </span></label>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-1" value="1">
                            <label class="form-check-label" for="checkq51-1">
                                1. ไม่คุ้มค่า/ คุ้มค่าน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-2" value="2">
                            <label class="form-check-label" for="checkq51-2">
                                2. คุ้มค่าน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-3" value="3">
                            <label class="form-check-label" for="checkq51-3">
                                3. คุ้มค่าปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-4" value="4">
                            <label class="form-check-label" for="checkq51-4">
                                4. คุ้มค่ามาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q51" type="radio" name="q51" id="checkq51-5" value="5">
                            <label class="form-check-label" for="checkq51-5">
                                5. คุ้มค่ามากที่สุด
                            </label>
                        </div>
                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">52.
                                ท่านได้รับการดูแลเกี่ยวกับสุขภาพที่ดีจากองค์กร หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-1" value="1">
                            <label class="form-check-label" for="checkq52-1">
                                1. ไม่ได้รับ/ ได้รับน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-2" value="2">
                            <label class="form-check-label" for="checkq52-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-3" value="3">
                            <label class="form-check-label" for="checkq52-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-4" value="4">
                            <label class="form-check-label" for="checkq52-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q52" type="radio" name="q52" id="checkq52-5" value="5">
                            <label class="form-check-label" for="checkq52-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">53.
                                ท่านพึงพอใจต่อสภาพแวดล้อมโดยรวมขององค์กร หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-1" value="1">
                            <label class="form-check-label" for="checkq53-1">
                                1. ไม่พอใจเลย/ พอใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-2" value="2">
                            <label class="form-check-label" for="checkq53-2">
                                2. พอใจน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-3" value="3">
                            <label class="form-check-label" for="checkq53-3">
                                3. พอใจปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-4" value="4">
                            <label class="form-check-label" for="checkq53-4">
                                4. พอใจมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q53" type="radio" name="q53" id="checkq53-5" value="5">
                            <label class="form-check-label" for="checkq53-5">
                                5. พอใจมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">54.
                                ท่านพึงพอใจกับสวัสดิการที่องค์กรจัดให้หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-1" value="1">
                            <label class="form-check-label" for="checkq54-1">
                                1. ไม่พอใจเลย/ พอใจน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-2" value="2">
                            <label class="form-check-label" for="checkq54-2">
                                2. พอใจน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-3" value="3">
                            <label class="form-check-label" for="checkq54-3">
                                3. พอใจปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-4" value="4">
                            <label class="form-check-label" for="checkq54-4">
                                4. พอใจมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q54" type="radio" name="q54" id="checkq54-5" value="5">
                            <label class="form-check-label" for="checkq54-5">
                                5. พอใจมากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">55.
                                โดยรวมแล้วที่ทำงานของท่านให้ความสำคัญกับการทำงานเป็นทีมหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-1" value="1">
                            <label class="form-check-label" for="checkq55-1">
                                1. ไม่ให้/ ให้น้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-2" value="2">
                            <label class="form-check-label" for="checkq55-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-3" value="3">
                            <label class="form-check-label" for="checkq55-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-4" value="4">
                            <label class="form-check-label" for="checkq55-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q55" type="radio" name="q55" id="checkq55-5" value="5">
                            <label class="form-check-label" for="checkq55-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">56.
                                โดยรวมแล้วความสัมพันธ์ในที่ทำงานของท่านเหมือนพี่เหมือนน้อง หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-1" value="1">
                            <label class="form-check-label" for="checkq56-1">
                                1. ไม่เหมือน/เหมือนน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-2" value="2">
                            <label class="form-check-label" for="checkq56-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-3" value="3">
                            <label class="form-check-label" for="checkq56-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-4" value="4">
                            <label class="form-check-label" for="checkq56-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q56" type="radio" name="q56" id="checkq56-5" value="5">
                            <label class="form-check-label" for="checkq56-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">57.
                                โดยรวมแล้วท่านสื่อสารพูดคุยกับเพื่อนร่วมงานในที่ทำงานหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-1" value="1">
                            <label class="form-check-label" for="checkq57-1">
                                1. ไม่สื่อสารเลย/ สื่อสารน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-2" value="2">
                            <label class="form-check-label" for="checkq57-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-3" value="3">
                            <label class="form-check-label" for="checkq57-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-4" value="4">
                            <label class="form-check-label" for="checkq57-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q57" type="radio" name="q57" id="checkq57-5" value="5">
                            <label class="form-check-label" for="checkq57-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">58.
                                โดยรวมแล้วในที่ทำงานของท่านมีการถ่ายทอดแลกเปลี่ยนแบบอย่างการทำงานระหว่างกันหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-1" value="1">
                            <label class="form-check-label" for="checkq58-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-2" value="2">
                            <label class="form-check-label" for="checkq58-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-3" value="3">
                            <label class="form-check-label" for="checkq58-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-4" value="4">
                            <label class="form-check-label" for="checkq58-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q58" type="radio" name="q58" id="checkq58-5" value="5">
                            <label class="form-check-label" for="checkq58-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">59.
                                โดยรวมแล้วท่านทำงานอย่างมี “ความสุข” หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-1" value="1">
                            <label class="form-check-label" for="checkq59-1">
                                1. ไม่มี/ มีน้อยที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-2" value="2">
                            <label class="form-check-label" for="checkq59-2">
                                2. น้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-3" value="3">
                            <label class="form-check-label" for="checkq59-3">
                                3. ปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-4" value="4">
                            <label class="form-check-label" for="checkq59-4">
                                4. มาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q59" type="radio" name="q59" id="checkq59-5" value="5">
                            <label class="form-check-label" for="checkq59-5">
                                5. มากที่สุด
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">CV9.
                                สถานการณ์การแพร่ระบาดโควิด-19 มีผลกระทบต่อภาพรวมในมิติการงานดี
                                ของท่านเพียงใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-1" value="1">
                            <label class="form-check-label" for="checkcv9-1">
                                1. มีผลกระทบมากที่สุด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-2" value="2">
                            <label class="form-check-label" for="checkcv9-2">
                                2. มีผลกระทบมาก
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-3" value="3">
                            <label class="form-check-label" for="checkcv9-3">
                                3. มีผลกระทบปานกลาง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-4" value="4">
                            <label class="form-check-label" for="checkcv9-4">
                                4. มีผลกระทบน้อย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cv9" type="radio" name="cv9" id="checkcv9-5" value="5">
                            <label class="form-check-label" for="checkcv9-5">
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
            <script src="../jsStaff/jspage9.js"></script>

        </div>
    </div>
    <?php include '../title/footer.php' ?>
</body>

</html>