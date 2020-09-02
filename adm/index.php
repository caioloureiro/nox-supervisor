<!doctype html>
<html>
	<head>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="container login-master-container" itemscope>
			<div class="login-master-card">
				<div class="login-master-logo"></div>
				<form method="GET" action="seguranca.php">
					<input type="text" name="login" style="display:none" value="0aee640fba5748593c46736460523c9b0aee640fba5748593c46736460523c9b0aee640fba5748593c46736460523c9b"/>
					<div class="login-master-input-box"><input type="text" name="usuario" placeholder="Usuário-Master"/></div>
					<div class="login-master-input-box"><input type="password" name="acesso" id="senha" placeholder="Senha-Master"/><div class="login-master-ver"></div></div>
					<div class="login-master-btn-box"><button type="submit">Acessar</button></div>
				</form>
				<div class="login-master-esqueceu-senha"><a href="esqueci-a-senha.php">Esqueceu a Senha-Master?</a></div>
				<div class="login-master-acesse"><a href="../">Voltar para o Nox Supervisor</a></div>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>