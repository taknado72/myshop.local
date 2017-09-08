   <div id="jf-right">
       <div class="jfmod module" id="Mod88"> 
           <div class="jfmod-top"></div>
           <div class="jfmod-mid">
		<h3>Меню:</h3>
                <div class="jfmod-content">
                <ul class="menu">
                {foreach $rsCategories as $item}        
                        
                    <li class="item-435 current active"><a href="/category/{$item['id']}/"><span>{$item['name']}</span></a></li>   
                        {if isset($item['children'])}
                        <ul class="menu" style="padding:0px 0px 10px 20px;">
                        {foreach $item['children'] as $itemChild}
                            <li class="item-435 current active"><a href="/category/{$itemChild['id']}/"><span>{$itemChild['name']}</span></a></li>
                        {/foreach}
                        </ul>
                    {/if}
                {/foreach}
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
                                    {if $cartCntItems >0}{$cartCntItems}{else} пусто {/if}
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
                    
                {if isset($arUser)}
                <div id="userBox">
                    <a href="/user/" id="userLink">{$arUser['displayName']}</a><br />
                    <a href="/user/logout/" onclick="logout();">Выход</a>
                </div>
            
                {else}
                    <div id="userBox" class="hideme">
                        <a href="#" id="userLink"></a><br />
                        <a href="/user/logout/" onclick="logout();">Выход</a>
                    </div>
            
            
                {if ! isset($hideLoginBox)}
                <div id="loginBox">
                    <div id="form-login">
                         Введите логин и пароль
                         <form action="" method="" id="form-login">
                         <fieldset class="input">
                            <p id="form-login-username">
                                <input type="text" id="loginEmail" name="username" class="inputbox" size="30" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';" type="text">
                            </p>
                            <p id="form-login-password">
                                <input type="password" id="loginPwd" name="password" class="inputbox" size="30" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';" alt="password" type="password">
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
                                    <input type="text" id="email" name="email" size="30" value=""/><br />
                                    пароль:<br />
                                    <input type="password" id="pwd1" name="pwd1" size="30" value=""/><br />
                                    повторить пароль:<br />
                                    <input type="password" id="pwd2" name="pwd2" size="30" value=""/><br />
                                    </p>
                                    <input type="button" class="buttonLogin" onclick="registerNewUser();" value="Зарегистрироваться"/>
                                </div>
                            </fieldset> 
                        </form>
                    </div>
                    <p></p>

                </div>

               {/if}     
             {/if}       
             </div></div>       
                                
    
             <div class="jfmod-bot"></div>
         </div>    
   </div>                            
                
           