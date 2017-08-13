<?php /* Smarty version 3.1.24, created on 2017-08-13 16:09:32
         compiled from "../views/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:667759905d9c9a0412_64572468%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cef39c8bee59de218ea091578e53af3b15f07e9' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1502633370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667759905d9c9a0412_64572468',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59905d9c9e2aa7_13380258',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59905d9c9e2aa7_13380258')) {
function content_59905d9c9e2aa7_13380258 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '667759905d9c9a0412_64572468';
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
            
            centerColumn           <?php }
}
?>