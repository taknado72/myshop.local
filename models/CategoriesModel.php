<?php

/* 
 * Модель для таблицы категорий (categories)
 * 
 */

/**
 * Получить дочерние категории для категории $catId
 * @param integer $catId ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId)
{
    $sql = "SELECT *
            FROM categories
            WHERE
            parent_id = '{$catId}'";
    
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}


/**
 * Получить главные категории с привязками дочерних
 * 
 * @return array массив категорий
 */
function  getAllMainCatsWithChildren(){
    $sql = 'SELECT *
            FROM categories 
            WHERE parent_id =0';

    $rs = mysql_query($sql);  
    
    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)) {
        
        $rsChildren = getChildrenForCat($row['id']);
        
        if($rsChildren) {
            $row['children'] = $rsChildren;
        }
        
        $smartyRs[] = $row;
    }
    
    return $smartyRs;
}

/**
 * Получить данные категории по id
 * 
 * @param integer $catId ID категории
 * @return array массив - строка категории
 */
function  getCatById($catId){
    
    $catId = intval($catId);
    $sql = "SELECT *
        FROM categories
        WHERE
        id = '{$catId}'";
        
    $rs = mysql_query($sql);
    
    return mysql_fetch_assoc($rs);
    
}


/**
 * Получить все главные категории (категории которые не являются дочерними)
 * 
 * @return array массив категорий
 */
function getAllMainCategories(){
    
    $sql = 'SELECT *
            FROM categories
            WHERE parent_id = 0';
    
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}


/**
 * Добавление новой категории
 * 
 * @param string $catName Название категории
 * @param integer $catParentId ID родительскойкатегории
 * @return ineger  id новой категории
 */
function insertCat($catName, $catParentId = 0){
    //готовим запрос
    $sql = "INSERT INTO
            categories (`parent_id`, `name`)
            VALUES ('{$catParentId}', '{$catName}')";
            
    //выполняем запрос
    mysql_query($sql);
    
    //получаемid добавленной записи
    $id = mysql_insert_id();
    
    return $id;
            
}


/**
 * Получить все категории
 * 
 * @return array массив категорий
 */
function getAllCategories(){
    $sql = 'SELECT *
            FROM categories
            ORDER BY parent_id ASC';
    
    $rs = mysql_query($sql);
    
    return createSmartyRsArray($rs);
}



/**
 * обновление категорий
 * 
 * @param integer $itemId  ID категории
 * @param integer $parentId  ID главной категории
 * @param string $newName новое имя категории
 * @return type Description
 */
function updateCategoryData($itemId, $parentId = -1, $newName = ''){
    
    $set = array();
    
    if($newName){
        $set[] = "`name` = '{$newName}'";
    }
    
    if($parentId > -1){
        $set[] = "`parent_id` = '{$parentId}'";
    }
    
    $setStr = implode($set, ", ");
    $sql = "UPDATE categories
            SET {$setStr}
            WHERE id = '{$itemId}'";  

    $rs = mysql_query($sql);
    
    return $rs;
    
}