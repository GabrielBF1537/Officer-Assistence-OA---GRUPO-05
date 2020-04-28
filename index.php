<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>Trab. P.I.</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Officer Assistence (OA)</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Página Inicial</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Consultor
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cad-consultor">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-consultor">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cliente
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cad-cliente">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-cliente">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Agenda
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cad-agenda">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-agenda">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Consulta
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cad-consulta">Marcar</a>
							<a class="dropdown-item" href="?page=listar-consulta">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Formulário
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cad-formulario">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-formulario">Listar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Questionário
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="?page=cad-questionario">Cadastrar</a>
							<a class="dropdown-item" href="?page=listar-questionario">Listar</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
						//configuração do banco de dados
						include("config.php");
						//inclusão das páginas
						switch(@$_REQUEST["page"]){
							//consultor
							case "cad-consultor":
								include("cad-consultor.php");
							break;
							case "editar-consultor":
								include("editar-consultor.php");
							break;
							case "salvar-consultor":
								include("salvar-consultor.php");
							break;
							case "listar-consultor":
								include("listar-consultor.php");
							break;
							//cliente
							case "cad-cliente":
								include("cad-cliente.php");
							break;
							case "editar-cliente":
								include("editar-cliente.php");
							break;
							case "salvar-cliente":
								include("salvar-cliente.php");
							break;
							case "listar-cliente":
								include("listar-cliente.php");
							break;
							//agenda
							case "cad-agenda":
								include("cad-agenda.php");
							break;
							case "editar-agenda":
								include("editar-agenda.php");
							break;
							case "salvar-agenda":
								include("salvar-agenda.php");
							break;
							case "listar-agenda":
								include("listar-agenda.php");
							break;
							//consulta
							case "cad-consulta":
								include("cad-consulta.php");
							break;
							case "editar-consulta":
								include("editar-consulta.php");
							break;
							case "salvar-consulta":
								include("salvar-consulta.php");
							break;
							case "listar-consulta":
								include("listar-consulta.php");
							break;
							//formulario
							case "cad-formulario":
								include("cad-formulario.php");
							break;
							case "editar-formulario":
								include("editar-formulario.php");
							break;
							case "salvar-formulario":
								include("salvar-formulario.php");
							break;
							case "listar-formulario":
								include("listar-formulario.php");
							break;
							//questionario
							case "cad-questionario":
								include("cad-questionario.php");
							break;
							case "editar-questionario":
								include("editar-questionario.php");
							break;
							case "salvar-questionario":
								include("salvar-questionario.php");
							break;
							case "listar-questionario":
								include("listar-questionario.php");
							break;
							case "listar-cliente_has_questionario":
								include("listar-cliente_has_questionario.php");
							break;
							default:
								include("main.php");
						}
					?>
				</div>
			</div>
		</div>

		<script src="js/jquery-3.3.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>



