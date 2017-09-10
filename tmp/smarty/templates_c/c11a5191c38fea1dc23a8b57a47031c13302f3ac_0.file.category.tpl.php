<?php /* Smarty version 3.1.24, created on 2017-09-08 18:04:07
         compiled from "../views/texturia/category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1697559b2bf7753b0c3_22061207%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c11a5191c38fea1dc23a8b57a47031c13302f3ac' => 
    array (
      0 => '../views/texturia/category.tpl',
      1 => 1504886297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1697559b2bf7753b0c3_22061207',
  'variables' => 
  array (
    'rsCategory' => 0,
    'rsProducts' => 0,
    'item' => 0,
    'rsChildCats' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59b2bf775ead73_63503968',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b2bf775ead73_63503968')) {
function content_59b2bf775ead73_63503968 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1697559b2bf7753b0c3_22061207';
?>

<h1> Товары категории <?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>

<div class="joomcat">
     <div class="joomcat96_row">
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
             <div class="joomcat96_imgct " style="width:216px !important;margin-right:10px; ">
                <div class="joomcat96_img cat_img">
                     <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                        <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" />
                    </a>
                </div>
                    
                <div class="joomcat96_txt" style="padding-bottom:10px;padding-top:0px;">
                    <ul>
                        <li><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    </ul>
                </div>
            </div>
                    
        <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_products']->value['iteration'] : null) % 3 == 0) {?>
            <div class="joomcat96_clr"  style="" ></div>
    </div>
            <div class="joomcat96_row">
        <?php }?>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            </div>
            
</div>
     
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