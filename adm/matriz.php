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
		<?php require "menu.php" ?>
		<div class="container login-master-container" itemscope>
			<div class="matriz-master-card">
				<div class="matriz-master-campo-topo">
					<a href="index.php">
						<div class="matriz-master-campo-topo-sair" title="Sair."></div>
					</a>
					<div class="matriz-master-campo-topo-logo"></div>
					<div class="matriz-master-campo-topo-titulo">Nox Supervisor - Administrador</div>
				</div>
				<div class="matriz-master-campo-geral">
					<div class="matriz-master-campo-geral-btn master-criar" title="Aqui você vai criar um novo usuário para o Manual do Integrador.">
						<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-criar"></div>
						<div class="matriz-master-campo-geral-btn-titulo">Criar Usuário</div>
					</div>
					<div class="matriz-master-campo-geral-btn master-editar" title="Aqui você edita os dados do usuário.">
						<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-editar"></div>
						<div class="matriz-master-campo-geral-btn-titulo">Editar Usuário</div>
					</div>
					<div class="matriz-master-campo-geral-btn master-excluir" title="Aqui você vai excluir um usuário do Manual do Integrador.">
						<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-excluir"></div>
						<div class="matriz-master-campo-geral-btn-titulo">Excluir Usuário</div>
					</div>
					<a href="backup.php">
						<div class="matriz-master-campo-geral-btn master-download" title="Aqui você fará um backup de todo o Manual do Integrador.">
							<div class="matriz-master-campo-geral-btn-icone matriz-master-campo-geral-btn-icone-download"></div>
							<div class="matriz-master-campo-geral-btn-titulo">Backup</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="escurecer"></div>
		<div class="matriz-master-card-aberto master-criar">
			<div class="matriz-master-card-aberto-topo">
				<div class="matriz-master-card-aberto-topo-titulo">Criar Usuário</div>
				<div class="matriz-master-card-aberto-topo-fechar"></div>
			</div>
			<div class="matriz-master-card-aberto-campo">
				<form method="GET" action="criar.php">
					<input type="text" class="matriz-master-card-aberto-input" name="usuario_master" style="display:none" value="<?php echo $_GET['usuario'] ?>"/>
					<input type="text" class="matriz-master-card-aberto-input" name="senha_master" style="display:none" value="<?php echo $_GET['acesso'] ?>"/>
					<input type="text" class="matriz-master-card-aberto-input" name="nome" placeholder="Nome do Representante"/>
					<input type="text" class="matriz-master-card-aberto-input" name="usuario" placeholder="Usuário"/>
					<input type="text" class="matriz-master-card-aberto-input" name="senha" placeholder="Senha"/>
					<input type="email" class="matriz-master-card-aberto-input" name="email" placeholder="E-mail"/>
					<button class="matriz-master-card-aberto-enviar">Criar Usuário</button>
				</form>
			</div>
		</div>
		<div class="matriz-master-card-aberto master-editar">
			<div class="matriz-master-card-aberto-topo">
				<div class="matriz-master-card-aberto-topo-titulo">Editar Usuário</div>
				<div class="matriz-master-card-aberto-topo-fechar"></div>
			</div>
			<div class="matriz-master-card-aberto-campo">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Usuário</th>
							<th>Senha</th>
							<th>E-mail</th>
							<th>Ação</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($conteudo->item as $node){
								$array[] = $node;
								echo'
								<tr>
									<td>'.$node['id'].'</td>
									<td>'.$node->nome.'</td>
									<td>'.$node->usuario.'</td>
									<td>'.$node->senha.'</td>
									<td>'.$node->email.'</td>
									<td><a href="editar.php?id='.$node['id'].'&usuario_master='.$_GET['usuario'].'&senha_master='.$_GET['acesso'].'">Editar</a></td>
								</tr>
								';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="matriz-master-card-aberto master-excluir">
			<div class="matriz-master-card-aberto-topo">
				<div class="matriz-master-card-aberto-topo-titulo">Excluir Usuário</div>
				<div class="matriz-master-card-aberto-topo-fechar"></div>
			</div>
			<div class="matriz-master-card-aberto-campo">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nome</th>
							<th>Usuário</th>
							<th>Senha</th>
							<th>E-mail</th>
							<th>Ação</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($conteudo->item as $node){
								$array[] = $node;
								echo'
								<tr>
									<td>'.$node['id'].'</td>
									<td>'.$node->nome.'</td>
									<td>'.$node->usuario.'</td>
									<td>'.$node->senha.'</td>
									<td>'.$node->email.'</td>
									<td><a href="excluir.php?id='.$node['id'].'&usuario_master='.$_GET['usuario'].'&senha_master='.$_GET['acesso'].'">Excluir</a></td>
								</tr>
								';
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>