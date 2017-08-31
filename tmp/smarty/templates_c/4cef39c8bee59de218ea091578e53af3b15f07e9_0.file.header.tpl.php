<?php /* Smarty version 3.1.24, created on 2017-08-30 10:02:18
         compiled from "../views/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1657459a6710a5a07d9_94695289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cef39c8bee59de218ea091578e53af3b15f07e9' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1504080128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1657459a6710a5a07d9_94695289',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a6710a5e2e67_46205909',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a6710a5e2e67_46205909')) {
function content_59a6710a5e2e67_46205909 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1657459a6710a5a07d9_94695289';
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
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