<?php /* Smarty version 3.1.24, created on 2017-08-31 08:26:45
         compiled from "../views/admin/adminOrders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2835259a7ac25352a03_03452614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24b8bd80237ae95f2889ffdc20bedb4e2466e776' => 
    array (
      0 => '../views/admin/adminOrders.tpl',
      1 => 1504160795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2835259a7ac25352a03_03452614',
  'variables' => 
  array (
    'rsOrders' => 0,
    'item' => 0,
    'itemChild' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a7ac253b0629_40787596',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a7ac253b0629_40787596')) {
function content_59a7ac253b0629_40787596 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2835259a7ac25352a03_03452614';
?>
<h2>Заказы</h2>
<?php if (!$_smarty_tpl->tpl_vars['rsOrders']->value) {?>
    Нет заказов
<?php } else { ?>
    <table border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>№</th>
            <th>Действие</th>
            <th>ID заказа</th>
            <th width="110">Статус</th>
            <th>Дата создания</th>
            <th>Дата оплаты</th>
            <th>Дополнительная информация</th>
            <th>Дата изменения заказа</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['rsOrders']->value;
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
                <td>
                    <input type="checkbox" id="itemStatus_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['status']) {?> checked="checked"<?php }?> onclick="updateOrderStatus('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>Закрыт
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_created'];?>
</td>
                <td>
                    <input id="datePayment_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['date_payment'];?>
"/>
                    <input type="button" value="Сохранить" onclick="updateDatePayment('<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
');"/>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['comment'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date_modification'];?>
</td>
            </tr>
            <tr class="hideme" id="purchasesForOrderId_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <td colspan="8">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['children']) {?>
                        <table border="1" cellpadding="1" cellspacing="1" width ="100%">
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
                                <td><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
</td>
                                <td><a href="/product/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
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