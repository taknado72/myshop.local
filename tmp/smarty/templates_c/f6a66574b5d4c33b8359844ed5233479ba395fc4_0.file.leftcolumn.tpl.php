<?php /* Smarty version 3.1.24, created on 2017-08-19 13:36:31
         compiled from "../views/default/leftcolumn.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2529599822bf2abf57_88600278%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6a66574b5d4c33b8359844ed5233479ba395fc4' => 
    array (
      0 => '../views/default/leftcolumn.tpl',
      1 => 1503142580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2529599822bf2abf57_88600278',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_599822bf30d9e4_86003002',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599822bf30d9e4_86003002')) {
function content_599822bf30d9e4_86003002 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2529599822bf2abf57_88600278';
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
            
            <div id="userBox" class="hideme">
                <a href="#" id="userLink"></a><br />
                <a href="/user/logout/" onclick="logout();">Выход</a>
            </div>
            
            
            <div id="registerBox">
                <div class="menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                <div id="registerBoxHidden">
                    email:<br />
                    <input type="text" id="email" name="email" value=""/><br />
                    пароль:<br />
                    <input type="password" id="pwd1" name="pwd1" value=""/><br />
                    повторить пароль:<br />
                    <input type="password" id="pwd2" name="pwd2" value=""/><br />
                    <input type="button" onclick="registerNewUser();" value="Зарегистрироваться"/>
                </div>
                
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