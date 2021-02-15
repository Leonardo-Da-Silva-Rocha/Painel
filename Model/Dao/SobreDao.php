<?php 
	namespace Model\Dao;
	class SobreDao
	{
		public function listar(){
			
			$pdo = new \PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');

			$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");

			$sobre->execute();

			return $sobre = $sobre->fetch()['sobre'];
		}

		public function inserir($sobre){

			$pdo = new \PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');
			$pdo->exec("DELETE FROM `tb_sobre`");

			$sql = $pdo->prepare("INSERT INTO `tb_sobre` VALUES(null,?)");

			$sql->execute(array($sobre->getSobre()));

			echo "<script>alert('O codigo HTML sobre foi editado com sucesso');</script>";
		}
	}
 ?>