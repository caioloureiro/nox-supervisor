<?php
	$id = $_GET['id'];
	$index = 0;
	$i = 0;
	
	$usuario_master = $_GET['usuario_master'];
	$senha_master = $_GET['senha_master'];
	
	date_default_timezone_set('America/Sao_Paulo');
	$data = date('Y-m-d-H-i-s');
	copy('../2b06d4663e430366d516ee7cc59a01c3.xml', '../backup/'.$data.'-2b06d4663e430366d516ee7cc59a01c3.xml');

	$xml = simplexml_load_file('../2b06d4663e430366d516ee7cc59a01c3.xml');
	
	foreach($xml->item as $item){
		if($item['id'] == $id){
			$index = $i;
			break;
		}
		$i++;
	}
	
	unset($xml->item[$index]);
	
	file_put_contents("../2b06d4663e430366d516ee7cc59a01c3.xml",$xml->saveXML());
	
	echo'
	<script>
		alert("Usuário excluído com sucesso.");
		window.location.href = "matriz.php?usuario='.$usuario_master.'&acesso='.$senha_master.'";
	</script>
	';
?>