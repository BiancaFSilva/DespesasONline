<?php
    include 'conecta.php';
    if (!isset($_SESSION)) session_start();
    $nf = $_SESSION['nf'];

    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";
    $total = 0;
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
        
        <section>
            <div class="container">
				<h2></h2>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Nota Fiscal <?php echo $nf; ?> </th>
                        <th scope="col"></th>
                        <th scope="col"></th>      
                        </tr>
                    </thead>
                        <thead class="table-primary">
                        <tr>
						<th scope="col">Código do produto </th>
                        <th scope="col">Quantidade </th>
                        <th scope="col">Subtotal </th>
                        </tr>
                    </thead>                

                    <?php 
                    foreach ($conexao -> query($consulta) as $linha) {
                        $total = $total + $linha['subtotal'];
                    ?>                
                        <tbody>
                            <tr>
							<td><?php echo $linha['id']; ?></td>
                            <td><?php echo $linha['qtde']; ?></td>
                            <td><?php echo $linha['subtotal']; ?></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>

                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Total: </th>
                        <th scope="col"> </th>
                        <th scope="col">R$ <?php echo $total; ?></th>      
                        </tr>
                    </thead>
                </table>

                <h3>O que deseja fazer?</h3>
                <div class="row">
                    <p> <a class="btn btn-success" href="seleciona_ultima_nf.php">Inserir outro produto</a>        
                        <a class="btn btn-success" href="finalizar.php?total=<?php echo $total; ?>">Finalizar compra</a></p>
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