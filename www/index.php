<?php
include_once '../config/config.php';            //Инициализация настроек
include_once '../library/mainFunctions.php';    //Основные функции

//определяемс каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($controllerName, $actionName);