<?php
session_start();
include  '../session/sessionadmin.php';
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
    <?php
    $stmtS = $conStaff->prepare("SELECT* FROM insert_data WHERE groups = ? ORDER BY id DESC");
    $stmtS->execute(["s"]);
    $row = $stmtS->rowCount();
    $date = $stmtS->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container" style="margin-top:3rem;">
        <div class="col-md-12">

            <h5>แบบสอบถามของพนักงานประจำ /แผนก</h5>

            <p>จำนวนผู้ตอบทั้งหมด <?= $row ?> คน ตอบล่าสุดเมื่อวันที่ <?= $date["date"] ?> <a href="adminExcalStaff.php?g=s&n=พนักงานประจำแผนก" target="_blank">Download Excal</a>

            </p>

        </div>
        <hr>
    </div>

    <?php
    $stmtU = $conStaff->prepare("SELECT* FROM insert_data WHERE groups = ? ORDER BY id DESC");
    $stmtU->execute(["u"]);
    $row = $stmtU->rowCount();
    $date = $stmtU->fetch(PDO::FETCH_ASSOC);

    ?>
    <div class="container" style="margin-top:3rem;">
        <div class="col-md-12">

            <h5>แบบสอบถามของพนักงาน Outsource / สังกัด</h5>

            <p>จำนวนผู้ตอบทั้งหมด <?= $row ?> คน ตอบล่าสุดเมื่อวันที่ <?= $date["date"] ?> <a href="adminExcalStaff.php?g=u&n=พนักงานOutsource สังกัด" target="_blank">Download Excal</a>

            </p>

        </div>
    </div>
    <?php include '../title/footer.php' ?>

</body>

</html>