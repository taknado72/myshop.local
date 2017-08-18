/**
 * Функция добавления товара в корзину
 * 
 * @param integer itemId ID продукта
 * @returns вслучае успеха обновлятся данныекорзины на странице
 */
function addToCart(itemId){
    console.log("js - addToCart");
    $.ajax({
        type: 'POST',
        async: false,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);
                
                $('#addCart_'+ itemId).hide();
                $('#removeCart_'+itemId).show();
            }
        }
    });
}


