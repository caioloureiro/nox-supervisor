<?php
$usuario = $_GET['usuario'];
$senha = $_GET['acesso'];

$xml_seguranca = simplexml_load_file('2b06d4663e430366d516ee7cc59a01c3.xml');

$seguranca = '&login='.$lixo.'&usuario='.$usuario.'&acesso='.$senha;

if($usuario == ''){
	echo '<script>window.location.href = "index.php";</script>';
}
if($senha == ''){
	echo '<script>window.location.href = "index.php";</script>';
}

foreach ($xml_seguranca->item as $get_dados){
	if($usuario == $get_dados->usuario){
		if($senha == $get_dados->senha){
			$nome_do_xml = $get_dados->nome;
			$usuario_do_xml = $get_dados->usuario;
			$senha_do_xml = $get_dados->senha;
			$email_do_xml = $get_dados->email;
		}
	}
}

if($usuario != $usuario_do_xml){
	echo '<script>alert("Usuário não cadastrado.")</script>';
	echo '<script>window.location.href = "index.php";</script>';
}

if(!isset($usuario)){
	echo '<script>window.location.href = "index.php";</script>';
}

echo'
<input id="usuario" style="display:none" value="'.$usuario.'"/>
<input id="senha" style="display:none" value="'.$senha.'"/>
';
?>