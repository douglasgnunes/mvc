<?php
	namespace Controllers;

	class ContatoController extends Controller
	{

		public function executar(){
			if(isset($_POST['acao'])){
				//echo 'Formulario enviado!';
				\Models\ContatoModel::enviarFormulario();
				echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
				die();
				//echo '<script>alert("A mensagem foi enviada com sucesso")</script>';
			}
			\Router::rota('contato/sucesso',function(){
				$this->view = new \Views\MainView('contato-sucesso');
				$this->view->render(array('titulo'=>'Contato'));
			});
			\Router::rota('contato',function(){
				$this->view = new \Views\MainView('contato');
				$this->view->render(array('titulo'=>'Contato'));
			});
			
		}
	}

?>