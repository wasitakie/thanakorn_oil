<?php
session_start();
include '../config/connect.php';
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

            <form action="pageInsert.php" method="post" class="btnsub">

                <div class="headpage">
                    <h4>ส่วนที่ 1: ข้อมูลหน่วยงาน</h4>
                </div>
                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.1 ชื่อหน่วยงาน </span></label>
                                <div class="form-check">
                                    <label type="text" for="formGroupExampleInput" class="form-label">บริษัท ธนากรผลิตภัณฑ์น้ำมันพืช จำกัด 99 หมู่ 2 ซ.ธนากร ถ.พระสมุทรเจดีย์ ต.ปากคลองบางปลากด อ.พระสมุทรเจดีย์ จ.สมุทรปราการ 10290</label>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.2 ประเภทหน่วยงาน/ องค์กร </span></label>
                                <div class="form-check">
                                    <label type="text" for="formGroupExampleInput" class="form-label">หน่วยงานเอกชน</label>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.3 หน่วยงาน/ องค์กร ของท่านมีขนาดใด </span></label>
                                <div class="form-check">
                                    <label type="text" for="formGroupExampleInput" class="form-label">ชนาดใหญ่ 201-500 คน</label>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        1.4 หน่วยงาน/ องค์กร ที่ท่านทำงานอยู่เป็นลักษณะใด </span></label>
                                <div class="form-check">
                                    <label type="text" for="formGroupExampleInput" class="form-label">สำนักงานใหญ่</label>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <?php
                if ($_SESSION["checkGroup"] == "s") {
                    $headText = "รายแผนก / สังกัด";
                    $db = 'grop_1';
                    $gname = 'g1_name';
                } elseif ($_SESSION["checkGroup"] == "u") {
                    $headText = "พนักงาน Outsource / สังกัด";
                    $db = 'grop_2';
                    $gname = 'g2_name';
                }
                ?>

                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="text" for="formGroupExampleInput " class="form-label">
                                    <span class="textQ">
                                        1.5 <?= $headText ?></span></label>
                                <select class="form-select a1" name="a1" aria-label="Default select example" id="a1">
                                    <option value="0">-- <?= $headText ?> --</option>
                                    <option value="0">----------------------------</option>
                                    <?php
                                    $se = $conStaff->prepare("SELECT* FROM " . $db . "");
                                    $se->execute();
                                    while ($row = $se->fetch(PDO::FETCH_ASSOC)) {


                                    ?>
                                        <option value="<?= $row[$gname] ?>"><?= $row[$gname]  ?></option>
                                    <?php

                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                    </div>

                </div>









                <div class="headpage">
                    <h4>ส่วนที่ 2: ข้อมูลทั่วไป</h4>
                </div>

                <div class="box">
                    <div class="question">
                        <div class="row g-3">
                            <div class="col">
                                <label type="number" for="formGroupExampleInput" class="form-label"><span class="textQ">
                                        2.1 เพศ</span></label>
                                <div class="form-check">
                                    <input class="form-check-input sex" type="radio" name="sex" id="checksex-1" value="1">
                                    <label class="form-check-label" for="checksex-1">
                                        1. ชาย
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input sex1" type="radio" name="sex" id="checksex-2" value="2">
                                    <label class="form-check-label" for="checksex-2">
                                        2. หญิง
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input sex1" type="radio" name="sex" id="checksex-3" value="3">
                                    <label class="form-check-label" for="checksex-3">
                                        3. เพศหลากหลาย
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ"> 2.2 อายุ</span></label>
                        <div class="mb-3">
                            <input type="number" class="form-control age" style="width:100px" name="age" placeholder="อายุ..ปี" onKeyPress="if(this.value.length==3)">
                        </div>
                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.3 จังหวัดที่ท่านอาศัยอยู่ในปัจจุบันเป็นจังหวัดเดียวกับภูมิลำเนาหรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-3" type="radio" name="q2-3" id="checkq2-3-1" value="1">
                            <label class="form-check-label" for="checkq2-3-1">
                                1. ใช่
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-3" type="radio" name="q2-3" id="checkq2-3-2" value="2">
                            <label class="form-check-label" for="checkq2-3-2">
                                2. ไม่ใช่
                            </label>
                        </div>

                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.4 ปัจจุบันท่านพักอาศัยอยู่ในลักษณะที่พักอาศัยแบบใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-1" value="1">
                            <label class="form-check-label" for="checkq2-4-1">
                                1. บ้านที่ท่านเป็นเจ้าของ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-2" value="2">
                            <label class="form-check-label" for="checkq2-4-2">
                                2. บ้านผ่อน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-3" value="3">
                            <label class="form-check-label" for="checkq2-4-3">
                                3. บ้านเช่า/ ห้องเช่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-4" value="4">
                            <label class="form-check-label" for="checkq2-4-4">
                                4. บ้าน/ ห้อง ไม่เสียค่าเช่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-5" value="5">
                            <label class="form-check-label" for="checkq2-4-5">
                                5. คอนโด/ อพาร์ทเม้นท์ที่ท่านเป็นเจ้าของ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-6" value="6">
                            <label class="form-check-label" for="checkq2-4-6">
                                6. คอนโด/ อพาร์ทเม้นท์ ผ่อน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-7" value="7">
                            <label class="form-check-label" for="checkq2-4-7">
                                7. คอนโด/ อพาร์ทเม้นท์เช่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-4" type="radio" name="q2-4" id="checkq2-4-8" value="8">
                            <label class="form-check-label" for="checkq2-4-8">
                                8. คอนโด/ อพาร์ทเม้นท์ ไม่เสียค่าเช่า
                            </label>
                        </div>


                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.5 ปัจจุบัน โดยส่วนใหญ่ท่านอาศัยอยู่กับใครบ้าง (ตอบได้มากกว่า 1 ข้อ)</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_1" type="checkbox" value="1" id="checkq2-5-1">
                            <label class="form-check-label" for="checkq2-5-1">
                                1. อยู่คนเดียว
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_2" type="checkbox" value="2" id="checkq2-5-2">
                            <label class="form-check-label" for="checkq2-5-2">
                                2. คู่สมรส (สามี/ภรรยา)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_3" type="checkbox" value="3" id="checkq2-5-3">
                            <label class="form-check-label" for="checkq2-5-3">
                                3. พี่/น้อง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_4" type="checkbox" value="4" id="checkq2-5-4">
                            <label class="form-check-label" for="checkq2-5-4">
                                4. พ่อแม่/พ่อแม่บุญธรรม/พ่อแม่เลี้ยง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_5" type="checkbox" value="5" id="checkq2-5-5">
                            <label class="form-check-label" for="checkq2-5-5">
                                5. ปู่ ย่า ตา ยาย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_6" type="checkbox" value="6" id="checkq2-5-6">
                            <label class="form-check-label" for="checkq2-5-6">
                                6. ลูก/ลูกบุญธรรม/ลูกเลี้ยง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_7" type="checkbox" value="7" id="checkq2-5-7">
                            <label class="form-check-label" for="checkq2-5-7">
                                7. ญาติอื่นๆ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_8" type="checkbox" value="8" id="checkq2-5-8">
                            <label class="form-check-label" for="checkq2-5-8">
                                8. เพื่อน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5" name="q2_5_9" type="checkbox" value="9" id="checkq2-5-9">
                            <label class="form-check-label" for="checkq2-5-9">
                                9. คู่รัก/ คนรัก/ แฟน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-5t" name="q2_5_10" type="checkbox" value="10" id="checkq2-5-10">
                            <label class="form-check-label" for="checkq2-5-10">
                                10. อื่น ๆ ระบุ
                                <input type="text" class="form-control " id="q2-5t" style="width:200px" name="q2-5t" placeholder="ระบุ">
                            </label>
                        </div>

                    </div>
                </div>




                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.6 ท่านจบการศึกษาสูงสุด ในระดับใด (ไม่รวมระดับการศึกษาที่ยังไม่สำเร็จการศึกษา)</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-1" value="1">
                            <label class="form-check-label" for="checkq2-6-1">
                                1. ประถมศึกษาหรือต่ำกว่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-2" value="2">
                            <label class="form-check-label" for="checkq2-6-2">
                                2. มัธยมศึกษาตอนต้น
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-3" value="3">
                            <label class="form-check-label" for="checkq2-6-3">
                                3. มัธยมศึกษาตอนปลาย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-4" value="4">
                            <label class="form-check-label" for="checkq2-6-4">
                                4. ปวช.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-5" value="5">
                            <label class="form-check-label" for="checkq2-6-5">
                                5. ปวส.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-6" value="6">
                            <label class="form-check-label" for="checkq2-6-6">
                                6. อนุปริญญาหรือเทียบเท่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-7" value="7">
                            <label class="form-check-label" for="checkq2-6-7">
                                7. ปริญญาตรี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-8" value="8">
                            <label class="form-check-label" for="checkq2-6-8">
                                8. สูงกว่าปริญญาตรี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6" type="radio" name="q2-6" id="checkq2-6-9" value="9">
                            <label class="form-check-label" for="checkq2-6-9">
                                9. ไม่ได้รับการศึกษา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-6t" name="q2-6" type="radio" value="10" id="checkq2-6-10">
                            <label class="form-check-label" for="checkq2-6-10">
                                10. อื่น ๆ ระบุ
                                <input type="text" class="form-control " id="q2-6t" style="width:200px" name="q2-6t" placeholder="ระบุ">
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.7 สถานภาพสมรส</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-7" type="radio" name="q2-7" id="checkq2-7-1" value="1">
                            <label class="form-check-label" for="checkq2-7-1">
                                1. โสด
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-7" type="radio" name="q2-7" id="checkq2-7-2" value="2">
                            <label class="form-check-label" for="checkq2-7-2">
                                2. แต่งงานและอยู่ร่วมกัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-7" type="radio" name="q2-7" id="checkq2-7-3" value="3">
                            <label class="form-check-label" for="checkq2-7-3">
                                3. แต่งงานแต่ไม่ได้อยู่ด้วยกัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-7" type="radio" name="q2-7" id="checkq2-7-4" value="4">
                            <label class="form-check-label" for="checkq2-7-4">
                                4. อยู่ด้วยกันโดยไม่ได้แต่งงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-7" type="radio" name="q2-7" id="checkq2-7-5" value="5">
                            <label class="form-check-label" for="checkq2-7-5">
                                5. หม้าย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-7" type="radio" name="q2-7" id="checkq2-7-6" value="6">
                            <label class="form-check-label" for="checkq2-7-6">
                                6. หย่า/ แยกทาง/ เลิกกัน
                            </label>
                        </div>


                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.8 ท่านมีบุตรหรือไม่ (รวมลูกบุญธรรม/ ลูกติด/ ลูกเลี้ยง)</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-8" type="radio" name="q2-8" id="checkq2-8-1" value="1">
                            <label class="form-check-label" for="checkq2-8-1">
                                1. ไม่มี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-8" type="radio" name="q2-8" id="checkq2-8-2" value="2">
                            <label class="form-check-label" for="checkq2-8-2">
                                2. มี จำนวน 1 คน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-8" type="radio" name="q2-8" id="checkq2-8-3" value="3">
                            <label class="form-check-label" for="checkq2-8-3">
                                3. มี จำนวน 2 คน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-8" type="radio" name="q2-8" id="checkq2-8-4" value="4">
                            <label class="form-check-label" for="checkq2-8-4">
                                4. มี จำนวน 3-4 คน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-8" type="radio" name="q2-8" id="checkq2-8-5" value="5">
                            <label class="form-check-label" for="checkq2-8-5">
                                5. มี จำนวนตั้งแต่ 5 คนขึ้นไป
                            </label>
                        </div>


                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.9 ขณะนี้ท่านกำลังตั้งครรภ์หรือไม่ </span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-9" type="radio" name="q2-9" id="checkq2-9-1" value="1">
                            <label class="form-check-label" for="checkq2-9-1">
                                1. ตั้งครรภ์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-9" type="radio" name="q2-9" id="checkq2-9-2" value="2">
                            <label class="form-check-label" for="checkq2-9-2">
                                2. ไม่ได้ตั้งครรภ์
                            </label>
                        </div>

                    </div>
                </div>



                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.10 งานที่ท่านทำเป็นงานลักษณะใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-10" type="radio" name="q2-10" id="checkq2-10-1" value="1">
                            <label class="form-check-label" for="checkq2-10-1">
                                1. งานสำนักงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-10" type="radio" name="q2-10" id="checkq2-10-2" value="2">
                            <label class="form-check-label" for="checkq2-10-2">
                                2. งานด้านการผลิต
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-10" type="radio" name="q2-10" id="checkq2-10-3" value="3">
                            <label class="form-check-label" for="checkq2-10-3">
                                3. งานด้านการบริการ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-10" type="radio" name="q2-10" id="checkq2-10-4" value="4">
                            <label class="form-check-label" for="checkq2-10-4">
                                4. งานด้านบริหาร
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input q2-10t" name="q2-10" type="radio" value="5" id="checkq2-10-5">
                            <label class="form-check-label" for="checkq2-10-5">
                                5. งานด้านอื่น ๆ ระบุ
                                <input type="text" class="form-control " id="q2-10t" style="width:200px" name="q2-10t" placeholder="ระบุ">
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.11 ท่านปฏิบัติงานในระดับตำแหน่งใด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-11" type="radio" name="q2-11" id="checkq2-11-1" value="1">
                            <label class="form-check-label" for="checkq2-11-1">
                                1. ระดับผู้ปฏิบัติงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-11" type="radio" name="q2-11" id="checkq2-11-2" value="2">
                            <label class="form-check-label" for="checkq2-11-2">
                                2. ระดับหัวหน้างาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-11" type="radio" name="q2-11" id="checkq2-11-3" value="3">
                            <label class="form-check-label" for="checkq2-11-3">
                                3. ระดับผู้บริหารองค์กร
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-11t" name="q2-11" type="radio" value="4" id="checkq2-11-4">
                            <label class="form-check-label" for="checkq2-11-4">
                                4. อื่น ๆ ระบุ
                                <input type="text" class="form-control " id="q2-11t" style="width:200px" name="q2-11t" placeholder="ระบุ">
                            </label>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.12 สถานภาพการจ้างงาน</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-12" type="radio" name="q2-12" id="checkq2-12-1" value="1">
                            <label class="form-check-label" for="checkq2-12-1">
                                1. ประจำ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-12" type="radio" name="q2-12" id="checkq2-12-2" value="2">
                            <label class="form-check-label" for="checkq2-12-2">
                                2. ตามสัญญาจ้าง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-12" type="radio" name="q2-12" id="checkq2-12-3" value="3">
                            <label class="form-check-label" for="checkq2-12-3">
                                3. รายวัน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-12" type="radio" name="q2-12" id="checkq2-12-4" value="4">
                            <label class="form-check-label" for="checkq2-12-4">
                                4. บางช่วงเวลา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-12" type="radio" name="q2-12" id="checkq2-12-5" value="5">
                            <label class="form-check-label" for="checkq2-12-5">
                                5. ตามผลงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-12" type="radio" name="q2-12" id="checkq2-12-6" value="6">
                            <label class="form-check-label" for="checkq2-12-6">
                                6. จ้างเหมา
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input q2-12t" name="q2-12" type="radio" value="7" id="checkq2-12-7">
                            <label class="form-check-label" for="checkq2-12-7">
                                7. อื่น ๆ ระบุ
                                <input type="text" class="form-control " id="q2-12t" style="width:200px" name="q2-12t" placeholder="ระบุ">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.13 ท่านทำงานเป็นกะ/ ทำงานเป็นรอบ/ เข้าเวร ใช่หรือไม่</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-13" type="radio" name="q2-13" id="checkq2-13-1" value="1">
                            <label class="form-check-label" for="checkq2-13-1">
                                1. ไม่ใช่
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-13" type="radio" name="q2-13" id="checkq2-13-2" value="2">
                            <label class="form-check-label" for="checkq2-13-2">
                                2. ทำงานเป็นกะ/ เข้าเวร
                            </label>
                        </div>

                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.14 ระยะเวลาที่ท่านทำงานในองค์กรปัจจุบัน รวมทั้งหมด</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-14" type="radio" name="q2-14" id="checkq2-14-1" value="1">
                            <label class="form-check-label" for="checkq2-14-1">
                                1. ไม่ถึงปี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-14" type="radio" name="q2-14" id="checkq2-14-2" value="2">
                            <label class="form-check-label" for="checkq2-14-2">
                                2. ระหว่าง 1 – 2 ปี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-14" type="radio" name="q2-14" id="checkq2-14-3" value="3">
                            <label class="form-check-label" for="checkq2-14-3">
                                3. ระหว่าง 3 – 5 ปี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-14" type="radio" name="q2-14" id="checkq2-14-4" value="4">
                            <label class="form-check-label" for="checkq2-14-4">
                                4. ระหว่าง 6 – 9 ปี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-14" type="radio" name="q2-14" id="checkq2-14-5" value="5">
                            <label class="form-check-label" for="checkq2-14-5">
                                5. ตั้งแต่ 10 ปี ขึ้นไป
                            </label>
                        </div>

                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.15 ตั้งแต่เริ่มทำงานจนถึงปัจจุบัน ท่านลาออก/ย้าย/เปลี่ยนงานมาแล้วกี่ครั้ง</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-15" type="radio" name="q2-15" id="checkq2-15-1" value="1">
                            <label class="form-check-label" for="checkq2-15-1">
                                1. ไม่เคยลาออก ย้ายเปลี่ยนงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-15" type="radio" name="q2-15" id="checkq2-15-2" value="2">
                            <label class="form-check-label" for="checkq2-15-2">
                                2. 1 - 3 ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-15" type="radio" name="q2-15" id="checkq2-15-3" value="3">
                            <label class="form-check-label" for="checkq2-15-3">
                                3. 4 - 6 ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-15" type="radio" name="q2-15" id="checkq2-15-4" value="4">
                            <label class="form-check-label" for="checkq2-15-4">
                                4. 7 - 9 ครั้ง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-15" type="radio" name="q2-15" id="checkq2-15-5" value="5">
                            <label class="form-check-label" for="checkq2-15-5">
                                5. 10 ครั้งขึ้นไป
                            </label>
                        </div>

                    </div>
                </div>


                <div class="box">
                    <div class="question">
                        <label for="formGroupExampleInput" class="form-label"><span class="textQ">2.16 ท่านมีรายได้ต่อเดือน โดยประมาณเดือนละเท่าใด (รายได้+เงินเดือน+ค่าตอบแทนอื่น ๆ)</span></label>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-1" value="1">
                            <label class="form-check-label" for="checkq2-16-1">
                                1. น้อยกว่า 10,000 บาท
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-2" value="2">
                            <label class="form-check-label" for="checkq2-16-2">
                                2. 10,001 - 20,000 บาท
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-3" value="3">
                            <label class="form-check-label" for="checkq2-16-3">
                                3. 20,001 - 30,000 บาท
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-4" value="4">
                            <label class="form-check-label" for="checkq2-16-4">
                                4. 30,001 - 40,000บาท
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-5" value="5">
                            <label class="form-check-label" for="checkq2-16-5">
                                5. 40,001 - 50,000 บาท
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-6" value="6">
                            <label class="form-check-label" for="checkq2-16-6">
                                6. 50,001 – 100,000 บาท
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q2-16" type="radio" name="q2-16" id="checkq2-16-7" value="7">
                            <label class="form-check-label" for="checkq2-16-7">
                                7. มากกว่า 100,000 บาท
                            </label>
                        </div>

                    </div>
                </div>




                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                </div>
            </form>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="../jsStaff/jspage.js"></script>




        </div>
    </div>

    <?php include '../title/footer.php' ?>
</body>

</html>