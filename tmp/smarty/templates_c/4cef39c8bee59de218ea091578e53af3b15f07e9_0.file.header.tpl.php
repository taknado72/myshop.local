<?php /* Smarty version 3.1.24, created on 2017-08-19 08:21:21
         compiled from "../views/default/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:58465997d8e1e19382_99826447%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cef39c8bee59de218ea091578e53af3b15f07e9' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1503123563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58465997d8e1e19382_99826447',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5997d8e1e4fe83_88485930',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5997d8e1e4fe83_88485930')) {
function content_5997d8e1e4fe83_88485930 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '58465997d8e1e19382_99826447';
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