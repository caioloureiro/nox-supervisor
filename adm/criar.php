<?php
	$nome = $_GET['nome'];
	$usuario = $_GET['usuario'];
	$senha = $_GET['senha'];
	$email = $_GET['email'];
	
	$usuario_master = $_GET['usuario_master'];
	$senha_master = $_GET['senha_master'];
	
	$senha_criptografada = md5($senha);

	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y-m-d-H-i-s');
	copy('../2b06d4663e430366d516ee7cc59a01c3.xml', '../backup/'.$data.'-2b06d4663e430366d516ee7cc59a01c3.xml');
	
	$xml = simplexml_load_file('../2b06d4663e430366d516ee7cc59a01c3.xml');
	
	$numero = $xml->count();
	$last = $xml->xpath("/conteudo/item[last()]");
	
	$id = $last[0]['id']+1;
	$criar = $xml->addChild('item');
	$criar->addAttribute('id', $id);
	$criar->addChild('nome', $nome);
	$criar->addChild('usuario', $usuario);
	$criar->addChild('senha', $senha_criptografada);
	$criar->addChild('email', $email);

	file_put_contents("../2b06d4663e430366d516ee7cc59a01c3.xml",$xml->saveXML());
	
	echo'
	<script>
		alert("Usuário criado com sucesso.");
		window.location.href = "matriz.php?usuario='.$usuario_master.'&acesso='.$senha_master.'";
	</script>
	';
?>