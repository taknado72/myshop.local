<?php /* Smarty version 3.1.24, created on 2017-08-31 07:53:28
         compiled from "../views/default/user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:443659a7a458b39502_11544169%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2216446ab1b65a22191efdee5d4918ffbf03094' => 
    array (
      0 => '../views/default/user.tpl',
      1 => 1504073383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443659a7a458b39502_11544169',
  'variables' => 
  array (
    'arUser' => 0,
    'rsUserOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a7a458bba3a2_25190133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a7a458bba3a2_25190133')) {
function content_59a7a458bba3a2_25190133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '443659a7a458b39502_11544169';
?>


<h1>Ваши регистрационные данные</h1>
<table border="0">
    <tr>
        <td>Логин (email)</td>
        <td><?php echo $_smarty_tpl->tpl_vars['arUser']->value['email'];?>
</td>
    </tr>
    <tr>
        <td>Имя</td>
        <td><input type="text" id="newName" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['name'];?>
" /></td>
    </tr>
    <tr>
        <td>Тел</td>
        <td><input type="text" id="newPhone" value="<?php echo $_smarty_tpl->tpl_vars['arUser']->value['phone'];?>
" /></td>
    </tr>
    <tr>
        <td>Адрес</td>
        <td><textarea id="newAdress" /><?php echo $_smarty_tpl->tpl_vars['arUser']->value['adress'];?>
</textarea> </td>
    </tr>
    <tr>
        <td>Новый пароль</td>
        <td><input type="password" id="newPwd1" value="" /></td>
    </tr>
    <tr>
        <td>Повтор пароля</td>
        <td><input type="password" id="newPwd2" value="" /></td>
    </tr>
    <tr>
        <td>Для того, чтобы сохранить данные введите текущий пароль</td>
        <td><input type="password" id="curPwd" value="" /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="button" value="Сохранить изменения" onClick="updateUserData();" /></td>
    </tr>
</table>
    
<h2>Заказы:</h2> 
<?php if (!$_smarty_tpl->tpl_vars['rsUserOrders']->value) {?>
    Нет заказов
<?php } else { ?>
    <table border ="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>№</th>
            <th>Действие</th>
            <th>ID заказа</th>
            <th>Статус</th>
            <th>Дата создания</th>
            <th>Дата оплаты</th>
            <th>Дополнительная информация</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['rsUserOrders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_orders'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_orders']->value['iteration']++;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
            <tr>
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_orders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_orders']->value['iteration'] : null);?>
</td>
                <td><a href="#" onclick="showProducts('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
'); return false;">Показать товар заказа</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                <!--<td><?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
</td>-->
                <td> <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?> Заказ оплачен <?php } else { ?>Заказ не оплачен <?php }?></td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
&nbsp;</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
            </tr>
            
            <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" >
                <td colspan="7">
                 <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                    <table border="1" cellpadding="1" cellspacing="1" width="100%">
                        <tr>
                            <th>№</th>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Количество</th>
                        </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['item']->value['children'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['itemChild'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['itemChild']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_products'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']++;
$foreach_itemChild_Sav = $_smarty_tpl->tpl_vars['itemChild'];
?>
                        <tr>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['__foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_products']->value['iteration'] : null);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
</td>
                            <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['product_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['price'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['amount'];?>
</td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['itemChild'] = $foreach_itemChild_Sav;
}
?>
                    </table>
                    <?php }?>
                    </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    </table>
<?php }
}
}
?>