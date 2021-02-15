<?php 
	namespace Model\Dao;
	class EquipeDao
	{
		public function listar(){
			$pdo = new \PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');
			$equipe = $pdo->prepare("SELECT * FROM `tb_equipe`");
			$equipe->execute();
			return $equipe = $equipe->fetchAll();
		}

		public function inserir($equipe){
			$pdo = new \PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');
			$sql = $pdo->prepare("INSERT INTO `tb_equipe` VALUES(null,?,?)");
			$sql->execute(array($equipe->getNome(), $equipe->getDescricao()));
			echo "<script>alert('Membro da equipe Cadastrado!');</script>";
		}

		public function deletar(){
			$pdo = new \PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');
			$sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
			$sql->execute(array($_GET['del']));
			echo "<script>alert('Membro da equipe deletado!');</script>";
		}
	}
 ?>