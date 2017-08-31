<?php /* Smarty version 3.1.24, created on 2017-08-30 09:11:15
         compiled from "../views/admin/admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1772559a66513f29474_40471224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bacf7f84d3aa21952947e0df9aaa00d1aac1e41' => 
    array (
      0 => '../views/admin/admin.tpl',
      1 => 1504073383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1772559a66513f29474_40471224',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a66513f38e79_96520407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a66513f38e79_96520407')) {
function content_59a66513f38e79_96520407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1772559a66513f29474_40471224';
?>
<div id="blockNewCategory">
    Новая категория:
    <input name="newCategoryName" id="newCategoryName" type="text" value="" />
    <br />
    
    Является подкатегорией для
    <select name="generalCatId">
        <option value="0">Главная Категория
        <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?> 
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    </select>
    <br />
    <input type="button" onclick="newCategory();" value="Добавить категорию" />
</div><?php }
}
?>