<?php

/* 
 * Модель для таблицы продукции (products)
 * 
 */

/**
 * Получаем последние добавленные товары
 * 
 * @param intenger $limit Лимит товаров
 * @return array Массив товаров
 */
function getLastProducts($limit= null){
    
    $sql = "SELECT *
            FROM `products`
            ORDER BY id DESC";
    if($limit){
        $sql .= " LIMIT {$limit}";
    }
     
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}

/**
 * Получить продукты для категории $itemId
 * 
 * @param integer $itemId ID категории
 * @return array массив продуктов
 */
function  getProductsByCat($itemId){
    $itemId = intval($itemId);
    $sql = "SELECT *
            FROM products
            WHERE category_id = '{$itemId}'";
            
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
   
}