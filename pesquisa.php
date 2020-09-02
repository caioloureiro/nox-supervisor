<!doctype html>
<html>
	<head>
		<?php require "head.php" ?>
	</head>
	<body>
		<div class="container" itemscope>
			<?php require "menu.php" ?>
			<div class="box">
				<div class="conteudo">
					<?php
						echo '<div class="conteudo-subtitulo">Resultado da pesquisa por: ' .$_GET['busca'] .'</div>';
					
						$conteudo = simplexml_load_file('b59853db2f3ef8f156a72e38c30ba7d2.xml');
						$array = array();
						
						$contar = 0;
						foreach ($conteudo->item as $contagem){
							if(strpos(strtolower($contagem->codigo), strtolower($_GET['busca'])) !== false){
								$contar++;
							}
						}
						if($contar == 1){echo 'Foi encontrado <strong>'. $contar .'</strong> resultado.';}else{echo 'Foram encontrados <strong>'. $contar .'</strong> resultados.';}
						
						foreach ($conteudo->item as $node){
							if(strpos(strtolower($node->codigo), strtolower($_GET['busca'])) !== false){
								echo'
									<a href="matriz.php?id='. $node['id'] . $seguranca .'">
										<div class="pesquisa">
											<div class="pesquisa-txt">Página:</div>
											<div class="pesquisa-titulo">'. $node->titulo .'</div>
										</div>
									</a>
								';
							}
						}
					?>
				</div>
			</div>
			<?php require "submenu.php" ?>
			<?php require "footer.php" ?>
		</div>
		<?php require "scripts.php" ?>
	</body>
</html>