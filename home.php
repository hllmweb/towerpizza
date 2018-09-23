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
					<a href="#" onclick="abrirpopup('pedidos.php?id_pedido=2','modal-corpo-grande'); return false;" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
				</div>
				<div class="bloco-cardapio">
					<img src="img/c1.jpg" alt="">
                    <h4>Calabresa Catupiry</h4>
                    <a href="#modal" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
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
            if(isset($cardapio) && $cardapio == "bebidas"):
        ?>        
            <div class="linha"><h2 class="titulo-pagina-bloco">Nosso Cardápio</h2></div>
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
                    <a href="#modal" class="btn-peca"><i class="fas fa-cart-plus"></i> Peça Já</a>
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
				
        <?php  endif; ?>	