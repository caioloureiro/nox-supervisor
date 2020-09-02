<?php
$usuario = $_GET['usuario'];
$senha = $_GET['acesso'];

$xml_seguranca = simplexml_load_file('2b06d4663e430366d516ee7cc59a01c3.xml');

if($usuario == ''){
	echo '<script>window.location.href = "index.php";</script>';
}
if($senha == ''){
	echo '<script>window.location.href = "index.php";</script>';
}

$seguranca = '&login='.$lixo.'&usuario='.$usuario.'&acesso='.$senha;

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
<div class="menu">
	<div class="menu-topo">
		<div class="menu-topo-btn menu-topo-btn-hamburger" title="Abrir menu.">
			<div class="menu-topo-btn-hamburger-bar01"></div>
			<div class="menu-topo-btn-hamburger-bar02"></div>
			<div class="menu-topo-btn-hamburger-bar03"></div>
		</div>
		<a href="matriz.php?login=<?php echo $lixo ?>&usuario=<?php echo $usuario ?>&acesso=<?php echo $senha ?>"><div class="menu-topo-btn menu-topo-btn-home"></div></a>
		<div class="menu-topo-btn menu-topo-btn-right menu-topo-btn-right-sair">
			<a href="index.php"><div class="menu-topo-btn-right-txt">Sair</div></a>
		</div>
		<div class="menu-topo-btn menu-topo-btn-right">
			<div class="menu-topo-btn-right-lupa"></div>
			<div class="menu-topo-btn-right-txt">Olá <?php echo $nome_do_xml ?></div>
		</div>
		<a href="http://www.noxgr.com.br/" target="_blank">
			<div class="menu-topo-btn menu-topo-btn-site">acesse noxgr.com.br</div>
		</a>
	</div>
</div>