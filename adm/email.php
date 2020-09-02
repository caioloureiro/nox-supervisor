<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
date_default_timezone_set('America/Sao_Paulo');

$email = $_GET["email"];

$xml_seguranca = simplexml_load_file('2b06d4663e430366d516ee7cc59a01c3.xml');

foreach ($xml_seguranca->item as $item){
	if($email == $item->email){
		$ti = 'ti@noxgr.com.br';
		//$ti = 'caio.loureiro@hotmail.com';
		$assunto = 'Manual do Integrador. Solicitação de recuperação de senha.';
		$data = date('d/m/Y');
		$hora = date('H:i:s');

		$headers = "From: no-reply@noxgr.com.br\r\n";
		$headers .= "X-Mailer: PHP/" . phpversion();
		$headers .= "MIME-Version: 1.1\r\n";
		$headers .= "Return-Path: ".$ti." \r\n"; //Return path for errors
		$headers .= "Content-Type: text/html; charset=UTF-8 \r\n";
		$headers .= "Content-Transfer-Encoding: 8bit\r\n";
		
		$msg = '
			<p><span style="color:#AAAAAA">O usuário '. $item->nome .' está solicitando a senha de acesso ao Manual do Integrador.</p>
			<p><span style="color:#AAAAAA">Usuário:</span> '. $item->usuario .'</p>
			<p><span style="color:#AAAAAA">E-mail:</span> '. $item->email .'</p>
			<p><span style="color:#AAAAAA">Senha:</span> '. $item->senha .'</p>
			<p>Enviado em '.$data.' às '.$hora.'</p>
		';
		
		mail($ti, $assunto, $msg, $headers);
		
		echo '
		<script>
			alert("Email encontrado: '. $item->email .'\n\nNossa equipe de TI já está ciente.\n\nEm breve você receberá sua senha no email: '.$item->email.'.\n\nVocê pode entrar em contato conosco através do telefone (47) 3404-5300.\n\nOu através do e-mail ti@noxgr.com.br.");
			window.location.href = "index.php";
		</script>
		';
	}
}
?>
<!doctype html>
<html>
	<head>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="container login-master-container" itemscope>
			<div class="login-master-card">
				<div class="login-master-logo"></div>
				<div class="login-master-acesse">O e-mail não está cadastrado!</div>
				<div class="login-master-acesse">Contate-nos: (47) 3404-5300.</div>
				<div class="login-master-esqueceu-senha">Ou através do e-mail ti@noxgr.com.br.</div>
				<div class="login-master-btn-box"><a href="index.php"><button type="submit">Voltar</button></a></div>
				<div class="login-master-acesse"><a href="http://www.noxgr.com.br" target="_blank">ou acesse noxgr.com.br</a></div>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>