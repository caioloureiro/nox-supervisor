<!doctype html>
<html>
	<head>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="container login-container" itemscope>
			<div class="login-card">
				<div class="login-logo"></div>
				<div class="login-acesse">Informe seu e-mail!</div>
				<div class="login-esqueceu-senha">Em breve enviaremos sua senha.</div>
				<form method="GET" action="email.php">
					<div class="login-input-box"><input type="text" name="email" placeholder="E-mail"/></div>
					<div class="login-btn-box"><button type="submit">Enviar</button></div>
				</form>
				<div class="login-acesse"><a href="index.php">Clique aqui para voltar</a></div>
				<div class="login-acesse"><a href="http://www.noxgr.com.br" target="_blank">ou acesse noxgr.com.br</a></div>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>