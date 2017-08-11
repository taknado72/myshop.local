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
function loadPage($controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    
    $function = $actionName. 'Action';
    $function();
}
