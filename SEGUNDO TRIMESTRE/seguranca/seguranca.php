<?php
session_start();

if(!isset($_SESSION['login'])){
	header("location: index.php");
}

//$_SESSION['_token'] = ( !isset($_SESSION['_token']) ) ? hash('sha512', rand(100, 1000)) : $_SESSION['_token'];

require_once 'config/config.php';
?>
<html>
<head>
	<title>Um projeto vuneravel</title>
	<!--boostrap-->
	<link href="style/bootstrap.css" rel="stylesheet">
	<link href="style/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="?pag=home.php">
              	<img src="img/logo.png" alt="" class='img-logo'>
              </a>
            </div>
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav scroll">
					<li>
						<a href="?pag=home.php">Listar</a>
					</li>
					<li>
						<a href="?pag=cadastrar.php">Cadastrar</a>
					</li>
					<li>
						<a href="?pag=sobre.php">Sobre</a>
					</li>
					<li>
						<a href="?pag=sair.php">Sair</a>
					</li>
				</ul>
            </div>
        </div>
    </nav>

	<div class="container">
	
	<?php
	
		if(!isset($_GET)){
			include 'home.php';
		}
		else{
			include "{$_GET['pag']}";
		}
	?>
	
	</div>
	<footer>
		<p>Instituto Federal Catarinense</p>
	</footer>
</body>
</html>
