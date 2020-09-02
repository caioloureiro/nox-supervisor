<!doctype html>
<html>
	<head>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="container login-container" itemscope>
			<div class="login-card">
				<div class="login-logo"></div>
				<form method="GET" action="seguranca.php">
					<input type="text" name="login" style="display:none" value="0aee640fba5748593c46736460523c9b0aee640fba5748593c46736460523c9b0aee640fba5748593c46736460523c9b"/>
					<div class="login-input-box"><input type="text" name="usuario" placeholder="Usuário"/></div>
					<div class="login-input-box"><input type="password" name="acesso" id="senha" placeholder="Senha"/><div class="login-ver"></div></div>
					<div class="login-btn-box"><button type="submit">Acessar</button></div>
				</form>
				<div class="login-esqueceu-senha"><a href="esqueci-a-senha.php">Esqueceu a senha?</a></div>
				<div class="login-acesse"><a href="http://www.noxgr.com.br" target="_blank">acesse noxgr.com.br</a></div>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>