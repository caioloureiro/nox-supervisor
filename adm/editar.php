<!doctype html>
<html>
	<head>
		<?php
			require "head.php";
			$conteudo = simplexml_load_file('../2b06d4663e430366d516ee7cc59a01c3.xml');
			$array = array();
		?>
	</head>
	<body>
		<div class="container login-master-container" itemscope>
			<div class="matriz-master-card">
				<div class="matriz-master-campo-topo">
					<div class="matriz-master-campo-topo-logo"></div>
					<div class="matriz-master-campo-topo-titulo">Nox Supervisor - Administrador</div>
				</div>
				<div class="matriz-master-campo-geral">
					<div class="matriz-master-campo-geral-btn master-criar">
						<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-criar"></div>
						<div class="matriz-master-campo-geral-btn-titulo">Criar Usuário</div>
					</div>
					<div class="matriz-master-campo-geral-btn master-editar">
						<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-editar"></div>
						<div class="matriz-master-campo-geral-btn-titulo">Editar Usuário</div>
					</div>
					<div class="matriz-master-campo-geral-btn master-excluir">
						<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-excluir"></div>
						<div class="matriz-master-campo-geral-btn-titulo">Excluir Usuário</div>
					</div>
					<a href="backup.php">
						<div class="matriz-master-campo-geral-btn master-download">
							<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-download"></div>
							<div class="matriz-master-campo-geral-btn-titulo">Backup</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="escurecer"></div>
		<div class="matriz-master-card-aberto master-criar master-on">
			<div class="matriz-master-card-aberto-topo">
				<div class="matriz-master-card-aberto-topo-titulo">Editar Usuário</div>
				<div class="matriz-master-card-aberto-topo-fechar" onclick="window.location.href = 'matriz.php'"></div>
			</div>
			<div class="matriz-master-card-aberto-campo">
				<?php
					foreach ($conteudo->item as $node){
						$array[] = $node;
						if($_GET['id'] == $node['id']){
							echo'
							<form method="GET" action="editar-set.php">
								<input type="text" class="matriz-master-card-aberto-input" name="usuario_master" style="display:none" value="'.$_GET['usuario_master'].'"/>
								<input type="text" class="matriz-master-card-aberto-input" name="senha_master" style="display:none" value="'.$_GET['senha_master'].'"/>
								<input type="text" class="matriz-master-card-aberto-input" name="id" placeholder="ID" value="'.$node['id'].'" style="display:none"/>
								<input type="text" class="matriz-master-card-aberto-input" name="nome" placeholder="Nome" value="'.$node->nome.'"/>
								<input type="text" class="matriz-master-card-aberto-input" name="usuario" placeholder="Usuário" value="'.$node->usuario.'"/>
								<input type="text" class="matriz-master-card-aberto-input" name="senha" placeholder="Digite um nova senha. A senha deve ser recriada." value=""/>
								<input type="email" class="matriz-master-card-aberto-input" name="email" placeholder="E-mail" value="'.$node->email.'"/>
								<button class="matriz-master-card-aberto-enviar">Concluir</button>
							</form>
							';
						}
					}
				?>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>