
<?php 
    $pedido = $_GET["id_pedido"];
?>

<div class="modal-titulo">
    <a href="#" class="btn_x_modal_grande" onclick="fecharpopup(); return false;"><i class="fa fa-times"></i></a>
</div>
<form id="formCardapio" method="POST">
<div class="modal-conteudo">
<div style="font-size:19px; color:#000;"><?= $pedido; ?><br></div>
    <div class="bloco-esquerdo">
        <div class="imagem-produto">
            <img src="img/item_21.jpg">
        </div>
        <div class="item-conteudo-produto">
            <h3>Calabresa</h3>
            <input type="text" id="id_produto" value="<?= $pedido; ?>">
            <input type="text" id="produto_titulo" value="Pizza - Calabresa">
            <p>Queijo prato, calabresa, peperoni e orégano</p>
            <div class="item-preco-qtd">
                <div class="preco">
                    <span class="sub">R$</span>35,<span class="sup">00</span>
                    
                </div>
                <input type="number" value="35.2" class="valor_total">
                <div class="quantidade">
                    <a href="#" class="aumentar">+</a>
                    <input type="number" value="1" min="1" max="99" placeholder="qtd" class="qtd" id="qtd">
                    <a href="#" class="diminuir">-</a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="bloco-direito">
        <ul id="item-add">
            <div class="item-add-titulo">Itens Adicionais</div>
            <div class="item-bloco">
                <li class="ativo">
                    <div class="item-qtd">  
                        <a href="#" class="aumentar">+</a>
                        <input type="number" value="0" placeholder="qtd" class="qtd">
                        <a href="#" class="diminuir">-</a>
                    </div>
                    <div class="item-texto">Coca-Cola 2 Litros</div>
                    <div class="item-preco">R$ 9,90<input type="number" value="9.90" class="preco_item"></div>
                </li>
                <li class="ativo">
                    <div class="item-qtd">  
                        <a href="#" class="aumentar">+</a>
                        <input type="number" value="0" placeholder="qtd" class="qtd">
                        <a href="#" class="diminuir">-</a>
                    </div>
                    <div class="item-texto">Antartica Lata</div>
                    <div class="item-preco">R$ 6,20<input type="number" value="6.20" class="preco_item"></div>           
                </li>
                <li>
                    <div class="item-qtd">  
                        <a href="#" class="aumentar">+</a>
                        <input type="number" value="0" placeholder="qtd" class="qtd">
                        <a href="#" class="diminuir">-</a>
                    </div>
                    <div class="item-texto">Pepsi Lata</div>
                    <div class="item-preco">R$ 7,90</div>            
                </li>
                <li>
                    <div class="item-qtd">  
                        <a href="#" class="aumentar">+</a>
                        <input type="number" value="0" placeholder="qtd" class="qtd">
                        <a href="#" class="diminuir">-</a>
                    </div>
                    <div class="item-texto">Pepsi</div>
                    <div class="item-preco">R$ 5,00</div>             
                </li> 
            </div>           
        </ul>

        
        <ul id="item-add-tamanho">
            <div class="item-add-titulo">Tamanho</div>
            <li><input type="radio" name="tamanho" value="Pequena" checked>Pequena</li>
            <li><input type="radio" name="tamanho" value="Média">Média</li>
            <li><input type="radio" name="tamanho" value="Grande">Grande</li>  
        </ul>

    </div>
</div>
<!--Pensar numa solução para identificar se é pagina index ou cardapio-->
<div class="modal-rodape">
    <button type="submit">Adicionar</button>
</div>

</form>

<script>
//primeiro aumenta a qtd no input
$(".aumentar").on("click",function(e){     
    var qtd = $(this).parent().find(".qtd");
    qtd.val( parseInt(qtd.val()) +1);
 
    recalcular();
    e.preventDefault();
});


//diminui ao clicar
$(".diminuir").on("click",function(e){
  var qtd = $(this).parent().find(".qtd");
  
  if(qtd.val() == 1){
      $(this).val("1");
  }else{
    qtd.val( parseInt(qtd.val()) -1);
  }

  recalcular();
  e.preventDefault();
});



//adicionar a classe ativo e recalcular
//funcao recalcular itens estar quase pronta.

//funcao recalcular
function recalcular(){
    valor_total = 0;
    valor_total_item = 0;
    $("#item-add li.ativo").each(function(){
      
        qtd = $(this).find(".qtd").val();
        valor = $(this).find(".preco_item").val();
    
        valor_total_item += qtd * valor;    
    });

    preco_array = valor_total_item.toFixed(2).toString().split(".");

    //console.log(valor_total_item);


    /*$("#item-add li").each(function(){
        $(this).addClass("ativo");
        if($(this).hasClass("ativo")){
            qtd_item = $(this).find(".qtd").val();
            preco_item = $(this).find(".preco-item").val();
            
            valor_total_item += qtd_item * preco_item;

            console.log(valor_total_item);
        }   
    });*/




   //preco_array = valor_total.toFixed(2).toString().split(".");

  //console.log(preco_array[0]);
  //console.log(preco_array[1]);
  
  // + valor_total.toFixed(2)
  $(".preco").html("<span class='sub'>R$</span>"+preco_array[0]+",<span class='sup'>"+preco_array[1]+"</span>");
}


//visivel e invisivel itens adicionais
//$("#item-add li").hide();


prod_array = [];
$("#formCardapio").submit(function(e){
   
    var list            = $("#nav-carrinho ul#itens-pedido"),
        produto_titulo  = window.sessionStorage.setItem('produto_titulo',$("#produto_titulo").val()),
        qtd             = window.sessionStorage.setItem('qtd',$("#qtd").val()),


    input_hidden  	= $("#produtos_array");
    item = prod_array.length+1;
    /*pathname = window.location.pathname;
    arr = pathname.split("/");
    

    if(arr[2] == "index.php"){       
        //window.location = "cardapio.php";
        //window.stop();
        //e.stopPropagation();

        url = "cardapio.php#abrir-carrinho";
        $(location).attr("href", url);
        
    }*/


    fecharpopup();
    $("#nav-carrinho").addClass("abrir-nav-carrinho");

    if($("#nav-carrinho").hasClass("abrir-nav-carrinho")){
        console.log("carrinho aberto");
        $("#cesta-vazia").hide();
        list.prepend("<li>Descricao do produto</li>");
       
    }
   
    prod_array.push('{"qtd":"'+window.sessionStorage.getItem('qtd')+'","produto titulo":"'+window.sessionStorage.getItem('produto_titulo')+'"}');

    input_hidden.val("["+prod_array+"]");


    e.preventDefault();
});




</script>