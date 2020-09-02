<?php
$lixo = '0aee640fba5748593c46736460523c9b0aee640fba5748593c46736460523c9b0aee640fba5748593c46736460523c9b';
$usuario = $_GET['usuario'];
$senha = $_GET['acesso'];

$senha_criptografada = md5($senha);

$xml_seguranca = simplexml_load_file('2b06d4663e430366d516ee7cc59a01c3.xml');

if($usuario == ''){
	echo '<script>window.location.href = "index.php";</script>';
}
if($senha == ''){
	echo '<script>window.location.href = "index.php";</script>';
}

foreach ($xml_seguranca->item as $get_seguranca){
	if($usuario == $get_seguranca->usuario){
		if($senha_criptografada == $get_seguranca->senha){
			echo '
			<script>
				window.location.href = "matriz.php?login='.$lixo.'&usuario='.$usuario.'&acesso='.$senha_criptografada.'";
			</script>
			';
		}else{
			if($get_seguranca->senha == 'senha_inexistente'){
				echo '
				<script>
					alert("A sua senha expirou!\n\nNossa equipe de TI já está ciente.\n\nEm breve você receberá uma nova senha no email: '.$get_seguranca->email.'.\n\nVocê pode entrar em contato conosco através do telefone (47) 3404-5300.\n\nOu através do e-mail ti@noxgr.com.br.");
					window.location.href = "senha-inexistente.php?usuario='.$get_seguranca->usuario.'&acesso='.$get_seguranca->senha.'&email='.$get_seguranca->email.'&nome='.$get_seguranca->nome.'";
				</script>
				';
			}else{
				echo '
				<script>
					alert("A senha digitada '. $senha .' está incorreta!");
					window.location.href = "index.php";
				</script>
				';
			}
		}
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
				<div class="login-master-esqueceu-senha">O usuário não está cadastrado!</div>
				<div class="login-master-btn-box"><a href="index.php"><button type="submit">Voltar</button></a></div>
				<div class="login-master-esqueceu-senha"><a href="esqueci-a-senha.php">Esqueceu a senha?</a></div>
				<div class="login-master-acesse"><a href="http://www.noxgr.com.br" target="_blank">acesse noxgr.com.br</a></div>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>