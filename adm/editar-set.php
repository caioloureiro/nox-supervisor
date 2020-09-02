<?php
	$id = $_GET['id'];
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
	
	foreach($xml->item as $mostrar){
		$getID = $mostrar['id'];
		if($id == $getID){
			$mostrar['id'] = $id;
			$mostrar->nome = $nome;
			$mostrar->usuario = $usuario;
			$mostrar->senha = $senha_criptografada;
			$mostrar->email = $email;
			break;
		}
	}
	
	file_put_contents("../2b06d4663e430366d516ee7cc59a01c3.xml",$xml->saveXML());
	
	echo'
	<script>
		alert("Usuário alterado com sucesso.");
		window.location.href = "matriz.php?usuario='.$usuario_master.'&acesso='.$senha_master.'";
	</script>
	';
?>