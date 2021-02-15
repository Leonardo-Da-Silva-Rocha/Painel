<?php 
	namespace Controller;
	class HomeController extends Controller
	{
		private $equipe;
		private $sobre;
		private $equipeDao;
		private $sobreDao;

		function __construct()
		{	
			$this->sobre = new \Model\Sobre();
			$this->equipe = new \Model\Equipe();
			$this->view = new \View\MainView('home');
		}

		public function executar(){
			$this->view->render(array('titulo'=>'Home'));
		}

		public function listarSobre(){
			$this->sobreDao = new \Model\Dao\SobreDao();
			return $this->sobreDao->listar();
		}

		public function listarEquipe(){
			$this->equipeDao = new \Model\Dao\EquipeDao();
			return $this->equipeDao->listar();
		}

		public function inserirMembro(){
			$this->equipeDao = new \Model\Dao\EquipeDao();
			$this->equipe->setNome($_POST['nome']);
			$this->equipe->setDescricao($_POST['descricao_membro']);
			$this->equipeDao->inserir($this->equipe);
		}

		public function inserirSobre(){
			$this->sobreDao = new \Model\Dao\SobreDao();
			$this->sobre->setSobre($_POST['sobre']);
			$this->sobreDao->inserir($this->sobre);
		}

		public function del(){
			$this->equipeDao = new \Model\Dao\EquipeDao();
			$this->equipeDao->deletar();
		}
	}
 ?>