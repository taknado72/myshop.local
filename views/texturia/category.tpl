{* Страница категории *}
<h1> Товары категории {$rsCategory['name']}</h1>

<div class="joomcat">
     <div class="joomcat96_row">
         {foreach $rsProducts as $item name=products}
             <div class="joomcat96_imgct " style="width:216px !important;margin-right:10px; ">
                <div class="joomcat96_img cat_img">
                     <a href="/product/{$item['id']}/">
                        <img src="/images/products/{$item['image']}" />
                    </a>
                </div>
                    
                <div class="joomcat96_txt" style="padding-bottom:10px;padding-top:0px;">
                    <ul>
                        <li><a href="/product/{$item['id']}/">{$item['name']}</a></li>
                    </ul>
                </div>
            </div>
                    
        {if $smarty.foreach.products.iteration mod 3 == 0}
            <div class="joomcat96_clr"  style="" ></div>
    </div>
            <div class="joomcat96_row">
        {/if}
{/foreach}
            </div>
            
</div>
     
{foreach $rsChildCats as $item name=childrCats}
    <h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
{/foreach}