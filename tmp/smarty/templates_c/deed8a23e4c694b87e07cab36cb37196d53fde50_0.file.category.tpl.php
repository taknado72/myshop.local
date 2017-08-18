<?php /* Smarty version 3.1.24, created on 2017-08-16 20:02:29
         compiled from "../views/default/category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16956599488b56604d2_35550154%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deed8a23e4c694b87e07cab36cb37196d53fde50' => 
    array (
      0 => '../views/default/category.tpl',
      1 => 1502906084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16956599488b56604d2_35550154',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_599488b569ece6_62706171',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599488b569ece6_62706171')) {
function content_599488b569ece6_62706171 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16956599488b56604d2_35550154';
?>

<h1> Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

<?php
$_from = $_smarty_tpl->tpl_vars['rsProducts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_products'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']++;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
    <div style="float: left; padding: 0px 30px 40px 0px;">
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" />
        </a><br />
        <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
    
    <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_products']->value['iteration'] : null) % 3 == 0) {?>
        <div style="clear: both;"></div>
    <?php }?>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    
<?php
$_from = $_smarty_tpl->tpl_vars['rsChildCats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
    <h2><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
}
}
?>