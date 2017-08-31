<?php /* Smarty version 3.1.24, created on 2017-08-30 10:29:31
         compiled from "../views/admin/adminLeftcolumn.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2662459a6776bcb6aa2_38051444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1442fb629f9caed8a630eb4a39e8d179b70a5463' => 
    array (
      0 => '../views/admin/adminLeftcolumn.tpl',
      1 => 1504080812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2662459a6776bcb6aa2_38051444',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a6776bce1a39_06110733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a6776bce1a39_06110733')) {
function content_59a6776bce1a39_06110733 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2662459a6776bcb6aa2_38051444';
?>


<div id="leftColumn">

    <div id="leftMenu">
        <div class="menuCaption">Меню:</div>
        <a href="/admin/">Главная</a><br />
        <a href="/admin/category/">Категории</a><br />
        <a href="/admin/products/">Товар</a><br />
        <a href="/admin/orders/">Заказы</a><br />
    </div>
    
</div><?php }
}
?>