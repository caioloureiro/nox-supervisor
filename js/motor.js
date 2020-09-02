/*Start - VARIÁVEIS*/
var input_tipo;
/*Start - VARIÁVEIS*/

/*Start - MENU TOPO*/
$(".menu-topo-btn-hamburger").click(function(){
	$(".menu-topo-btn-hamburger-bar01").toggleClass("menu-topo-btn-hamburger-bar01-on");
	$(".menu-topo-btn-hamburger-bar02").toggleClass("menu-topo-btn-hamburger-bar02-on");
	$(".menu-topo-btn-hamburger-bar03").toggleClass("menu-topo-btn-hamburger-bar03-on");
	$(".submenu").toggleClass("submenu-on");
});
/*End - MENU TOPO*/

/*Start - VISUALIZAR SENHA*/
$(".login-ver").click(function(){
	//alert($('#senha:input')[0].type);
	input_tipo = $('#senha:input')[0].type;
	if(input_tipo == "password"){
		//alert('password -> text');
		$('#senha').attr('type', 'text');
	}
	if(input_tipo == "text"){
		//alert('text -> password');
		$('#senha').attr('type', 'password');
	}
});
$(".login-master-ver").click(function(){
	//alert($('#senha:input')[0].type);
	input_tipo = $('#senha:input')[0].type;
	if(input_tipo == "password"){
		//alert('password -> text');
		$('#senha').attr('type', 'text');
	}
	if(input_tipo == "text"){
		//alert('text -> password');
		$('#senha').attr('type', 'password');
	}
});
/*End - VISUALIZAR SENHA*/

/*Start - MASTER ON*/
$(".matriz-master-campo-geral-btn-icone-criar").click(function(){
	$(".escurecer").addClass("master-on");
	$(".master-criar").addClass("master-on");
});
$(".matriz-master-campo-geral-btn-icone-editar").click(function(){
	$(".escurecer").addClass("master-on");
	$(".master-editar").addClass("master-on");
});
$(".matriz-master-campo-geral-btn-icone-excluir").click(function(){
	$(".escurecer").addClass("master-on");
	$(".master-excluir").addClass("master-on");
});
$(".matriz-master-campo-geral-btn-icone-tms").click(function(){
	$(".escurecer").addClass("master-on");
	$(".master-tms").addClass("master-on");
});
$(".matriz-master-campo-geral-btn-icone-download").click(function(){
	$(".escurecer").addClass("master-on");
	$(".master-download").addClass("master-on");
});
$(".matriz-master-card-aberto-topo-fechar").click(function(){
	sair();
});
$(".escurecer").click(function(){
	sair();
});
function sair(){
	$(".master-criar").removeClass("master-on");
	$(".master-editar").removeClass("master-on");
	$(".master-excluir").removeClass("master-on");
	$(".master-download").removeClass("master-on");
	$(".master-tms").removeClass("master-on");
	$(".escurecer").removeClass("master-on");
}
/*End - MASTER ON*/

/*Start - TECLADO*/
document.onkeydown = function(evt){
	evt = evt || window.event;
	var isEscape = false;
	var isEnter = false;
	if ("key" in evt){
		isEscape = (evt.key == "Escape" || evt.key == "Esc");
		isEnter = (evt.key == "Enter" || evt.key == "Return");
	}else{
		isEscape = (evt.keyCode == 27);
		isEnter = (evt.keyCode == 13);
	}
	if (isEscape) {/*SEMPRE QUE SE PRESSIONAR ESC FAÇA O QUE ESTA ABAIXO*/
		sair();
	}
	if (isEnter) {/*SEMPRE QUE SE PRESSIONAR ESC FAÇA O QUE ESTA ABAIXO*/
		//alert('enter');
	}
};
/*End - TECLADO*/