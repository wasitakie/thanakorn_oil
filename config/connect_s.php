<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$db_s = 'db_student_s';
date_default_timezone_set('Asia/Bangkok');
$conStudent_s = new PDO("mysql:host=$host;dbname=$db_s", $username, $password);
$conStudent_s->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conStudent_s->exec("set names utf8");

$host = 'localhost';
$username = 'root';
$password = 'root';
$db_s1 = 'db_staff_s';

$conStaff_s = new PDO("mysql:host=$host;dbname=$db_s1", $username, $password);
$conStaff_s->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conStaff_s->exec("set names utf8");
