<?php /* Smarty version 3.1.24, created on 2017-09-08 09:47:05
         compiled from "../views/texturia/product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1911959b24af94a9102_25824907%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94fa42b19d455193f0e332e3ec4e7a689bbea29a' => 
    array (
      0 => '../views/texturia/product.tpl',
      1 => 1504856821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911959b24af94a9102_25824907',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_59b24af951e403_81952819',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b24af951e403_81952819')) {
function content_59b24af951e403_81952819 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1911959b24af94a9102_25824907';
?>

<div id="jf-content">
    <div class="gallery">

    
        <div>
          <h3 class="jg_imgtitle" id="jg_photo_title">
           <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>

          </h3>
        </div>

        <div id="jg_dtl_photo" class="jg_dtl_photo" style="text-align:center;">
          <img class="jg_photo" id="jg_photo_big" alt="Aenean posuere" width="675" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
        </div>  


        <div class="jg_photo_details" style="font-size: 20px; padding-top: 20px;">
            <div class="jg_details">
                <div class="sectiontableentry2">
                  <div class="jg_photo_left">
                      Стоимость:   </div>
                  <div class="jg_photo_right" id="jg_photo_date">
                      <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>
 </div>
                </div>
            </div>

            <div class="jg_detailnavi" style="padding-top: 8px;">
                <div class="jg_iconbar">
                    <a  id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" style="display: none;" <?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить из корзины">Удалить из корзины</a>
                    <a  id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
                </div>
            </div>
                    <div style="clear: both;"></div>
        </div>
        
        
        <div id="jg_photo_description_label" style="font-size: 20px; padding-top: 20px;">
           Описание       
        </div>
       <div id="jg_photo_description" style="font-size: 18px; padding-top: 8px;">
           <p><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
       </div>
       
           
        <div class="sectiontableheader">
          &nbsp;
        </div>
    </div>
</div><?php }
}
?>