<?php /* Smarty version 3.1.24, created on 2017-08-19 08:58:05
         compiled from "../views/default/product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56785997e17d0216b7_21261534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e458d9e946bc982b0de0d7f7a2f8cdd80f04a41' => 
    array (
      0 => '../views/default/product.tpl',
      1 => 1503125755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56785997e17d0216b7_21261534',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5997e17d086fc0_20610712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5997e17d086fc0_20610712')) {
function content_5997e17d086fc0_20610712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56785997e17d0216b7_21261534';
?>

<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a  id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme"<?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
<a  id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
<p>Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
?>