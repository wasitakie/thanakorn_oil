<?php
session_start();
include '../config/connect.php';


try {
    $admin = $conStaff->prepare("SELECT* FROM admin WHERE ad_user = ? AND ad_pass = ? ");
    $admin->execute([$_POST["user"], $_POST["pass"]]);
    $row = $admin->rowCount();
    if ($row == 1) {
        $r = $admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION["admin"] = $r["ad_check"];
        header("location:adminPageAll.php");
    } else {
        header("location:index.php");
    }
} catch (Exception $e) {
    echo "on insert " . $e->getMessage();
}
