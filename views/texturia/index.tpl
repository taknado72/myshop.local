{* шаблон главной страницы *}

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
            
            
            <div class="pagination">
                {if $paginator['currentPage'] != 1}
                    <span class='p_prev'><a href="{$paginator['link']}{$paginator['currentPage']-1}">&nbsp;</a></span>
                {/if}
                <strong><span>{$paginator['currentPage']}</span></strong>
                
                {if $paginator['currentPage'] < $paginator['pageCnt']}
                    <span class='p_next'><a href="{$paginator['link']}{$paginator['currentPage']+1}">&nbsp;</a></span>
                {/if}
                
            </div>    
            
</div>