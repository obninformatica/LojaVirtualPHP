$(document).ready(function(){

    var main_content = $("#main_content"); /* ok */
    var center_content = main_content.find(".center_content"); /* ok */
    var shopping_cart = center_content.find(".shopping_cart"); /* ok */
    var products_cart = shopping_cart.find('#products_cart'); /* ok */
    var price_cart = shopping_cart.find(".price"); /* ok */
    var btn_add_carrinho = center_content.find(".btn-add-carrinho"); /* ok */

    btn_add_carrinho.on('click',function(event){
		event.preventDefault();
		
		var idProduto = $(this).attr('data-id');
				
		$.ajax({
			url:'/carrinho/add/'+idProduto,
			type:'POST',
			success:function(retorno){
				console.log(retorno);
			}
		});
    });
});
