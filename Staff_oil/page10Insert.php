<?php

session_start();
//9//
$page10_array = array("", $_POST["q60"], $_POST["q61"], $_POST["q62"], $_POST["q63"], $_POST["q64"], $_POST["q65"], $_POST["q66"], $_POST["q67"], $_POST["q68"]);

$sumData  = array('', '0', '10', '25', '50', '75', '100');

$sumDataAll = ($sumData[$_POST["q60"]] + $sumData[$_POST["q61"]] + $sumData[$_POST["q62"]] + $sumData[$_POST["q63"]] + $sumData[$_POST["q64"]] + $sumData[$_POST["q65"]] + $sumData[$_POST["q66"]] + $sumData[$_POST["q67"]] + $sumData[$_POST["q68"]]) / 9;

$_SESSION["sumNum10"] = $sumDataAll;
$_SESSION["page10_array"] = $page10_array;

// foreach ($_SESSION["page10_array"] as $page10) {
//     echo $page10 . "<br>";
// }
header("Location: page11.php");
