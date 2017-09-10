<?php /* Smarty version 3.1.24, created on 2017-09-08 18:02:31
         compiled from "../views/texturia/leftcolumn.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1380059b2bf17b05971_00583193%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd7f64c082c3138c0290a57500aa1c554e4e2d52' => 
    array (
      0 => '../views/texturia/leftcolumn.tpl',
      1 => 1504886544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1380059b2bf17b05971_00583193',
  'variables' => 
  array (
    'rsCategories' => 0,
    'item' => 0,
    'itemChild' => 0,
    'cartCntItems' => 0,
    'arUser' => 0,
    'hideLoginBox' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59b2bf17c1af32_18347577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b2bf17c1af32_18347577')) {
function content_59b2bf17c1af32_18347577 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1380059b2bf17b05971_00583193';
?>
   <div id="jf-right">
       <div class="jfmod module" id="Mod88"> 
           <div class="jfmod-top"></div>
           <div class="jfmod-mid">
		<h3>Меню:</h3>
                <div class="jfmod-content">
                <ul class="menu">
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
                        
                    <li class="item-435 current active"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span></a></li>   
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
                        <ul class="menu" style="padding:0px 0px 10px 20px;">
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
                            <li class="item-435 current active"><a href="/category/<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
/"><span><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</span></a></li>
                        <?php
$_smarty_tpl->tpl_vars['itemChild'] = $foreach_itemChild_Sav;
}
?>
                        </ul>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
                </div>
            </div>
            
            <div class="jfmod-bot"></div>
        </div>
                
        <div class="jfmod module_blue" id="Mod97">
	   <div class="jfmod-top"></div>
                <div class="jfmod-mid">
                    <h3>Корзина:</h3>
			<div class="jfmod-content"><div class="joomimg97_main">
                            <div class="joomimg_row" style="font-size: 16px;">
                                <a href="/cart/" title="Перейти в корзину">В корзине</a>
                                <span id="cartCntItems">
                                    <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?> пусто <?php }?>
                                </span>
                            </div>
                            <div class="joomimg_clr"></div>   
                         </div></div>
               </div>
                  <div class="jfmod-bot"></div>          
        </div>
                                
       <div class="jfmod module_orangebold" id="Mod89">
	   <div class="jfmod-top"></div>
                <div class="jfmod-mid">
                    
		<div class="jfmod-content">  
                    
                <?php if (isset($_smarty_tpl->tpl_vars['arUser']->value)) {?>
                <div id="userBox">
                    <a href="/user/" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a><br />
                    <a href="/user/logout/" onclick="logout();">Выход</a>
                </div>
            
                <?php } else { ?>
                    <div id="userBox" class="hideme">
                        <a href="#" id="userLink"></a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>
            
            
                <?php if (!isset($_smarty_tpl->tpl_vars['hideLoginBox']->value)) {?>
                <div id="loginBox">
                    <div id="form-login">
                         Введите логин и пароль
                         <form action="" method="" id="form-login">
                         <fieldset class="input">
                            <p id="form-login-username">
                                <input type="text" id="loginEmail" name="username" class="inputbox" size="26" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';" type="text">
                            </p>
                            <p id="form-login-password">
                                <input type="password" id="loginPwd" name="password" class="inputbox" size="26" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';" alt="password" type="password">
                            </p>    

                            <p style="text-align:right">
                            <input type="button" class="buttonLogin" onclick="login();" value="Войти"/><br /> 
                         </fieldset>  
                         </form>
                    </div>
                </div>
                
                <div id="registerBox">
                    <div class="re-link menuCaption showHidden" onclick="showRegisterBox();">Регистрация</div>
                    <div id="form-login">
                        <form action="" method="" id="form-login">
                            <fieldset class="input_">
                                <div id="registerBoxHidden" class="hideme">
                                    <p>email:<br />
                                    <input type="text" id="email" name="email" size="26" value=""/><br />
                                    пароль:<br />
                                    <input type="password" id="pwd1" name="pwd1" size="26" value=""/><br />
                                    повторить пароль:<br />
                                    <input type="password" id="pwd2" name="pwd2" size="26" value=""/><br />
                                    </p>
                                    <input type="button" class="buttonLogin" onclick="registerNewUser();" value="Зарегистрироваться"/>
                                </div>
                            </fieldset> 
                        </form>
                    </div>
                    <p></p>

                </div>

               <?php }?>     
             <?php }?>       
             </div></div>       
                                
    
             <div class="jfmod-bot"></div>
         </div>    
   </div>                            
                
           <?php }
}
?>