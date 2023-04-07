<?php

$host = 'localhost';
$username = 'root';
$password = 'root';
$db = 'db_thanakorn_oil';


date_default_timezone_set('Asia/Bangkok');
$conStaff  = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$conStaff->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conStaff->exec("set names utf8");
