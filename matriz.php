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
						$conteudo = simplexml_load_file('b59853db2f3ef8f156a72e38c30ba7d2.xml');
						$array = array();
						foreach ($conteudo->item as $node){
							$array[] = $node;
							if(isset($_GET['id'])){
								$url = $_GET['id'];
								if($node['id'] == $url){
									echo $node->codigo;
								}
							}else{
								if($node['id'] == 'home'){
									echo $node->codigo;
								}
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