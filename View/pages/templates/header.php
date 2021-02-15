<!DOCTYPE html>
<html>
<head>
	<title>Painel de controle</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="View/pages/css/style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-default" style="margin-bottom: 5px !important;">
	  		<a class="navbar-brand" id="painel" href="#" style="margin-left: 180px">Painel De Controle</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    		<div class="navbar-nav lista" id="menu-principal">
	    			<li class="nav nav-bar ativa"><a class="nav-item nav-link" href="#" ref_sys="sobre" >Editar Sobre<span class="sr-only"></span></a></li>
	     			<li class="nav navbar-nav" ><a class="nav-item nav-link" href="#" ref_sys="cadastrar_equipe"> Cadastrar Equipe</a></li>
	     			<li class="nav navbar-nav"><a class="nav-item nav-link" href="#" ref_sys="lista_equipe" > Lista Equipe</a></li>
	     			
	     			
	     			<li class="nav-item nav-link" style="margin-top: 10px;color: white"><span class="glyphicon glyphicon-log-out"></span><a style="color: white" href="#">sair</a></li>
	     			
	    		</div>
	  		</div>
		</nav>

	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2><span class="glyphicon glyphicon-cog"></span>Painel de controle</h2>
				</div>
				<div class="col-md-3">
					<p>Seu Ultimo Login foi em: 12/06/2019</p>
				</div>
			</div>
		</div>
	</header>