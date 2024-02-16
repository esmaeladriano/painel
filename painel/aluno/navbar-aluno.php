<header class="top">
	<div class="container-top pl-3 py-2">
        <div class="row" style="width: 100%;">
    	    <div class="col-md-4 col-12 d-flex align-items-center justify-content-center justify-content-md-start">
			<header> <img width="100px" height="40px"  src="http://localhost/sistema/Imagem/Loo-removebg-preview%20(1).png" alt=""></header>
    	    </div>

    	    <div class="data-list-student col-md-8 col-12 d-flex justify-content-md-end justify-content-center align-items-center py-1">
                
                <a href="#" id="exit"><i class="fas fa-sign-out-alt"></i> Sair</a>
            </div>
        </div>
    </div>
	</header>
    <div class="container-main container-fluid">
      <div class="row">



<div class="menu border-top" id="menu">
	<div id="opacity-menu" class="container-fluid">
		<div class="row">
			<div class="div-img-profile">
				<img src="http://localhost/sistema/Imagem/user.png" class="rounded-circle img-profile" id="" width="100" height="100">		
				</div>
			<div id="name-user">Esmael Adriano</div>
            					    
			<ul class="menu-ul text-center text-md-left main-menu">
				<li class="menu-item">
					<a href="http://localhost/sistema\painel\aluno\" class="menu-item-inner">
							<div class="name-item-menu"><i class="fas fa-home"></i>Inicio
							</div> 
					</a>
				</li>
			<li class="menu-item">
				<a href="http://localhost/sistema\painel\aluno\boletim.php" class="menu-item-inner">
					<div class="name-item-menu">
						<i class="fas fa-file-invoice"></i> Boletim
					</div>
				</a>
				
			</li>

			<li class="menu-item">
				<a href="http://localhost/sistema\painel\aluno\Calendario.php" class="menu-item-inner">
					<div class="name-item-menu">
						<i class="fas fa-users"></i> Meu Calendário
					</div>
				</a>
			</li>

			<!-- <li class="menu-item">
				<a href="http://localhost/sistema\painel\aluno\notas.php" class="menu-item-inner">
					<div class="name-item-menu">
						<i class="fas fa-book-open"></i> Ver Notas
					</div>
				</a>
			</li> -->

			<li class="menu-item">
				<a href="http://localhost/sistema\painel\aluno\confirma-matricula.php" class="menu-item-inner">
					<div class="name-item-menu">
						<i class="fas fa-book-open"></i> Matrícula
					</div>
				</a>
			</li>

			<li class="menu-item">
					<a href="http://localhost/sistema\painel\editar-conta.php"  class="menu-item-inner" target="_blank">
						<div class="name-item-menu"><i class='fas fa-tools'></i></i>Minha Conta</div>
					</a>
			</li>

		</ul>
		</div>
	</div>
</div>
<li class="menu-item-exit d-md-none d-block text-center" id="close-menu" style="max-height: 48px;" value="0">Abrir Menu</li>

<script>
//FUNCAO ABRIR SUBMENU
$(document).ready(function() {
  	$('.menu-item').click(function(e){
  		var y = e.target;
  		//ATE ACHAR O MENU-ITEM CLICADO
		while(!($(y).hasClass('menu-item'))){
			y = $(y).parent();
		}
		//SO FAZ O SLIDE TOGGLE SE FOI UM ITEM DO MENU PRINCIPAL
		if(!($(y).parent().hasClass('sub-menu'))){
			$(y).next('ul').slideToggle(400);
		}
	});
});

$(document).ready(function() {
    $('#close-menu').click(function(e) {
        var v = $('#close-menu').val();
        if(v == 0){
        	$('#close-menu').val('1');
        	$('#close-menu').text('Fechar Menu');
        	$('#menu').css("display", "block");
        }else{
        	$('#close-menu').val('0');
        	$('#close-menu').text('Abrir Menu');
        	$('#menu').css("display", "none");
        }
        e.stopPropagation();
    });
});

</script>	