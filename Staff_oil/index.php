<?php
session_start();
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
    <?php include '../function/staffNumText.php' ?>
    <div class="container" style="margin-top:2rem;">
        <div class="col-md-12">
            <p style="text-align:center"><span style="font-size:20px"><strong>แบบสำรวจคุณภาพชีวิต ความสุขและความผูกพันในองค์กรของคนทำงาน
                        <br />HAPPINOMETER
                    </strong></span></p>

            <p style="text-align:center"><strong><span style="font-size:18px">บริษัท ธนากรผลิตภัณฑ์น้ำมันพืช</span></strong><br /> <br><span style="font-size: 25px;"><img src="../img/undraw_Diary_re_4jpc.png" width="200px"></br>พนักงานประจำ /แผนก</span>
                &nbsp;</p>
            <hr>
            <div class="d-grid gap-2">
                <a href="detail.php" type="button" name="" id="" class="btn btn-primary">เอกสารชี้แจงในการตอบแบบสำรวจ</a>
            </div>
        </div>
    </div>
    <?php include '../title/footer.php' ?>

</body>

</html>