<?php
/**
 * Основные функции
 */

/**
 * Формирование запрашиваемой страницы
 * 
 * @param type $controllerName  название контроллера
 * @param type $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    
    $function = $actionName. 'Action';
    $function($smarty);
}
/**
 * Загрузка шаблона
 * 
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}


/**
 * Функция отладки. Останавливает работу программы выводя значение переменной $value
 * @param variant $value переменная для вывода ее на страницу
 * @param type $die
 */
function d($value = null, $die = 1){
    echo 'Debug: <br><pre>';
    print_r($value);
    echo '</pre>';
    
    if($die) die;
}