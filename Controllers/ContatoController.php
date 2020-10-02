<?php
	namespace Controllers;

	class ContatoController extends Controller
	{

		public function __construct(){
			$this->view = new \Views\MainView('contato');
		}
		public function executar(){
			if(isset($_POST['acao'])){
				//echo 'Formulario enviado!';
				\Models\ContatoModel::enviarFormulario();
				echo '<script>alert("A mensagem foi enviada com sucesso")</script>';
			}
			$this->view->render(array('titulo'=>'Contato'));
		}
	}

?>