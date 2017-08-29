<?php /* Smarty version 3.1.24, created on 2017-08-29 19:20:02
         compiled from "../views/admin/adminLeftcolumn.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:295159a5a242785662_78907401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1442fb629f9caed8a630eb4a39e8d179b70a5463' => 
    array (
      0 => '../views/admin/adminLeftcolumn.tpl',
      1 => 1504027173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295159a5a242785662_78907401',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a5a2427eaf70_66394954',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a5a2427eaf70_66394954')) {
function content_59a5a2427eaf70_66394954 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '295159a5a242785662_78907401';
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