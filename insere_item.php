<?php  
    include 'conecta.php';
    if (!isset($_SESSION)) session_start();
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
        
        <section id="form">
            <div class="container form">
                <?php 
                    $nf = $_SESSION['nf'];

                    echo "<h3> Número da nota fiscal: " . $nf . "</h3><br>";
                    $id_prod = $_POST['produto_opcao'];
                    $qtde_prod = $_POST['qtde'];

                    $consulta = "SELECT preco, nome FROM  produtos WHERE id='$id_prod'";
                    $consulta = $conexao -> query($consulta);
                    $linha = $consulta -> fetch_assoc();
                    $preco = $linha['preco'];
                    $nome = $linha['nome'];

                    $subtotal = $preco * $qtde_prod;
                ?>

                <form action="insere_item_nf.php" method="post">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Código do produto: </label>
                        <div class="col-sm-4"> <input type="text" class="form-control" name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly"> </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Produto: </label>
                        <div class="col-sm-4"> <input type="text" class="form-control" name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly"> </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Valor unitário: </label>
                        <div class="col-sm-4"> <input type="text" class="form-control" name="valor_unit" value="<?php echo $preco; ?>" readonly="readonly"> </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Quantidade: </label>
                        <div class="col-sm-4"> <input type="text" class="form-control" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly"> </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Subtotal:</label>
                        <div class="col-sm-4"> <input type="text" class="form-control" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly"> </div>
                    </div>
					<button type="submit" class="btn btn-success">Adicionar produto</button>
                </form>
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