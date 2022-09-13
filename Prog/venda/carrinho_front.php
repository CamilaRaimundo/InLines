<link rel="stylesheet" href="../../css/style.css">
<link rel="shortcut icon" href="../../image/inlines2.png">

<div class="menu">
<input type="checkbox" id="check">

<header>
    <!-- <a name="ancora"></a> -->
    <label for="check">
        <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>

	</label>


    <div class="left">
        <h3>In <span>Lines</span></h3> 
    </div>

    <div class="right">
        <a href="carrinho_front.php" class="carrinho"><ion-icon name="cart"></ion-icon></a>
        <a href="../usuarios/cad_pesq_usuario_front.php" class="conta"><ion-icon name="person-outline"></ion-icon></a>
    </div> 

</header>
<div class="sidebar">
    <center>
        <img src="../../image/inlines.png" class="img" alt="In Lines">
        <h2>Menu</h2>
    </center>

    <a href="../../index.html"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
    <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Produtos</span></a>
    <a href="cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a>
    <a href="../venda/selecao_produtos_front.php"><ion-icon name="bag-check-outline"></ion-icon><span>Vendas</span></a>
    <a href="#"><ion-icon name="code"></ion-icon><span>Devs</span></a>

</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<div class="mae">
    <div class="container">
		<?php

			//session_start();
			$acao = $_GET['acao'] ?? '';
			$id_produto = $_GET['id_produto'] ?? 0;
			$id_usuario = 1; // Depois precisamos alterar para pegar da $_SESSION

			if ($acao=='up') 
			{
				if (is_array($_POST['produto']))
					$produto = $_POST['produto'];
				else
					$produto = array();
			}

			include "carrinho_back.php";
		?>

		<div class='table'>
			<div class='row'>
				<div class='cell cellDescricao cellHeader'>
					Descrição
				</div>
				<div class='cell cellPreco cellHeader'>
					Preço
				</div>
				<div class='cell cellPreco cellHeader'>
					Quantidade
				</div>
				<div class='cell cellPreco cellHeader'>
					Subtotal
				</div>
				<!-- <div class='cell cellAcoes'>
					&nbsp;
				</div> -->
			</div>

			<form action="?acao=up" method="post">
			
			<?php
				$total = 0.0;

				if(!empty($resultado_lista))
				{
				foreach ($resultado_lista as $linha)
					{ 
						$id_produto = $linha['id_produto'];
						$total += floatval($linha['subtotal']);
					
			?>
					<div class='row'>
					<!-- tirar -->
						
					<div class='cell cellDescricao'>
					<a href='?acao=del&id_produto=<?php echo $id_produto; ?>'><ion-icon name="close"></ion-icon></a>
							<?php echo $linha['descricao']; ?>
						</div>
						<div class='cell cellPreco'>
							<?php echo $linha['preco']; ?>
						</div>
						
						<div class='cell cellPreco'>
						<ion-icon name="remove"></ion-icon>
							<input type="text" size="1" name="produto[<?php echo $id_produto; ?>]"
								value="<?php echo $linha['quantidade']; ?>" />
						<ion-icon name="add"></ion-icon>
						</div>
					
						<div class='cell cellPreco'>
							<?php echo $linha['subtotal']; ?>
						</div>
						<!-- <div class='cell cellAcoes'>
							<a href='?acao=del&id_produto=< ?php echo $id_produto; ?>'>Excluir</a> original
						</div> -->
					</div>
			<?php 
				}
			}
			else
				echo "<p>Não há produtos no carrinho</p>";
				echo "<h3>Total da compra: R$ ".number_format($total, 2, ',', '.');".</h3>";
			?>

			<br><br>
			<input type="submit" value="Atualizar Carrinho" />&nbsp;&nbsp;
			<a href="selecao_produtos_front.php">Continue Comprando</a>&nbsp;&nbsp;
			<a href="confirmacao_compra_front.php">Finalize sua Compra</a>
			
			</form>

		</div>
	</div>
</div>