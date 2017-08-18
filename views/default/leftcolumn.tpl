       {* левый столбец*}
        
        <div id="leftColumn">
            <div id="leftMenu">
                <div class="menuCaption">Меню:</div>
                {foreach $rsCategories as $item}
                    <a href="/?controller=category&id={$item['id']}">{$item['name']}</a><br>
                
                    {if isset($item['children'])}
                        {foreach $item['children'] as $itemChild}
                            --<a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a><br>
                        {/foreach}
                    {/if}
                    
                {/foreach}    
            </div>
            
            <div class="menuCaption">Корзина</div>
            <a href="/cart/" title="Перейти в корзину">В корзине</a>
            <span id="cartCntItems">
                  {if $cartCntItems >0}{$cartCntItems}{else} пусто {/if}
            </span>    
             
        </div>