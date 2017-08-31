<?php /* Smarty version 3.1.24, created on 2017-08-31 07:54:01
         compiled from "../views/default/order.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1483459a7a47919fb43_88531484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e232979579ea8fdb5ab85606e3f0d3649d1f17d' => 
    array (
      0 => '../views/default/order.tpl',
      1 => 1504073383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1483459a7a47919fb43_88531484',
  'variables' => 
  array (
    'rsProducts' => 0,
    'item' => 0,
    'arUser' => 0,
    'buttonClass' => 0,
    'name' => 0,
    'phone' => 0,
    'adress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a7a4792015d5_38663070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a7a4792015d5_38663070')) {
function content_59a7a4792015d5_38663070 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1483459a7a47919fb43_88531484';
?>


<h2>Данные заказа</h2>
<form id="frmOrder" action="/cart/saveorder/" method="POST">
    <table>
        <tr>
            <td>№</td>
            <td>Наименование</td>
            <td>Количество</td>
            <td>Цена за единицу</td>
            <td>Стоимость</td>
        </tr>
        
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
            <tr>
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_products']->value['iteration'] : null);?>
</td>
                <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
                <td>
                    <span id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="hidden" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt'];?>

                    </span>
                </td>
                <td>
                    <span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="hidden" name="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>

                    </span>
                </td>
                <td>
                    <span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                        <input type="hidden" name="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>
" />
                        <?php echo $_smarty_tpl->tpl_vars['item']->value['realPrice'];?>

                    </span>
                </td>
                
                
            </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    </table>
    
    <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_Variable('', null, 0);?>
        <h2>Данные заказчика</h2>
        <div id="orderUserInfoBox" <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
>
            <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable($_smarty_tpl->tpl_vars['arUser']->value['name'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['phone'] = new Smarty_Variable($_smarty_tpl->tpl_vars['arUser']->value['phone'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['adress'] = new Smarty_Variable($_smarty_tpl->tpl_vars['arUser']->value['adress'], null, 0);?>
            <table>
                <tr>
                    <td>Имя*</td>
                    <td><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /></td>
                </tr>
                <tr>
                    <td>Тел*</td>
                    <td><input type="text" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" /></td>
                </tr>  
                <tr>
                    <td>Адрес*</td>
                    <td><textarea id="adress" name="adress" /><?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
</textarea></td>
                </tr> 
            </table>
        </div>
    <?php } else { ?>
        
        <div id="loginBox">
            <div class="menuCaption">Авторизация</div>
                <table>
                    <tr>
                        <td>Логин</td>
                        <td><input type="text" id="loginEmail" name="loginEmail" value="" /></td>
                    </tr>
                    <tr>
                        <td>Пароль</td>
                        <td><input type="password" id="loginPwd" name="loginPwd" value="" /></td>
                    </tr>  
                    <tr>
                        <td>Адрес</td>
                         <td><input type="button" onclick ="login();" value="Войти" /></td>
                    </tr> 
                </table>
        </div>
        
        <div id="registerBox">или <br />
            <div class="menuCaption">Регистрация нового пользователя:</div>
            email*:<br />
            <input type="text" id="email" name="email" value=""/><br />
            пароль*:<br />
            <input type="password" id="pwd1" name="pwd1" value=""/><br />
            повторить пароль*:<br />
            <input type="password" id="pwd2" name="pwd2" value=""/><br />
            
            Имя*:<input type="text" id="name" name="name" value="" /><br />
            Тел*:<input type="text" id="phone" name="phone" value="" /><br />
            Адрес*:<textarea id="adress" name="adress"/></textarea><br />
        
            <input type="button" onclick ="registerNewUser();" value="Зарегистрироваться" />
        </div>
        <?php $_smarty_tpl->tpl_vars['buttonClass'] = new Smarty_Variable("class='hideme'", null, 0);?>
    <?php }?>
    
    <input <?php echo $_smarty_tpl->tpl_vars['buttonClass']->value;?>
 id="btnSaveOrder" type="button" value="Оформить заказ" onclick="saveOrder();"
                          
</form><?php }
}
?>