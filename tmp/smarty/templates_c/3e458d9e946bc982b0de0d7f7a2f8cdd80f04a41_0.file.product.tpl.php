<?php /* Smarty version 3.1.24, created on 2017-08-18 20:32:34
         compiled from "../views/default/product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5449599732c270c0d2_29536605%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e458d9e946bc982b0de0d7f7a2f8cdd80f04a41' => 
    array (
      0 => '../views/default/product.tpl',
      1 => 1503081146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5449599732c270c0d2_29536605',
  'variables' => 
  array (
    'rsProduct' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_599732c2775879_13988000',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599732c2775879_13988000')) {
function content_599732c2775879_13988000 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5449599732c270c0d2_29536605';
?>

<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a  id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
<p>Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
?>