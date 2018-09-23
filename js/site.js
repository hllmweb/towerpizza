// $('a[href="#"]').click(function(e) {
// 	e.preventDefault();
// });

//barra de menu fixa
$(window).scroll(function() {
	if($(this).scrollTop() > 200){
		$(".topo").addClass("fixo");
		$(".btn-solicitar-topo").addClass("btn-solicitar-topo-bg blink");
		$(".logo img").addClass("logo-menor");
	}else{
		$(".topo").removeClass("fixo");
		$(".btn-solicitar-topo").removeClass("btn-solicitar-topo-bg blink");
		$(".logo img").removeClass("logo-menor");
	}

	if($(this).scrollTop() > 570){
		$("#categorias").addClass("fixo-menu-cardapio");
    }else{
        $("#categorias").removeClass("fixo-menu-cardapio");
    }

});

//menu click
$("a.para-id").on("click", function(e){
	e.preventDefault();
	$('html, body').animate({
		scrollTop: $( $.attr(this, 'href') ).offset().top-100
		}, 500);
});

//menu click para o carrinho de compras
$("#carrinho").on("click",function(e){
	e.preventDefault();

	$("#nav-carrinho").toggleClass("abrir-nav-carrinho");
	if($("#nav-carrinho").hasClass("abrir-nav-carrinho")){
		console.log("aberto");
	}else{
		console.log("fechado");
	}
});


$(".bloco-cardapio a").click(function(e){
	id_item = $(this).data("id-item");
	console.log(id_item);


	$("#modal").addClass("modal-ativo");
	if($("#modal").hasClass("modal-ativo")){
		$("#modal-tamanho").addClass("modal-corpo-grande");
		$("#id_item").attr("value",id_item);

		//carregar toda modal com os respectivos valores (criar uma função para isso e fazer a requisicao via ajax) para listar os valores referente ao item
	}
	
	$("#formCardapio")[0].reset();

	e.preventDefault();
});

// $(".bloco-btn a.btn-finalizar").click(function(e){
// 	$("#modalAcesso").addClass("modal-ativo");
// 	if($("#modalAcesso").hasClass("modal-ativo")){
// 		$("#modalAcesso").find("#modal-tamanho").addClass("modal-corpo-pequeno");
// 		/* loading antes de concluir o carregamento da página*/
// 		//$('#geral').prepend('<div class="mascara_branca"><div class="loading_circle"><div class="loading fade"></div><div class="loading2 fade"></div></div></div>');
		
// 		$(".modal-corpo-pequeno").load("login.php");
// 	}	

// 	e.preventDefault();
// });
//$(".loading_circle").hide();
// ABRIR POPUP
function abrirpopup(pagina,modal_corpo_tamanho){
	//$.get(pagina, function(data) {

		// $("#modalAcesso").addClass("modal-ativo");
		// if($("#modalAcesso").hasClass("modal-ativo")){
		// 	$("#modalAcesso").find("#modal-tamanho").addClass(modal_corpo_tamanho);
		// 	$('.'+modal_corpo_tamanho).html(data);					
		// }


		// $("#modalAcesso").addClass("modal-ativo");
		// if($("#modalAcesso").hasClass("modal-ativo")){
		// 	$("#modalAcesso").find("#modal-tamanho").addClass(modal_corpo_tamanho);
		// 	/* loading antes de concluir o carregamento da página*/
		// 	//$('#geral').prepend('<div class="mascara_branca"><div class="loading_circle"><div class="loading fade"></div><div class="loading2 fade"></div></div></div>');
			
		// 	$("."+modal_corpo_tamanho).load(pagina);
		// }	
		

		// if(modal_corpo_tamanho == 'modal_corpo_medio'){
		// 	$('#modal_tamanho').addClass(modal_corpo_tamanho);
		// 	$('.'+modal_corpo_tamanho).html(data);										
		// }
		// if(modal_corpo_tamanho == 'modal_corpo_grande'){	
		// 	$('#modal_tamanho').addClass(modal_corpo_tamanho);
		// 	$('.'+modal_corpo_tamanho).html(data);										
		// }

	// 	$("#modalAcesso").fadeIn(100);
			
	// });
	// html = $(".modal-geral").html('<div class="mascara_branca"><div class="loading_circle"><div class="loading fade"></div><div class="loading2 fade"></div></div></div>');	
	
	$.ajax({
		url: pagina,
		type: 'GET',
		cache: false,
		async: true,
		beforeSend: function(){
			$("#modalAcesso").addClass("modal-ativo");
			$(".ativar-loading").html('<div class="mascara_branca"><div class="loading_circle"><div class="loading fade"></div><div class="loading2 fade"></div></div></div>');	
		}
	}).done(function(data){
		//$('.mascara_branca').fadeOut();
		
		//$("#modalAcesso").addClass("modal-ativo");
		if($("#modalAcesso").hasClass("modal-ativo")){
			//$("#modalAcesso").find("#modal-tamanho").addClass(modal_corpo_tamanho);
			//$("."+modal_corpo_tamanho).html(data);
			$(".ativar-loading").addClass(modal_corpo_tamanho);
			$("."+modal_corpo_tamanho).html(data);
			console.log("ok existe modal ativo");
		}
				
	});
}

