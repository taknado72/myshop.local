<?php /* Smarty version 3.1.24, created on 2017-08-30 10:02:32
         compiled from "../views/admin/adminHeader.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2878059a6711871e8b4_21345566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76ccab95a81f68afbe75fbcb4ea4539e743fc2d7' => 
    array (
      0 => '../views/admin/adminHeader.tpl',
      1 => 1504080128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2878059a6711871e8b4_21345566',
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59a67118741b49_92050109',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a67118741b49_92050109')) {
function content_59a67118741b49_92050109 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2878059a6711871e8b4_21345566';
?>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/admin.js"><?php echo '</script'; ?>
>
    </head>
    
    <body>
        <div id="header">
            <h1>Управление сайтом</h1>
        </div>
        
    <?php echo $_smarty_tpl->getSubTemplate ('adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        
    <div id="centerColumn">
    <?php }
}
?>