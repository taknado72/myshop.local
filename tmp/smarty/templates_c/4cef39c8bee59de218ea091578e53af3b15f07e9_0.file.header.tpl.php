<?php /* Smarty version 3.1.24, created on 2017-08-15 19:51:36
         compiled from "../views/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30206599334a8ad51a2_95907203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cef39c8bee59de218ea091578e53af3b15f07e9' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1502819162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30206599334a8ad51a2_95907203',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_599334a8c19571_31818209',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_599334a8c19571_31818209')) {
function content_599334a8c19571_31818209 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30206599334a8ad51a2_95907203';
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    </head>
    <body>
        <div id="header">
            <h1>my shop - интернет магазин</h1>
        </div>
        
        <?php echo $_smarty_tpl->getSubTemplate ('leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
        
                
        <div id="centerColumn">            
                   <?php }
}
?>