//fechar popup
function fecharpopup(){
	/*$("#modal").fadeOut(0);
	$('#modal-tamanho').removeClass('modal-corpo-pequeno');
	$('#modal-tamanho').removeClass('modal-corpo-medio');	
	$('#modal-tamanho').removeClass('modal-corpo-grande');*/
	$("#modal").removeClass("modal-ativo");
	$("#modalAcesso").removeClass("modal-ativo");
	$("#modal").find('#modal-tamanho').removeClass('modal-corpo-grande');
	$("#modalAcesso").find("#modal-tamanho").removeClass("modal-corpo-medio");
	$("#modalAcesso").find("#modal-tamanho").removeClass("modal-corpo-pequeno");
	
}
function escondercarrinho(){
	$("#nav-carrinho").removeClass("abrir-nav-carrinho");
}
/*$(document).click(function(e) {
	// $(".modal_geral").hide();
	fecharpopup();
});
*/

$("#modal-tamanho").click(function(e) {
	e.stopPropagation();
});

$(document).keydown(function(e) {
	if(e.keyCode == 27){
		//$(".modal_geral").hide();
		fecharpopup();
	}
	
	if(e.keyCode == 27){
		$('#nav-carrinho').removeClass('abrir-nav-carrinho');
	}
});


//contato label 
$(".contato input").change(function(){
	if($(this).val() != ""){
  	$(this).addClass("filled");
  }else{
  	$(this).removeClass("filled");
  }
});


//primeiro aumenta a qtd no input
$(".aumentar").on("click",function(e){
	qtd = $(this).parent().find(".qtd");
	qtd.val(parseInt(qtd.val()) +1);

	recalcularModal();
	e.preventDefault();
});
$(".diminuir").on("click",function(e){
	qtd = $(this).parent().find(".qtd");
	//qtd.val(parseInt(qtd.val()) -1);


	if(qtd.val() == 1){
		$(this).val("1");
	}else{
	  qtd.val( parseInt(qtd.val()) -1);
	}


	recalcularModal();
	e.preventDefault();
});

function recalcularModal(){
	valor_item_atual = 0;
	$(".item-preco-qtd").each(function(){
			
		qtd = $(this).find(".qtd").val();
		valor = $(this).find(".valor_item").val();
		valor_item_atual += qtd * valor;
	});
	
	
	preco_array = valor_item_atual.toFixed(2).toString().split(".");
	
	$(".preco").html("<span class='sub'>R$</span>"+preco_array[0]+",<span class='sup'>"+preco_array[1]+"</span>");
	$(".valor_item_atual").val(valor_item_atual);
}


/*$("#tamanho").change(function(){
	if($(this).is(':checked') == true){
		console.log("ativo");
	}
	
});
*/

