<?php
	include 'conecta.php';
	session_start();
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
									<li><a href="index.php" class="active">Home</a> </li>
									<li><a href="ver_nf.php">Notas emitidas</a> </li> 
									<li><a href="ver_produtos.php">Vizualizar produtos</a> </li> 
									<li><a href="processa_cad_produto.php">Cadastrar produto</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<section id="slider">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div id="slider-carousel" class="carousel slide">						
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-sm-6">
										<h2>Iniciar compra</h2>
										<form action="data_nf.php" method="post">
											<div>
												<p> Ao clicar em <b>Iniciar</b>, o sistema irá gerar uma nova nota fiscal mas sem o valor total. </p>
												<p>	Na próxima tela será solicitada a data da nota. </p>
												<p> O valor total será atualizado após a inserção das itens da nota. </p>
											</div>
											<div>
												<button type="submit" class="btn btn-success get">Iniciar</button>
											</div>
										</form>

										<h3>Outras opções</h3>
										<div>                
											<a class="btn btn-primary" href="ver_nf.php"> <i class="fa fa-star"></i> Notas emitidas </a>
											<a class="btn btn-primary" href="ver_produtos.php"> <i class="fa fa-shopping-cart"></i>  Vizualizar produtos </a>
											<a class="btn btn-primary" href="processa_cad_produto.php"> <i class="fa fa-arrow-circle-o-right"></i>  Cadastrar produto </a>
										</div>
									</div>
									<div class="col-sm-6">
										<img src="img/mercado.jpg" class="img-responsive" alt="Mercado online" />
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollUp.min.js"></script>
		<script src="js/price-range.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>