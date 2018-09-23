<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tower Pizza</title>
	
	<!--css-->
	<link rel="stylesheet" href="css/site.css?v=<?= time(); ?>">

	<!--plugins-->
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<div id="geral">
		<header id="inicio">
			<div class="topo">
				<div class="limite">
					<div class="logo"><a href="index.php"><img src="img/logo-branco.png" alt="Tower Pizza"></a></div>
					<nav class="navegacao">
						<ul>
							<li><a href="index.php">Início</a></li>
							<li><a href="index.php#sobre-nos">Quem Somos</a></li>
							<li><a href="index.php#promocoes">Promoções</a></li>
							<li><a href="cardapio.php">Cardápio</a></li>
							<li><a href="#contato" class="para-id">Contato</a></li>
							<li><a href="#" id="carrinho" class="icon-carrinho"><span class="total-pagar">R$ 0,00</span> <i class="fas fa-shopping-cart"></i> </a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="limite">
				<h2 class="titulo-topo fadeInRightSm animated"><div class="bg"><span class="topo">Faça seu pedido</span></div> <span>ON-LINE</span> <a href="" class="btn-solicitar-header blink">Clique Aqui</a></h2>
			</div>
			<div class="mascara"></div>

		</header>	
        
        <div id="categorias" class="zerar-margem-top">
            <ul class="limite">
                <li><a href="cardapio.php?lista=pizza">Pizza</a></li>
                <li><a href="cardapio.php?lista=bebidas">Bebidas</a></li>
                <li><a href="sobremessa">Sobremessa</a></li>
            </ul>
        </div>	
                   

		<div id="cardapio">	
            <?php 
				$cardapio = $_GET["lista"];
				if(isset($cardapio) && $cardapio == "pizza"):
            ?>
            <div class="linha"><h2 class="titulo-pagina-bloco">Nosso Cardápio</h2></div>
			<h3 class="titulo-pagina-cardapio">Pizzas Salgadas</h3>
			<div class="bloco-linha-cardpio">
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="#modal" data-id-item="14" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
                    <h4>Calabresa Catupiry</h4>
                    <a href="#modal" data-id-item="15" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
                    <a href="#" onclick="abrirmodal(20); return false;" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>

				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>								
			</div>

            <?php  endif; ?>	
            <?php 
				$cardapio = $_GET["lista"];
				if(isset($cardapio) && $cardapio == "bebidas"):
            ?>
            <div class="linha"><h2 class="titulo-pagina-bloco">Nosso Cardápio</h2></div>
			<h3 class="titulo-pagina-cardapio">Bebidas</h3>
			<div class="bloco-linha-cardpio">
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="#" onclick="abrirpopup('pedidos.php?id_pedido=2','modal-corpo-grande'); return false;" data-id="10" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
                    <h4>Calabresa Catupiry</h4>
                    <a href="#modal" data-id-item="2" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
                    <a href="#" onclick="abrirmodal(20); return false;" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>

				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>								
			</div>

            <?php  endif; ?>	        
        
        </div>

		<footer id="rodape">
			<div class="limite">
				
				<div class="linha-contato"><h2 class="titulo-pagina-bloco-contato" id="contato">Contato</h2></div>

				<div class="contato">
					<form method="post">
						<div class="contato_esquerda">
							<input type="text" name="nome" id="nome">
							<label for="nome">Nome</label>
							<input type="text" name="email_contato" id="email_contato">
							<label for="email_contato">Email</label>
							<input type="text" name="assunto" id="assunto">
							<label for="assunto">Assunto</label>

							<div class="enderecos">
								<span>ENDEREÇO
									<div class="social">
										<a href="https://pt-br.facebook.com/towerpizzaria/" target="_blank"><i class="fab fa-facebook-square"></i></a>
										<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
									</div>
								</span>
								<p>Rua Pedro João Pereira, N° 570 - Mato Alto, Araranguá-SC<br>E-Mail: contato@towerpizza.com.br<br>Fone: (48) 99832-7077</p>
							</div>

						</div>
						<div class="contato_direita">
							<textarea name="mensagem" id="mensagem"></textarea>
							<label for="mensagem" style="margin-top:-235px; margin-bottom:170px;">Assunto</label>
							<button type="submit">ENVIAR</button>
						</div>
					</form>	
				</div>			
			</div>
        </footer>
        

	    <a href="https://api.whatsapp.com/send?phone=554898327077&text=Fa%C3%A7a%20Seu%20Pedido" target="_blank" class="abrir-chat">
			<img src="img/whatsapp-icon.png" alt="Abrir chat">
        </a>    
               
        <div id="nav-carrinho">
            <ul id="itens-pedido">
                <?php if(count($_SESSION["carrinho"]) == 0):?>
                <li id="cesta-vazia">Carrinho vazio</li>    
                <?php 
                    else:
                        print_r($_SESSION["carrinho"]);
                        //$i = 0;
                        foreach($_SESSION["carrinho"] as $chave => $dados):
                       
                        ?>
                        
                            <li class="ativo"><?= $dados["id_item"]." ".$dados["produto_titulo"]."".$dados["qtd"]." R$".$dados["valor_item_atual"] ?> <a href="#" class="removerItem" data-id-carrinho="<?= $chave; ?>"><i class="fas fa-times-circle"></i></a>
                                <input type="text" class="qtd" name="qtd" value="<?= $dados["qtd"] ?>">
                                <input type="text" name="tamanho[]" value="<?= $dados["tamanho"] ?>">  
                                <input type="text" class="valor_item_atual" name="valor_item_atual" value="<?= $dados["valor_item_atual"] ?>">
                                <textarea name="obs" class="obs"><?= $dados["obs"]; ?></textarea>
                           </li>
                            
                        <?php  
                           // $i++;
                           endforeach;

                    endif; 
                  
                    $itens_carrinho = (isset($_SESSION["carrinho"])) ? json_encode($_SESSION["carrinho"]) : "[]";
                   
                ?>
            </ul>        
            <!-- <form id="formCarrinho" method="POST"> -->
            <input type="text" id="itens_carrinho" name="itens_carrinho" value='<?= $itens_carrinho; ?>'>
            <div class="bloco-btn">
                <div class="bloco-bottom">
                    <div class="preco_total">R$ 00,00</div>
                    <input type="text" id="valor_total" name="valor_total" value="">
                </div>
                <a href="#" onclick="escondercarrinho(); return false;" class="btn-continuar">Continuar</a>
                <a href="#" onclick="abrirpopup('login.php','modal-corpo-pequeno'); return false;" class="btn-finalizar">Finalizar <i class="fas fa-angle-right"></i></a>
            </div>
            <!-- </form> -->
        </div>
        
        
        <div id="modal" class="modal-geral">
		    <div id="modal-tamanho">
                <div class="modal-titulo">
                    <a href="#" class="btn_x_modal_grande" onclick="fecharpopup(); return false;"><i class="fa fa-times"></i></a>
                </div>
               
                <form id="formCardapio" method="POST">
                <div class="modal-conteudo">
                    <div class="bloco-esquerdo">
                        <div class="imagem-produto">
                            <img src="img/item_21.jpg">
                        </div>
                        <div class="item-conteudo-produto">
                            <h3>Calabresa</h3>
                            <input type="text" id="id_item" name="id_item">
                            <input type="text" id="produto_titulo" name="produto_titulo" value="Pizza - Calabresa">
                            <p>Queijo prato, calabresa, peperoni e orégano</p>
                            <div class="item-preco-qtd">
                                <div class="preco">
                                    <span class="sub">R$</span>35,<span class="sup">00</span>
                                </div>
                                <input type="text" class="valor_item" id="valor_item" name="valor_item" value="35.2">
                                <input type="text" class="valor_item_atual" id="valor_item_atual" name="valor_item_atual" value="35.2">
                                <div class="quantidade">
                                    <a href="#" class="aumentar">+</a>
                                    <input type="number" value="1" min="1" max="99" placeholder="qtd" class="qtd" id="qtd" name="qtd">
                                    <a href="#" class="diminuir">-</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="bloco-direito">
                        <ul id="item-add">
                    <!--        <div class="item-add-titulo">Itens Adicionais</div>
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
                            </div>-->           
                        </ul>
                         

                        <ul id="item-add-tamanho">
                            <div class="item-add-titulo">Tamanho</div>
                            <li><input type="radio" name="tamanho[]" value="Pequena">Pequena</li>
                            <li><input type="radio" name="tamanho[]" value="Média">Média</li>
                            <li><input type="radio" name="tamanho[]" value="Grande">Grande</li>  
                        </ul>

                        <ul id="item-add">
                        <div class="item-add-titulo">Itens Adicionais</div>
                            <li class="ativo">
                                <textarea name="obs" id="obs" placeholder="Observações"></textarea>
                            </li>                       
                        </ul>
                    </div>
                </div>

                <div class="modal-rodape">
                    <button type="submit">Adicionar</button>
                </div>

                </form>
		    </div>
        </div>
       
       <div id="modalAcesso" class="modal-geral">
		    <div id="modal-tamanho" class="ativar-loading">

            </div>        
        </div> 
    
        <!-- <div class="mascara_branca"><div class="loading_circle"><div class="loading fade"></div><div class="loading2 fade"></div></div></div> -->
	</div> 
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/site.js?v=<?= time(); ?>"></script>       
</body>
</html>