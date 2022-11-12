<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Confirmação Compra</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
        <link rel="shortcut icon" href="../../image/icon.png">

		<script>
            function cliqui() {
                document.getElementById("check").click();
            }
        </script>

	</head>


	<body onload="cliqui(),select()">
	<?php
        session_start()
    ?>
		<div class="menu">
			<input type="checkbox" id="check">

			<header>
				<label for="check">
					<ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
				</label>


				<div class="left">
					<h3>In <span>Lines</span></h3>
				</div>

				<div class="right">
                    <a href="carrinho_front.php" class="carrinho">
                        <ion-icon name="cart"></ion-icon>
                    </a>
					<?php
                        if($_SESSION["usuariologado"]){
                            echo "<a href='../login/logoff_back.php' class='conta'>
                            <ion-icon name='exit-outline'></ion-icon>
                            </a>";
                        
                        }
                            
                        else{
                            echo "<a href='../login/login_front.php' class='conta'>
                                <ion-icon name='person-outline'></ion-icon>
                            </a>";
                        }
                    ?>
                </div>

			</header>
			<div class="sidebar">
				<center>
					<img src="../../image/InLines.png" class="img" alt="In Lines">
					<br>
                    <?php
                        if($_SESSION["usuariologado"]){
                          echo"<h3 class='h3_bemvindo'>Bem-vind<i class='fa-brands fa-octopus-deploy'></i>!</h3>";   
                        }
                        else if($_SESSION["isadm"])
                            echo "<span class='conta'>Bem-vinde ADM<span>";   
                        else 
                            echo"<h2>Menu</h2>";
                    ?>
				</center>

				<a href="../../index.php">
					<!-- <ion-icon name="home"></ion-icon></i><span>Home</span> -->
					<i class="fa-brands fa-octopus-deploy"></i></i><span> Home</span>
				</a>
				<!-- <a href="../produtos/cad_pesq_produtos_front.php">
					<ion-icon name="cart"></ion-icon><span>Produtos</span>
				</a> -->
				<!-- <a href="Prog/usuarios/cad_pesq_usuario_front.php">
					<ion-icon name="body"></ion-icon><span>Usuários</span>
				</a> -->
				<a href="../venda/selecao_produtos_front.php">
					<ion-icon name="bag-check-outline"></ion-icon><span>Produtos</span>
				</a>
				<!-- < ?php
                    if($_SESSION == $_SESSION["isadm"])
                        echo"<a href='../produtos/cad_novo_produto_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Tabela Produtos</span>
                            <a>";
                        echo"<a href='../usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela Usuários</span>
                            </a>";
                ?> -->
				<a href="estatisticas.php">
                    <i class="fa-solid fa-magnifying-glass-chart"></i><span> Estatísticas</span>
                </a>

				<a href="../devs.php">
					<ion-icon name="code"></ion-icon><span>Devs</span>
				</a>
				
 				<!-- <a href="Prog/login/login_back.php">
                    <ion-icon name="exit-outline"></ion-icon><span>Sair</span>
                </a> -->

				<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
				<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
				<script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>

			</div> <!-- sidebar -->
		</div> <!-- menu -->




		<div class="mae">
			<div class="container">

				<!-- <a href="ancora"></a> -->
				<?php
					//session_start();
					$id_usuario = 1; // Depois precisamos alterar para pegar da $_SESSION
					include "confirmacao_compra_back.php";
				?>

				<hr>
				<h2>Resumo da compra</h2>
				<hr>

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
					</div>

					<?php
						$total = 0.0;

						// Criar linhas com os dados dos produtos
						foreach ($resultado_lista as $linha)
						{ 
							$id_produto = $linha['id_produto'];
							$total += floatval($linha['subtotal']);
					?>
							<div class='row'>
								<div class='cell cellDescricao'>
									<?php echo $linha['descricao']; ?>
								</div>
								<div class='cell cellPreco'>
									<?php echo $linha['preco']; ?>
								</div>
								<div class='cell cellPreco'>
									<?php echo $linha['quantidade_carrinho']; ?>
								</div>
								<div class='cell cellPreco'>
									<?php echo $linha['subtotal']; ?>
								</div>
							</div>
					<?php 
						}  
						echo "<h3>Total: R$ ".number_format($total, 2, ',', '.');".</h3>";
					?>

					<br><br>
					<hr>

					<h3>Deseja confirmar?</h3>
					<a href="finalizacao_compra_front.php" class="btn_finalizar_carrinho">Finalizar</a>
					<a href="carrinho_front.php" class="btn_cancelar_carrinho">Cancelar</a>&nbsp;&nbsp;
				</div>
			</div> <!-- container -->
		</div> <!-- mae -->
	</body>
</html>