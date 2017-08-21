<?php /* Smarty version 3.1.24, created on 2017-08-21 08:49:25
         compiled from "../views/default/user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25424599a8275c1e2e4_51959455%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2216446ab1b65a22191efdee5d4918ffbf03094' => 
    array (
      0 => '../views/default/user.tpl',
      1 => 1503295726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25424599a8275c1e2e4_51959455',
  'variables' => 
  array (
    'arUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_599a8275ca3007_00682607',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599a8275ca3007_00682607')) {
function content_599a8275ca3007_00682607 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25424599a8275c1e2e4_51959455';
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
</table><?php }
}
?>