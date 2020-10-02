<?php
	namespace Models;
	class ContatoModel{
		public static function enviarFormulario(){
			$mail = new \Email('smtp.hostinger.com.br','mailreturn@tisobmedida.com.br','Qwerty2020@','Douglas');
			$mail->addAdress('mailreturn@tisobmedida.com.br','Douglas');
			$mail->formatarEmail(array('assunto'=>'mensagem do site','corpo'=>'Aqui é uma mensagem do site!'));
			$mail->enviarEmail();
		}
	}

?>