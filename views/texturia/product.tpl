{* страница продукта *}
<div id="jf-content">
    <div class="gallery">

    
        <div>
          <h3 class="jg_imgtitle" id="jg_photo_title">
           {$rsProduct['name']}
          </h3>
        </div>

        <div id="jg_dtl_photo" class="jg_dtl_photo" style="text-align:center;">
          <img class="jg_photo" id="jg_photo_big" alt="Aenean posuere" width="675" src="/images/products/{$rsProduct['image']}">
        </div>  


        <div class="jg_photo_details" style="font-size: 20px; padding-top: 20px;">
            <div class="jg_details">
                <div class="sectiontableentry2">
                  <div class="jg_photo_left">
                      Стоимость:   </div>
                  <div class="jg_photo_right" id="jg_photo_date">
                      {$rsProduct['price']} </div>
                </div>
            </div>

            <div class="jg_detailnavi" style="padding-top: 8px;">
                <div class="jg_iconbar">
                    <a  id="removeCart_{$rsProduct['id']}" {if ! $itemInCart} class="hideme" style="display: none;" {/if} href="#" onclick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
                    <a  id="addCart_{$rsProduct['id']}" {if $itemInCart} class="hideme"{/if} href="#" onclick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a>
                </div>
            </div>
                    <div style="clear: both;"></div>
        </div>
        
        
        <div id="jg_photo_description_label" style="font-size: 20px; padding-top: 20px;">
           Описание       
        </div>
       <div id="jg_photo_description" style="font-size: 18px; padding-top: 8px;">
           <p>{$rsProduct['description']}</p>
       </div>
       
           
        <div class="sectiontableheader">
          &nbsp;
        </div>
    </div>
</div>