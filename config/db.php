<?php

/* 
 * Инициализация подключения базы данных
 * 
 */

$dblocation ="127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "";

//соединяемся с базой данных
$db = mysql_connect($dblocation, $dbuser, $dbpasswd);

if(! $db) {
    echo "Ошибка доступа к MySQL";
    exit();
}

//Устанавливаем кодировку по умолчанию для текущего соединения
mysql_set_charset('utf8');

if (! mysql_select_db($dbname,$db) ) {
    echo "Ошибка доступа к базе данных: {$dbname}";
    exit(); 
}