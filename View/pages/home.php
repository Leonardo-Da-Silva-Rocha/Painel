<?php 
	$home = new Controller\HomeController();
	if(isset($_POST['cadastrar'])){
		$home->inserirMembro();
	}
	if(isset($_POST['editar_sobre'])){
		$home->inserirSobre();
	}
	if(isset($_GET['del'])){
		$home->del();
	}
 ?>
<body>
	<section class="bread">
		<div class="container">
 		  <ol class="breadcrumb">
   			 <li class="active"><a>Home</a></li>
		  </ol>
		</div>
	</section><!--bread-->

	<section class="principal">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="list-group">
					  
					  <li class="corPadrao list-group-item"><a href="#" ref_sys="sobre"><span class="glyphicon glyphicon-pencil editIcone"></span> Sobre</a></li>
					  <li class="list-group-item"><a href="#" ref_sys="cadastrar_equipe"><span class="glyphicon glyphicon-pencil editIcone"></span> Cadastrar Equipe</a></li>
					  <li class="list-group-item"><a href="#" ref_sys="lista_equipe"><span class="glyphicon glyphicon-list-alt
 					  icone"></span> Lista Equipe <span class="badge" style="margin-left: 100px">2</span></a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div id="sobre_section" class="panel panel-default">
						<div class="panel-heading corPadrao" style="background: #5995b6;color: white">
							<h2 class="panel-title">Sobre</h2>
						</div>
						<div class="panel-body">
							<form method="post">
  								<div class="form-group">
    								<label for="email">Código HTML:</label>
   									<textarea class="form-control" name="sobre" style="height: 140px;resize: vertical;"><?php echo $home->listarSobre(); ?></textarea>
  								</div>
  								<input type="hidden" name="editar_sobre" value="">
  								<button type="submit" name="acao" class="btn btn-default">Salvar</button>
							</form>
						</div>
					</div>

					<div id="cadastrar_equipe_section" class="panel panel-default">
						<div class="panel-heading corPadrao" style="background: #5995b6;color: white">
							<h2 class="panel-title">Cadastrar Equipe</h2>
						</div>
						<div class="panel-body"> 
							<form method="post">
								<div class="form-group">
    								<label for="nome">Nome do membro:</label>
   									<input type="text" name="nome" class="form-control">
  								</div>

  								<div class="form-group">
    								<label for="email">Descrição do membro:</label>
   									<textarea class="form-control" name="descricao_membro" style="height: 140px;resize: vertical;"></textarea>
  								</div>
  								<button type="submit" name="cadastrar" class="btn btn-default">Cadastrar membro</button>
							</form>
						</div>
					</div>

					<div id="lista_equipe_section" class="panel panel-default">
						<div class="panel-heading corPadrao" style="background: #5995b6;color: white">
							<h2 class="panel-title">Membros da equipe</h2>
						</div>
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th>Id:</th>
										<th>Nome do membro</th>
										<th>Excluir</th>
									</tr>
								</thead>
								<tbody>

									<?php 
										foreach ($home->listarEquipe() as $key => $value) {
									 ?>

									<tr>
										<td><?php echo $value['id']; ?></td>
										<td><?php echo $value['nome']; ?></td>
										<td><a href="Home?del=<?php echo $value['id'] ?>">Excluir</a></td>
									</tr>
									<?php } ?>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(function(){

			clicMenu();
			scrollItem();

			function clicMenu(){
				$('.list-group a, #menu-principal a').click(function(){

					$('.list-group a').parent().removeClass('corPadrao');
					$('#menu-principal a').parent().removeClass('ativa');

					$('.list-group a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('corPadrao');
					$('#menu-principal a[ref_sys='+$(this).attr('ref_sys')+']').parent().addClass('ativa');
					return false; 
				})
			}

			function scrollItem(){
				$('.list-group a, #menu-principal a').click(function(){
					var ref = '#'+$(this).attr('ref_sys')+'_section';
					var offset = $(ref).offset().top;
					$('html,body').animate({'scrollTop':offset});
				});
			}
		})
	</script>
</body>
</html>