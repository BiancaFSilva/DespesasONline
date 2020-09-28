<?php  
    include 'conecta.php';
	session_start();
	
	$consulta = "SELECT * FROM produtos";
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Despesas ONline</title>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<link href="css/price-range.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
     
		<link rel="icon" href="img/carrinho de compras.png">
	</head>

	<body>
		<header id="header">	
			<div class="header-middle">
				<div class="container">
					<div class="row">
						<div class="col-md-12 clearfix">
							<div class="shop-menu pull-left">  
								<a href="index.php">Despesas ONline</a>
							</div>				
							<div class="shop-menu clearfix pull-right">
								<ul class="nav navbar-nav">
									<li> <a href="login.php"><i class="fa fa-lock"></i> Login</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="header-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="mainmenu">
								<ul class="nav navbar-nav collapse navbar-collapse">
									<li><a href="index.php">Home</a> </li>
									<li><a href="ver_nf.php">Notas emitidas</a> </li> 
									<li><a href="ver_produtos.php" class="active">Vizualizar produtos</a> </li> 
									<li><a href="processa_cad_produto.php">Cadastrar produto</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section  id="slider">
			<div class="container">
				<h3>Produtos cadastrados</h3>
				<table class="table table-hover">
					<thead class="thead-dark">
						<tr>
							<th scope="col">Código do produto </th>
							<th scope="col">Nome </th>
							<th scope="col">Valor unitário </th>    
						</tr>
					</thead>            
					<?php 
					foreach ($conexao -> query($consulta) as $linha) {
					?>                
						<tbody>
							<tr>
								<td><?php echo $linha['id']; ?></td>
								<td><?php echo $linha['nome']; ?></td>
								<td>R$ <?php echo $linha['preco']; ?></td>
							</tr>
						</tbody>
					<?php
					}
					?>
				</table>
				<p><a class="btn btn-success" href="index.php">Voltar para o início</a></p>
			</div>
		</section>
	
		<script src="js/jquery.js"></script>
		<script src="js/price-range.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>