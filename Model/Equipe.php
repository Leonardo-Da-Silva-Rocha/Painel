<?php 
	namespace Model;
	class Equipe
	{
		private $nome;
		private $descricao;

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}

		public function getDescricao(){
			return $this->descricao;
		}
	}
 ?>