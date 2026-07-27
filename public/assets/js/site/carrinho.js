$(document).ready(function(){

    var main_content = $("#main_content"); /* ok */
    var center_content = main_content.find(".center_content"); /* ok */
    var shopping_cart = main_content.find(".shopping_cart"); /* ok */
    var products_cart = shopping_cart.find('#products_cart'); /* ok */
    var price_cart = shopping_cart.find(".price"); /* ok */
    var btn_add_carrinho = center_content.find(".btn_add_carrinho"); /* ok */

	function totalProdutosCarrinho()
	{
		return $.ajax({
			url: '/carrinho/get',
			dataType: 'json',
			success: function(retorno)
			{
				console.log("A grande Volta: ",retorno);
				products_cart.html(retorno.numeroProdutosCarrinho);
				price_cart.html(retorno.valorProdutosCarrinho);
			}/* end call back success */
		});/* end ajax /carrinho/get */
	} /* end totalProdutosCarrinho() */

    btn_add_carrinho.on('click', function(event){
		event.preventDefault();
		
		var idProduto = $(this).attr('data-id');
				
		$.ajax({
			url: '/carrinho/add/'+idProduto,
			type: 'POST',
			success: function(){
				totalProdutosCarrinho();
			}/* end call back success */
		});/* end ajax /carrinho/add/ */
    });/* end btn_add_carrinho.on */

}); /* end ready document */