$("#formCardapio").submit(function(e){
	e.preventDefault();
	
	if($(":radio").is(":checked")){
		console.log("foi selecionado");
		var dados = $(this).serialize();
	
		$.ajax({
			url: "processador.php?add_carrinho", 
			type: "POST",
			dataType: "json",
			data: dados,
			beforeSend: function(){
				// setting a timeout
				//$(placeholder).addClass('loading');
				$(".preco_total").html("carregando...");
			}
		}).done(function(data){
			$("#nav-carrinho ul#itens-pedido").html("");
			$.each(data,function(i, item){
				//console.log(data[i].id_item+data[i].produto_titulo);
				//console.log(item.id_item+" "+item.produto_titulo+" "+item.valor_item); //aqui deve ser trabalhado os itens no carrinho
			
				fecharpopup();
				$("#nav-carrinho").addClass("abrir-nav-carrinho");
			
				if($("#nav-carrinho").hasClass("abrir-nav-carrinho")){
					var campos 	= "<input type='text' class='qtd' name='qtd' value='"+item.qtd+"'> <input type='text' class='valor_item_atual' name='valor_item_atual' value='"+item.valor_item_atual+"'> <input type='text' name='tamanho[]' value='"+item.tamanho+"'>  <textarea class='obs' name='obs'>"+item.obs+"</textarea>";
					var html 	= "<li class='ativo'>"+item.id_item+item.produto_titulo+" - R$ "+item.valor_item_atual+"<a href='#' class='removerItem' data-id-carrinho='"+i+"'><i class='fas fa-times-circle'></i></a>"+campos+"</li>";
					
					$("#itens-pedido").append(html);
					recalcular();		
				
					$("#itens_carrinho").attr("value",JSON.stringify(data));
						
				}	
	
			});			
		});
	
	}else{
		alert("Selecione o campo!");
		console.log("não foi selecionado");
	}


	

});


recalcular();
function qtdItens(){
	qtd_itens_li = 0;
//	$("#itens-pedido li.ativo").each(function(){
	qtd_itens_li = $("#nav-carrinho ul#itens-pedido li.ativo").length;
	//});
	return qtd_itens_li;
}

//funcao recalcular
function recalcular(){
	/*valor_total = 0;
	qtd_itens_li = 0;

    $("#itens-pedido li.ativo").each(function(){
        qtd = $(this).find(".qtd").val();
        valor_item = $(this).find(".valor_item_atual").val();
	
		valor_total += qtd * valor_item; 
		qtd_itens_li = $("#nav-carrinho ul#itens-pedido li").length;   
    });*/
	
	
	if(qtdItens() == 1){
		//console.log("existe apenas 1 li");
		qtd = $(".qtd").val();
		valor_item = $(".valor_item_atual").val();
		preco_array = parseFloat(valor_item).toFixed(2).toString().split(".");
		$(".preco_total").html("R$ "+preco_array[0]+","+preco_array[1]);
		$(".total-pagar").html("R$ "+preco_array[0]+","+preco_array[1]);
		$("#valor_total").attr("value",preco_array[0]+"."+preco_array[1]);
	}else{
		//console.log("mais de 1 li");
		valor_total = 0;
		$("#itens-pedido li.ativo").each(function(){
			//qtd = $(this).find(".qtd").val();
			valor_item = $(this).find(".valor_item_atual").val();
		
			valor_total += parseFloat(valor_item); 
			
		});
	
		preco_array = valor_total.toFixed(2).toString().split(".");


		$(".preco_total").html("R$ "+preco_array[0]+","+preco_array[1]);
		$(".total-pagar").html("R$ "+preco_array[0]+","+preco_array[1]);
		$("#valor_total").attr("value",preco_array[0]+"."+preco_array[1]);
	  
	}
	return false;
	/*

	if(qtd_itens_li == 1){
		console.log("existe apenas 1 li");
		valor_total = valor_item;
		preco_array = parseFloat(valor_item).toFixed(2).toString().split(".");
		$(".preco_total").html("R$ "+preco_array[0]+","+preco_array[1]);
		$(".total-pagar").html("R$ "+preco_array[0]+","+preco_array[1]);
		$("#valor_total").attr("value",preco_array[0]+"."+preco_array[1]);


	}else{
		console.log("existe mais de 1 li");
		
		preco_array = valor_total.toFixed(2).toString().split(".");


		$(".preco_total").html("R$ "+preco_array[0]+","+preco_array[1]);
		$(".total-pagar").html("R$ "+preco_array[0]+","+preco_array[1]);
		$("#valor_total").attr("value",preco_array[0]+"."+preco_array[1]);
	}*/


//   preco_array = valor_total.toFixed(2).toString().split(".");


//   $(".preco_total").html("R$ "+preco_array[0]+","+preco_array[1]);
//   $(".total-pagar").html("R$ "+preco_array[0]+","+preco_array[1]);
//   $("#valor_total").attr("value",preco_array[0]+"."+preco_array[1]);

	
}

