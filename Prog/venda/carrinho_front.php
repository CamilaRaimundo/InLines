<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<title>Carrinho</title>
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

			<a href="../../index.php"><ion-icon name="home"></ion-icon></i><span>Home</span></a>
			<!-- <a href="../produtos/cad_pesq_produtos_front.php"><ion-icon name="cart"></ion-icon><span>Cad. Produtos</span></a> -->
			<!-- <a href="cad_pesq_usuario_front.php"><ion-icon name="body"></ion-icon><span>Usuários</span></a> -->
			<?php
                        if($_SESSION["isadm"]){
                            echo "<a href='../produtos/cad_pesq_produtos_front.php'>
                            <ion-icon name='cart'></ion-icon><span>Cad. Produtos</span>
                            </a>";
                            echo "<a href='../usuarios/cad_pesq_usuario_front.php'>
                            <ion-icon name='body'></ion-icon><span>Tabela usuários</span>
                            </a>";
                        }
                            
                    ?>
			<a href="selecao_produtos_front.php"><i class="fa-brands fa-octopus-deploy"></i><span> Produtos</span></a>
			<a href="../devs.php"><ion-icon name="code"></ion-icon><span>Devs</span></a>
			<!-- <a href="Prog/login/login_back.php">
                    <ion-icon name="exit-outline"></ion-icon><span>Sair</span>
                </a> -->

		</div>


		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<script src="https://kit.fontawesome.com/58fe79a519.js" crossorigin="anonymous"></script>


		<div class="mae">
			<div class="container">
				<a href="ancora"></a>

				<hr>
				<h2>Carrinho</h2>
				<hr><br><br>

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
				<form action="?acao=up" method="post">
				<div class='table'>
					<div class='row'>
						<!-- <div class='cell cellDescricao cellHeader'>
							Imagem
						</div> -->
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
						<div class='cell cellAcoes'>
							&nbsp;
						</div>
					</div>

					
					
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
						<!-- <div class='cell cellDescricao'> -->
						<!-- <img src="../../image/'.< ?php  echo $linha['imagem']; ?>'.jpeg""> -->

							<!-- <img src="../../image/ < ?php echo " '. $linha["imagem"] .' '.jpeg' ?>"> -->
							<!-- // src='../../image/" . $linha['imagem'] . ".jpeg'> -->
						<!-- </div> -->


						<div class='cell cellDescricao'>
							<?php echo $linha['descricao']; ?>
						</div>
						
						<div class='cell cellPreco'>
							<?php echo $linha['preco']; ?>
						</div>
						<div class='cell cellPreco'>
							<?php
								if($linha['quantidade_carrinho'] > 1){
									echo "<a href='?acao=menos&id_produto=" .$id_produto. "'><i class='fa-solid fa-minus'></i></a>";
								}

							echo $linha['quantidade_carrinho'];
							echo "<input type='hidden' value=' " .$linha['quantidade_carrinho']. " ' id='' .$id_produto. ''>";
							
							if($linha['quantidade_carrinho'] < $linha['estoque']){
								echo "<a href='?acao=mais&id_produto=" .$id_produto. "'><i class='fa-solid fa-plus'></i></a>";
							}
							?>

							<!-- < ?php
								if($linha['quantidade_carrinho'] < 1)
								{
									echo '<script language="javascript">';
									echo "alert('O produto será removido do carrinho!')";
									echo '</script>';

									echo "<a href='#'><i class='fa-solid fa-minus'></i></a>";
									echo "<input type='text' size='1' readonly name='produto[$id_produto]'
								value=$linha'['quantidade_carrinho']'>"; 
									echo "<a href='?acao=mais&id_produto=< ?php echo $id_produto; ? >'><i class='fa-solid fa-plus'></i></a>";
									
								}
							?> -->
									<!-- meu certo, eu acho -->
							<!-- <a href='?acao=menos&id_produto=< ?php echo $id_produto; ?>'><i class="fa-solid fa-minus"></i></a>
							<input type="text" size="1" readonly name="produto[< ?php echo $id_produto; ?>]"
								value="< ?php echo $linha['quantidade_carrinho']; ?>"> 
							<a href='?acao=mais&id_produto=< ?php echo $id_produto; ?>'><i class="fa-solid fa-plus"></i></a> 
							</div> -->

							<!-- <div class="cart-row-cell quant">
                                <ul> -->
                                    <!-- < ?php
                                        if($linha['quantidade_carrinho'] > 1){
                                            echo "<a href='?acao=menos&id_produto=" .$id_produto. "'><i class='fa-solid fa-minus'></i></a>";
                                        } -->
                                    
                                    <!-- // <li>
										echo $linha['quantidade_carrinho'];
									// <!-- </li> -->
                                    <!-- // quantidade de estoque -->
                                    	<!-- echo "<input type='hidden' value=' " .$linha['quantidade_carrinho']. " ' id='' .$id_produto. ''>"; -->
									<!-- // <input type="text" size="1" readonly name="produto[< ?php echo $id_produto; ? >]" value="< ?php echo $linha['quantidade_carrinho']; ? >">  -->
									<!-- // < ?php --> 
									<!-- if($linha['quantidade_carrinho'] < $linha['estoque']){
										echo "<a href='?acao=mais&id_produto=" .$id_produto. "'><i class='fa-solid fa-plus'></i></a>";
									}

                                    ?> -->
                                <!-- </ul>-->
                            </div> 

						<div class='cell cellPreco'>
							<?php echo $linha['subtotal']; ?>
						</div>

						<div class="lixeira_icon">
						<a href='?acao=del&id_produto=<?php echo $id_produto; ?>'><i class="fa-solid fa-trash"></i></a>
						</div>
						
					<!-- </div> -->
					</div> 	
					<?php 
						}
					}

					else
						echo "<p>Não há produtos no carrinho</p>";
						echo "<h3>Total da compra: R$ ".number_format($total, 2, ',', '.');".</h3>";
					
					echo"<br><br>";
					// <!-- <input type="submit" value="Atualizar Carrinho"/>&nbsp;&nbsp; -->
					echo "<a href='selecao_produtos_front.php'>Continue Comprando</a>&nbsp;&nbsp;";
					// <?php
					if($linha['quantidade_carrinho'] <= 0)
					{
						echo"<a href='#'>Finalize sua Compra</a>";
						echo '<script language="javascript">';
						echo "alert('Não há produtos no seu carrinho!')";
						echo '</script>';	
					}
					else if($linha['quantidade_carrinho'] > 0)
						echo"<a href='confirmacao_compra_front.php'>Finalize sua Compra</a>";
					?>
					
					
				</form>
			</div> <!-- container -->
 		</div> <!-- mae -->
	</body>
</html>
