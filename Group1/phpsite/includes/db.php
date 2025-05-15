<?php

//ثابت constant
define("DNS", "mysql:host=localhost;dbname=blog_project;charset=utf8mb4");
define("DB_USER", "root");
define('DB_PASS', '');

$connection = new PDO(DNS, DB_USER, DB_PASS);
