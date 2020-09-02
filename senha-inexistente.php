<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
date_default_timezone_set('America/Sao_Paulo');

$usuario = $_GET['usuario'];
$senha = $_GET['acesso'];
$nome = $_GET['nome'];
$email = $_GET['email'];

$ti = 'ti@noxgr.com.br';
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
	<p><span style="color:#AAAAAA">O usuário '. $nome .' está solicitando a senha de acesso ao Manual do Integrador.</p>
	<p><span style="color:#AAAAAA">Usuário:</span> '. $usuario .'</p>
	<p><span style="color:#AAAAAA">E-mail:</span> '. $email .'</p>
	<p><span style="color:#AAAAAA">Senha:</span> '. $senha .'</p>
	<p>Enviado em '.$data.' às '.$hora.'</p>
';

mail($ti, $assunto, $msg, $headers);

echo '
<script>
	window.location.href = "index.php";
</script>
';
?>