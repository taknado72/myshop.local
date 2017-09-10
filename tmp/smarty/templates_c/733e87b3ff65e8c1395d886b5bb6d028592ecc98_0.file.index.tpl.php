<?php /* Smarty version 3.1.24, created on 2017-09-09 15:17:28
         compiled from "../views/texturia/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2539459b3e9e843c598_96382670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733e87b3ff65e8c1395d886b5bb6d028592ecc98' => 
    array (
      0 => '../views/texturia/index.tpl',
      1 => 1504963006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2539459b3e9e843c598_96382670',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'paginator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59b3e9e850f4c0_52115252',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b3e9e850f4c0_52115252')) {
function content_59b3e9e850f4c0_52115252 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2539459b3e9e843c598_96382670';
?>


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
            
            
            <div class="pagination">
                <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] != 1) {?>
                    <span class='p_prev'><a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']-1;?>
">&nbsp;</a></span>
                <?php }?>
                <strong><span><?php echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage'];?>
</span></strong>
                
                <?php if ($_smarty_tpl->tpl_vars['paginator']->value['currentPage'] < $_smarty_tpl->tpl_vars['paginator']->value['pageCnt']) {?>
                    <span class='p_next'><a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['link'];
echo $_smarty_tpl->tpl_vars['paginator']->value['currentPage']+1;?>
">&nbsp;</a></span>
                <?php }?>
                
            </div>    
            
</div><?php }
}
?>