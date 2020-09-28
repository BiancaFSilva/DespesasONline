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
									<li> <a href="login.php" class="active"><i class="fa fa-lock"></i> Login</a> </li>
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
									<li><a href="ver_produtos.php">Vizualizar produtos</a> </li> 
									<li><a href="processa_cad_produto.php">Cadastrar produto</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="container"> <h2>Para realizar suas compras faça login</h2> </div>
		<section id="form">
			<div class="container">				
				<div class="row">
					<div class="col-sm-4 col-sm-offset-1">
						<div class="form">
							<h3 class="text-center">Entre</h3>
							<form action="sessoes/processa_login.php" method="post">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="nome.exemplo@email.com" required>
								</div>
								<div class="form-group">
									<label for="senha">Senha</label>
									<input type="password" class="form-control" id="senha" name="senha" placeholder="Sua senha" required>
								</div>								
								<button type="submit" class="btn btn-success" name="entrar">Login</button>
							</form>
						</div>
					</div>

					<div class="col-sm-1" align="center"> <h2 class="or">OU</h2> </div>
					
					<div class="col-sm-4">
						<div class="form">
							<h3 class="text-center">Cadastre-se</h3>
							<form action="sessoes/processa_cadastro.php" method="post">

								<div class="form-group">
									<label for="emailCad">Nome</label>
									<input type="text" class="form-control" id="emailCad" name="nome" placeholder="Fulano da Silva" required>
								</div>
								<div class="form-group">
									<label for="emailCad">Email</label>
									<input type="text" class="form-control" id="emailCad" name="email" placeholder="nome.exemplo@email.com" required>
								</div>
								<div class="form-group">
									<label for="senhaCad">Senha</label>
									<input type="password" class="form-control" id="senhaCad" name="senha" placeholder="Sua senha" required>
								</div>
								<div class="form-group">
									<label for="select">Nível da conta</label>
									<select name="nivel" id="select" class="form-control" required>
										<option value="2"> -- </option>
										<option value="1"> Administrativo </option>
										<option value="2"> Usuário comum </option>
									</select>
								</div>
								<button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
							</form>
						</div>
					</div>
				</div>
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