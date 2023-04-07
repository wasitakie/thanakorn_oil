<?php

session_start();
include '../config/connect.php';
$date  = date("d-m-") . (date("Y") + 543) . "/" . date("H-i-s");
$pagePart1 = $_SESSION["page_part1"];
$page = $_SESSION["page_array"];
$page1 = $_SESSION["page1_array"];
$page2 = $_SESSION["page2_array"];
$page3 = $_SESSION["page3_array"];
$page4 = $_SESSION["page4_array"];
$page5 = $_SESSION["page5_array"];
$page6 = $_SESSION["page6_array"];
$page7 = $_SESSION["page7_array"];
$page8 = $_SESSION["page8_array"];
$page9 = $_SESSION["page9_array"];
$page10 = $_SESSION["page10_array"];
$page11 = $_SESSION["page11_array"];


$id = 0;




try {
    $stf  = $conStaff->prepare("INSERT INTO insert_data(id, group_name, group_list, sex, age, q2_3, q2_4, q2_5_1, q2_5_2, q2_5_3, q2_5_4, q2_5_5, q2_5_6, q2_5_7, q2_5_8, q2_5_9, q2_5_10, q2_5t, q2_6, q2_6t, q2_7, q2_8, q2_9, q2_10, q2_10t, q2_11, q2_11t, q2_12, q2_12t, q2_13, q2_14, q2_15, q2_16, weight, waist, height, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, cv1, q12, q13, q14, q15, q16, cv2, q17, q18, q19, q20, q21, cv3, q22, q23, q24, q25, q26, cv4, q27, q28, q29, cv5, q30, q31, q32, q33, q34, q35, cv6, q36, q37, q38, cv7, q39, q40, q41, q42, cv8, q43, q44, q45, q46, q47, q48, q49, q50, q51, q52, q53, q54, q55, q56, q57, q58, q59, cv9, q60, q61, q62, q63, q64, q65, q66, q67, q68, q69, q70, q71, q72, q73, q74, q75, date, idcode,groups) VALUES(
    ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $stf->execute([0, $pagePart1[1], $pagePart1[2], $page[1], $page[2], $page[3], $page[4], $page[5], $page[6], $page[7], $page[8], $page[9], $page[10], $page[11], $page[12], $page[13], $page[14], $page[15], $page[16],  $page[17], $page[18], $page[19], $page[20], $page[21], $page[22], $page[23], $page[24], $page[25], $page[26], $page[27], $page[28], $page[29], $page[30], $page1[1], $page1[2], $page1[3], $page1[4], $page1[5], $page1[6], $page1[7], $page1[8], $page1[9],  $page1[10], $page1[11], $page1[12], $page1[13], $page1[14], $page2[1], $page2[2], $page2[3], $page2[4], $page2[5], $page2[6], $page3[1], $page3[2], $page3[3], $page3[4], $page3[5], $page3[6], $page4[1], $page4[2], $page4[3], $page4[4], $page4[5], $page4[6], $page5[1], $page5[2], $page5[3], $page5[4], $page6[1], $page6[2], $page6[3], $page6[4], $page6[5], $page6[6], $page6[7], $page7[1], $page7[2], $page7[3], $page7[4], $page8[1], $page8[2], $page8[3], $page8[4], $page8[5], $page9[1], $page9[2], $page9[3], $page9[4], $page9[5], $page9[6], $page9[7], $page9[8], $page9[9], $page9[10], $page9[11], $page9[12], $page9[13], $page9[14], $page9[15], $page9[16], $page9[17], $page9[18],  $page10[1], $page10[2], $page10[3], $page10[4], $page10[5], $page10[6], $page10[7], $page10[8], $page10[9], $page11[1], $page11[2], $page11[3], $page11[4], $page11[5], $page11[6], $page11[7], $date, $_SESSION["user"], $_SESSION["checkGroup"]]);
} catch (PDOException $e) {
    echo 'insert error' . $e->getMessage();
}
header("location: showData.php");
