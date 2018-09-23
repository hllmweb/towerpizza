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
							<li><a href="#inicio" class="para-id">Início</a></li>
							<li><a href="#sobre-nos" class="para-id">Quem Somos</a></li>
							<li><a href="#promocoes" class="para-id">Promoções</a></li>
							<li><a href="cardapio.php">Cardápio</a></li>
							<li><a href="#contato" class="para-id">Contato</a></li>
							<li><a href="cardapio.php" class="btn-solicitar-topo">Peça Já</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="limite">
				<h2 class="titulo-topo fadeInRightSm animated"><div class="bg"><span class="topo">Faça seu pedido</span></div> <span>ON-LINE</span> <a href="" class="btn-solicitar-header blink">Clique Aqui</a></h2>
			</div>
			<div class="mascara"></div>

		</header>

		<div id="sobre-nos">
			<div class="limite">
				<div class="recipiente">
					<h2 class="titulo-pagina">Quer qualidade sem pagar mais caro por isso? <br> Então o seu lugar é aqui!</h2>
					<p><span class="att">Repita este prazer <i class="assinatura">Germano Baptista</i> </span></p>
				</div>
			</div>
		</div>

		<div id="promocoes">
			<div class="linha"><h2 class="titulo-pagina-bloco">Promoções</h2></div>
			<div class="bloco-linha">
				<div class="bloco-coluna"><a href=""><img src="img/promocao1.jpg" alt=""></a></div>
				<div class="bloco-coluna"><a href=""><img src="img/promocao2.jpg" alt=""></a></div>
				<div class="bloco-coluna"><a href=""><img src="img/promocao3.jpg" alt=""></a></div>
			</div>
		</div>

	
		
		<div id="cardapio">
			<div class="linha"><h2 class="titulo-pagina-bloco">Nosso Cardápio</h2></div>
			<div id="categorias">
				<ul class="limite">
					<li><a href="cardapio.php?lista=pizza">Pizza</a></li>
					<li><a href="cardapio.php?lista=bebidas">Bebidas</a></li>
					<li><a href="cardapio.php?lista=sobremessa">Sobremessa</a></li>
				</ul>
			</div>	

			<h3 class="titulo-pagina-cardapio">Pizzas Salgadas</h3>
			<div class="bloco-linha-cardpio">
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="#" onclick="abrirpopup('pedidos.php?id_pedido=2','modal-corpo-grande'); return false;" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>

				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>								
			</div>
		</div>
				

		<div id="cardapio">
			<!-- <div class="linha"><h2 class="titulo-pagina-bloco">Nosso Cardápio</h2></div> -->
			<h3 class="titulo-pagina-cardapio">Pizzas Doces</h3>
			<div class="bloco-linha-cardpio">
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>

				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
					<h4>Calabresa Catupiry</h4>
					<a href="" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>								
			</div>
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
            aqui vai ficar itens adicionados ao carrinho
        </div> 		
		

	</div> 
	<div id="modal" class="modal-geral">
		<div id="modal-tamanho">

		</div>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/site.js?v=<?= time(); ?>"></script>
</body>
</html>