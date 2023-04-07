<?php
session_start();
include '../session/sessionuser.php';

$nm1 = number_format($_SESSION["sumNum1"], 2);
$nm2 = number_format($_SESSION["sumNum2"], 2);
$nm3 = number_format($_SESSION["sumNum3"], 2);
$nm4 = number_format($_SESSION["sumNum4"], 2);
$nm5 = number_format($_SESSION["sumNum5"], 2);
$nm6 = number_format($_SESSION["sumNum6"], 2);
$nm7 = number_format($_SESSION["sumNum7"], 2);
$nm8 = number_format($_SESSION["sumNum8"], 2);
$nm9 = number_format($_SESSION["sumNum9"], 2);
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php include '../banner/banner.php'; ?>
    <?php
    if ($nm1 <= '24.99') {
        $img_nm1 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm1 >= '25.00' and $nm1 <= '49.99') {
        $img_nm1 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm1 >= '50.00' and $nm1 <= '74.99') {
        $img_nm1 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm1 >= '75.00' and $nm1 <= '100.00') {
        $img_nm1 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm2 <= '24.99') {
        $img_nm2 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm2 >= '25.00' and $nm2 <= '49.99') {
        $img_nm2 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm2 >= '50.00' and $nm2 <= '74.99') {
        $img_nm2 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm2 >= '75.00' and $nm2 <= '100.00') {
        $img_nm2 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm3 <= '24.99') {
        $img_nm3 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm3 >= '25.00' and $nm3 <= '49.99') {
        $img_nm3 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm3 >= '50.00' and $nm3 <= '74.99') {
        $img_nm3 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm3 >= '75.00' and $nm3 <= '100.00') {
        $img_nm3 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm4 <= '24.99') {
        $img_nm4 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm4 >= '25.00' and $nm4 <= '49.99') {
        $img_nm4 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm4 >= '50.00' and $nm4 <= '74.99') {
        $img_nm4 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm4 >= '75.00' and $nm4 <= '100.00') {
        $img_nm4 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm5 <= '24.99') {
        $img_nm5 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm5 >= '25.00' and $nm5 <= '49.99') {
        $img_nm5 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm5 >= '50.00' and $nm5 <= '74.99') {
        $img_nm5 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm5 >= '75.00' and $nm5 <= '100.00') {
        $img_nm5 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm6 <= '24.99') {
        $img_nm6 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm6 >= '25.00' and $nm6 <= '49.99') {
        $img_nm6 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm6 >= '50.00' and $nm6 <= '74.99') {
        $img_nm6 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm6 >= '75.00' and $nm6 <= '100.00') {
        $img_nm6 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm7 <= '24.99') {
        $img_nm7 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm7 >= '25.00' and $nm7 <= '49.99') {
        $img_nm7 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm7 >= '50.00' and $nm7 <= '74.99') {
        $img_nm7 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm7 >= '75.00' and $nm7 <= '100.00') {
        $img_nm7 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm8 <= '24.99') {
        $img_nm8 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm8 >= '25.00' and $nm8 <= '49.99') {
        $img_nm8 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm8 >= '50.00' and $nm8 <= '74.99') {
        $img_nm8 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm8 >= '75.00' and $nm8 <= '100.00') {
        $img_nm8 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm9 <= '24.99') {
        $img_nm9 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm9 >= '25.00' and $nm9 <= '49.99') {
        $img_nm9 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm9 >= '50.00' and $nm9 <= '74.99') {
        $img_nm9 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm9 >= '75.00' and $nm9 <= '100.00') {
        $img_nm9 = '<img src="../img/h.png">' . '<br>Very Happy';
    }

    if ($nm10 <= '24.99') {
        $img_nm10 = '<img src="../img/v.png">' . '<br>Very Unhappy';
    } elseif ($nm10 >= '25.00' and $nm10 <= '49.99') {
        $img_nm10 = '<img src="../img/v.png">' . '<br>Unhappy';
    } elseif ($nm10 >= '50.00' and $nm10 <= '74.99') {
        $img_nm10 = '<img src="../img/u.png">' . '<br>Happy';
    } elseif ($nm10 >= '75.00' and $nm10 <= '100.00') {
        $img_nm10 = '<img src="../img/h.png">' . '<br>Very Happy';
    }
    $nm10 = number_format(($nm1 + $nm2 + $nm3 + $nm4 + $nm5 + $nm6 + $nm7 + $nm8 + $nm9) / 9, 2);

    $sex = $_SESSION["page_array"][1];
    $hi = $_SESSION["page1_array"][3] / 100;
    $hi2 = $hi * $hi;
    $wtb = $_SESSION["page1_array"][1];
    $weightBmi = $wtb / $hi2;

    $wt =  $_SESSION["page1_array"][2] / 0.39370;

    if ($sex == 1) {
        $sexTh = "ชาย";

        if ($weightBmi >= 90) {
            $wt = "ท่านอยู่ในภาวะลงพุง";
        } else {
            $wt = "ท่านไม่อยู่ในภาวะลงพุง";
        }
    } elseif ($sex == 2) {
        $sexTh = "หญิง";

        if ($weightBmi >= 80) {
            $wt = "ท่านอยู่ในภาวะลงพุง";
        } else {
            $wt = "ท่านไม่อยู่ในภาวะลงพุง";
        }
    } elseif ($sex == 3) {
        $sexTh = "เพศทางเลือก";

        if ($weightBmi >= 90) {
            $wt_sex1 = "ท่านอยู่ในภาวะลงพุง(ชาย)";
        } else {
            $wt_sex1 = "ท่านไม่อยู่ในภาวะลงพุง(ชาย)";
        }

        if ($weightBmi >= 90) {
            $wt_sex2 = "ท่านอยู่ในภาวะลงพุง(หญิง)";
        } else {
            $wt_sex2 = "ท่านไม่อยู่ในภาวะลงพุง(หญิง)";
        }
    }

    $heightBmi = $weightBmi;
    //echo "bmi=". $heightBmi = 24.9;

    if ($heightBmi >= 0 and $heightBmi <= 18.4) {
        $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักน้อย | <strong>ภาวะเสี่ยงต่อโรค : </strong>ต่ำ";
    } elseif ($heightBmi >= 18.5 and $heightBmi <= 22.9) {
        $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักปกติ | <strong>ภาวะเสี่ยงต่อโรค : </strong>เท่าคนปกติ";
    } elseif ($heightBmi >= 23.0 and $heightBmi <= 24.9) {
        $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักเกิน | <strong>ภาวะเสี่ยงต่อโรค : </strong>มากกว่าปกติ";
    } elseif ($heightBmi >= 25.0 and $heightBmi <= 29.9) {
        $bmi_text = " | <strong>น้ำหนัก : </strong>โรคอ้วน | <strong>ภาวะเสี่ยงต่อโรค : </strong>สูง";
    } elseif ($heightBmi >= 30.0) {
        $bmi_text = " | <strong>น้ำหนัก : </strong>อ้วนมาก | <strong>ภาวะเสี่ยงต่อโรค : </strong>อยู่ในช่วงอันตราย";
    }
    ?>
    <div class="container" style="margin-top : 1rem">
        <div class="col-md-12">
            <div class="">
                <h6>สรุปผลแบบสำรวจความสุขคนทำงานในองค์กร</h6>
                <div class="alert alert-warning" role="alert">
                    <div class="bmiText"><b><i class="fas fa-weight"></i> ค่าดัชนีมวลกาย (BMI)</b> :
                        <?= number_format($heightBmi, 2) . " " . $bmi_text ?></div>
                    <div class="bmiText"><b><i class="fas fa-user"></i> ค่าภาวะลงพุง</b> <i class="fas fa-venus-mars"></i> เพศที่ท่านระบุ</b> : <?= $sexTh ?> <b>&nbsp;&nbsp; :
                            <?= $wt . $wt_sex1 . " - " . $wt_sex2 ?></div>
                </div>

            </div>
            <div class="radar">
                <canvas id="myChart"></canvas>
            </div>
            <div class="">
                <h6>กราฟแท่งแสดงค่าเฉลี่ยความสุขรายมิติ</h6>
            </div>
            <div class="bar">
                <canvas id="myChart1"></canvas>
            </div>
        </div>

        <div class="table-responsive logoPic">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col"><img src="../img/logo1.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo2.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo3.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo4.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo5.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo6.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo7.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo8.png" class="logoimg" alt=""></th>
                        <th scope="col"><img src="../img/logo9.png" class="logoimg" alt=""></th>
                        <th scope="col"><span class="logoimgtext">ความสุขภาพรวม</span></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <tr>
                        <td>สุขภาพดี</td>
                        <td>ผ่อนคลายดี</td>
                        <td>น้ำใจดี</td>
                        <td>จิตวิญญาณดี</td>
                        <td>ครอบครัวดี</td>
                        <td>สังคมดี</td>
                        <td>ใฝ่รู้ดี</td>
                        <td>สุขภาพเงินดี</td>
                        <td>การงานดี</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?= $nm1 ?></td>
                        <td><?= $nm2 ?></td>
                        <td><?= $nm3 ?></td>
                        <td><?= $nm4 ?></td>
                        <td><?= $nm5 ?></td>
                        <td><?= $nm6 ?></td>
                        <td><?= $nm7 ?></td>
                        <td><?= $nm8 ?></td>
                        <td><?= $nm9 ?></td>
                        <td><?= $nm10 ?></td>
                    </tr>
                    <tr class="textHappy">
                        <td><?= $img_nm1; ?></td>
                        <td><?= $img_nm2; ?></td>
                        <td><?= $img_nm3; ?></td>
                        <td><?= $img_nm4; ?></td>
                        <td><?= $img_nm5; ?></td>
                        <td><?= $img_nm6; ?></td>
                        <td><?= $img_nm7; ?></td>
                        <td><?= $img_nm8; ?></td>
                        <td><?= $img_nm9 ?></td>
                        <td><?= $img_nm10; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        new Chart(document.getElementById("myChart"), {
            "type": "radar",
            "data": {
                "labels": ['สุขภาพดี', 'ผ่อนคลายดี', 'น้ำใจดี', 'จิตวิญญาณดี', 'ครอบครัวดี', 'สังคมดี',
                    'ใฝ่รู้ดี', 'สุขภาพเงินดี', 'การงานดี'
                ],
                "datasets": [{
                    "label": "ค่าคะแนนเฉลี่ยความสุขรายมิติ",
                    "data": [<?= $nm1 ?>, <?= $nm2 ?>, <?= $nm3 ?>, <?= $nm4 ?>, <?= $nm5 ?>,
                        <?= $nm6 ?>, <?= $nm7 ?>, <?= $nm8 ?>, <?= $nm9 ?>
                    ],
                    "fill": true,
                    "backgroundColor": "rgba(255, 99, 132, 0.2)",
                    "borderColor": "rgb(255, 99, 132)",
                    "pointBackgroundColor": "rgb(255, 99, 132)",
                    "pointBorderColor": "#fff",
                    "pointHoverBackgroundColor": "#fff",
                    "pointHoverBorderColor": "rgb(255, 99, 132)"
                }, {
                    label: '',
                    data: [0],
                    fill: true,
                    backgroundColor: '#fff',
                    borderColor: '#fff',
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#fff',
                }, {
                    "data": [0],
                    "fill": true,
                    "backgroundColor": "rgba(000, 00, 000, 0)",
                    "borderColor": "rgba(000, 00, 000, 0)",
                    "pointBackgroundColor": "rgba(000, 00, 000, 0)",
                    "pointBorderColor": "#fff",
                    "pointHoverBackgroundColor": "#fff",
                    "pointHoverBorderColor": "rgba(000, 00, 000, 0)"
                }, {
                    label: '',
                    data: [0],
                    fill: true,
                    backgroundColor: '#fff',
                    borderColor: '#fff',
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#fff',
                }]
            },
            "options": {
                "elements": {
                    "line": {
                        "tension": 0,
                        "borderWidth": 3
                    }
                }
            }
        });
    </script>

    <script>
        new Chart(document.getElementById("myChart1"), {
            "type": "bar",
            "data": {
                "labels": ['สุขภาพดี', 'ผ่อนคลายดี', 'น้ำใจดี', 'จิตวิญญาณดี', 'ครอบครัวดี', 'สังคมดี',
                    'ใฝ่รู้ดี', 'สุขภาพเงินดี', 'การงานดี'
                ],
                "datasets": [{
                    "label": "ค่าคะแนนเฉลี่ยความสุขรายมิติ",
                    "data": [<?= $nm1 ?>, <?= $nm2 ?>, <?= $nm3 ?>, <?= $nm4 ?>, <?= $nm5 ?>,
                        <?= $nm6 ?>, <?= $nm7 ?>, <?= $nm8 ?>, <?= $nm9 ?>
                    ],
                    "fill": false,
                    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
                        "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)",
                        "rgba(201, 203, 207, 0.2)", "rgba(1, 244, 219, 0.2)", "rgba(1, 1, 244, 0.2)"
                    ],
                    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                        "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
                        "rgb(201, 203, 207)", "rgba(1, 244, 219)", "rgba(1, 1, 244)"
                    ],
                    "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                    "yAxes": [{
                        "ticks": {
                            "beginAtZero": true
                        }
                    }]
                }
            }
        });
    </script>

    <?php include '../title/footer.php' ?>
</body>


</html>