$(document).on("click",".removerItem",function(e){
	id_item = $(this).data("id-carrinho");
	$(this).parents("#itens-pedido li.ativo").remove();


	$.ajax({
		url: "processador.php?del_carrinho",
		type: "POST",
		data: {
			id_item: id_item
		},
		beforeSend: function(){
			$(".preco_total").html("carregando...");
		}
		
	}).done(function(data){
		console.log(data);	
		if(data == "[]"){
				$("#nav-carrinho ul#itens-pedido").append("<li id='cesta-vazia'>Carrinho vazio</li>");
				recalcular();
			}else{
				$("#itens_carrinho").attr("value",data);
				recalcular();
			}
			
			$("#itens_carrinho").attr("value",data);

	});


	e.preventDefault();
});


$(document).on("click","#formAcesso a",function(e){
	form = $(this).data("id");
	alert(form);


	e.preventDefault();
});

/*
function adicionarCarrinho(formulario, pagina){
	
	dados = $(formulario).serializeArray();
	$.ajax({
		type: "POST",
		url: pagina,
		async: true,
		data: dados,
		success: function(dados){
			console.log(dados);
		}
	});

	$("#geral").load("cardapio.php", function(responseTxt, statusTxt, xhr){
		if(statusTxt == "success")
			console.log("ok");
		if(statusTxt == "error")
			console.log("erro");
	});



}*/

/*
if(window.location.hash && window.location.hash == "#abrir-carrinho"){
	// abre carrinho aqui
	//window.location.href.substr(0, window.location.href.indexOf('#'));
	history.pushState(null, null, window.location.href.split('#')[0]);
	$("#nav-carrinho").toggleClass("abrir-nav-carrinho");
	console.log("ok");
}*/


//recuperando valores armazenado na session
// prod_array = '{"qtd":"'+window.sessionStorage.getItem('qtd')+'","produto titulo":"'+window.sessionStorage.getItem('produto_titulo')+'"}';
// $("#produtos_array").val("["+prod_array+"]");

/*history_array = JSON.parse(sessionStorage.getItem("session_array"));
var i;
for(i = 0; i < history_array.length; i++){
	console.log(history_array[i]);
}
console.log(history_array);
*/
/*
history_array = JSON.parse(sessionStorage.getItem("session_array"));
$("#produtos_array").val("["+history_array+"]");

if($("#produtos_array").val() == "[null]"){
	$("#produtos_array").val("");
}else{
	//console.log(history_array.length);
	var i;
	for(i = 0; i < history_array.length; i++){
		$("#produtos_array").val("["+history_array+"]");
		console.log(history_array[i]);
	}
}*/
/*
$.each(history_array,function(key, valor){
	console.log(key+valor);
});
*/
//console.log(history_array);

/*
prod_array = [];
session_array = [];
$("#formCardapio").submit(function(e){
   
    var list            = $("#nav-carrinho ul#itens-pedido"),
        //produto_titulo  = window.sessionStorage.setItem('produto_titulo',$("#produto_titulo").val()),
        //qtd             = window.sessionStorage.setItem('qtd',$("#qtd").val()),
		produto_titulo  = $("#produto_titulo").val(),
        qtd             = $("#qtd").val(),

    input_hidden  	= $("#produtos_array");
	item = prod_array.length+1;
	

	//armazenando session
	session_array.push(qtd+produto_titulo);
	sessionStorage.setItem("session_array",JSON.stringify(session_array));
	
	
	
    fecharpopup();
    $("#nav-carrinho").addClass("abrir-nav-carrinho");

    if($("#nav-carrinho").hasClass("abrir-nav-carrinho")){
        //console.log("carrinho aberto");
        $("#cesta-vazia").hide();
        list.prepend("<li>Descricao do produto</li>");
       
	}
	
	history_array = JSON.parse(sessionStorage.getItem("session_array"));
	//console.log(history_array[0]);

    prod_array.push('{"qtd":"'+sessionStorage.getItem("qtd")+'","produto titulo":"'+history_array[0]+'"}');
    input_hidden.val("["+prod_array+"]");




	//console.log(session_array);

    e.preventDefault();
});
*/

// var array = [1, 2, 3];

// localStorage.setItem("array", JSON.stringify(array));
// array = JSON.parse(localStorage.getItem("array"));



// var options = { 
//     size: ["S", "M", "L", "XL", "XXL"],
//     color: ["Red", "Blue", "Green", "White", "Black"]
// };

// console.log(options.size[0]);