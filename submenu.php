<?php error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED); ?>
<div class="submenu">

	<div class="submenu-pesquisa">
		<form method="GET" action="pesquisa.php">
			<input class="submenu-pesquisa-input" name="busca" placeholder="Pesquisar"/>
			<input class="submenu-pesquisa-input" name="login" value="<?php echo $lixo ?>" style="display:none"/>
			<input class="submenu-pesquisa-input" name="usuario" value="<?php echo $usuario ?>" style="display:none"/>
			<input class="submenu-pesquisa-input" name="acesso" value="<?php echo $senha ?>" style="display:none"/>
			<button class="submenu-pesquisa-btn">PESQUISAR</button>
		</form>
	</div>
	
	<div class="submenu-coluna">
		<div class="submenu-titulo">Utilitários</div>
		<a href="matriz.php?id=home<?php echo $seguranca ?>"><div class="submenu-subtitulo <?php if($_GET['id'] == 'home' || !isset($_GET['id']) && !isset($_GET['busca'])){echo 'submenu-titulo-on';} ?>">Home</div></a>
		<a href="matriz.php?id=emails<?php echo $seguranca ?>"><div class="submenu-subtitulo <?php if($_GET['id'] == 'emails'){echo 'submenu-titulo-on';} ?>">Gerenciador de E-mail da Operação</div></a>
		<a href="matriz.php?id=modelos-de-documentos<?php echo $seguranca ?>"><div class="submenu-subtitulo <?php if($_GET['id'] == 'modelos-de-documentos'){echo 'submenu-titulo-on';} ?>">Modelos de Documentos para Download</div></a>
	</div>
</div>