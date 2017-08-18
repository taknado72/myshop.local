<?php /* Smarty version 3.1.24, created on 2017-08-18 20:26:22
         compiled from "../views/default/leftcolumn.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172005997314eb72a71_12531722%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a66574b5d4c33b8359844ed5233479ba395fc4' => 
    array (
      0 => '../views/default/leftcolumn.tpl',
      1 => 1503079662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172005997314eb72a71_12531722',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5997314ec5d0b1_80971373',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5997314ec5d0b1_80971373')) {
function content_5997314ec5d0b1_80971373 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172005997314eb72a71_12531722';
?>
       
        
        <div id="leftColumn">
            <div id="leftMenu">
                <div class="menuCaption">Меню:</div>
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
                    <a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br>
                
                    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['itemChild']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
$foreach_itemChild_Sav = $_smarty_tpl->tpl_vars['itemChild'];
?>
                            --<a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a><br>
                        <?php
$_smarty_tpl->tpl_vars['itemChild'] = $foreach_itemChild_Sav;
}
?>
                    <?php }?>
                    
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>    
            </div>
            
            <div class="menuCaption">Корзина</div>
            <a href="/cart/" title="Перейти в корзину">В корзине</a>
            <span id="cartCntItems">
                  <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?> пусто <?php }?>
            </span>    
             
        </div><?php }
}
?>