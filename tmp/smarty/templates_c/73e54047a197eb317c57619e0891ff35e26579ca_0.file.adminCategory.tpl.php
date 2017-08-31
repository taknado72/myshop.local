<?php /* Smarty version 3.1.24, created on 2017-08-30 09:13:11
         compiled from "../views/admin/adminCategory.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1190759a6658704af24_71571514%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73e54047a197eb317c57619e0891ff35e26579ca' => 
    array (
      0 => '../views/admin/adminCategory.tpl',
      1 => 1504076925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1190759a6658704af24_71571514',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'rsMainCategories' => 0,
    'mainItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a6658709cfc6_69380730',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a6658709cfc6_69380730')) {
function content_59a6658709cfc6_69380730 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1190759a6658704af24_71571514';
?>
<h2>Категории</h2>
<table border="1" cellpadding="1" cellspasing="1">
    <tr>
        <th>№</th>
        <th>ID</th>
        <th>Название</th>
        <th>Родительская категория</th>
        <th>Действие</th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_categories'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_categories']->value['iteration']++;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <tr>
            <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_categories']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_categories']->value['iteration'] : null);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td>
                <input type="edit" id="itemName_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/>
            </td>
            <td>
                <select id="parentId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                    <option value="0">Главная Категория
                    <?php
$_from = $_smarty_tpl->tpl_vars['rsMainCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['mainItem'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['mainItem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['mainItem']->value) {
$_smarty_tpl->tpl_vars['mainItem']->_loop = true;
$foreach_mainItem_Sav = $_smarty_tpl->tpl_vars['mainItem'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['mainItem']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] == $_smarty_tpl->tpl_vars['mainItem']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mainItem']->value['name'];?>

                    <?php
$_smarty_tpl->tpl_vars['mainItem'] = $foreach_mainItem_Sav;
}
?>
                </select>
            </td>
            <td>
                <input type="button" value="Сохранить" onclick="updateCat(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);"/>
            </td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</table><?php }
}
?>