<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
<?php include_once('D:\xampp\htdocs\sistema\painel\adim\navbar-adim.php') ?>
  



<div id="container-panel">
<div class="" id="opacity-panel">
<div class="container">
<div class="row mx-3">
<div id="msg"></div>
<div class="box">
<header class="div-title-box">
<h1 class="title-box-main  d-flex justify-content-center">Cadastro de Aluno</h1>
</header>
<div class="container">
<form class="py-3">
<div class="row">
<div class="divisao-cad col-md-8 col-sm-12">
<article>
<header>
<h2 class="title-div-form">Dados Acadêmicos</h2>
</header>
<hr>
<div class="row">
<div class="col-md-6 col-sm-6">

<li><label>Codigo da matrícula</label></li>
<li><input type="text" name="codMat" placeholder="codigo Matricula" required=""></li>



</div>

</div>
</article>
</div>
<div class="divisao-cad col-md-4 col-sm-12">
<article>
<header>
<h2 class="title-div-form">Dados do sistema</h2>
</header>

<li><label>Nome do usuário</label></li>
<li><input type="text" name="login" placeholder="Nome temporário" required=""></li>

<li><label>Senha do usuário</label></li>
<li><input type="password" name="senha" placeholder="Senha temporária" required=""></li>
<div class="row mt-3">
    <div class="col h-100">
	<input id="file-upload1" name="img_profile" type="file" style="display:none;">
    <img src="http://localhost/sistema/Imagem\user.png" id="img_profile">
    <li><label>Imagem de perfil</label></li> 
    <label for="file-upload1" class="btn btn-primary btn-sm">
Enviar Imagem
    </label>
    </div>
</div>
</div>
</article>
</div>
</div>
<div class="row d-flex justify-content-center mb-3">
    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
</div>
</form>
</div>
</div>
</div>

</div> 
</div>
</div>       
</div>
</div>

<script type="text/javascript" src="js copy/slide.js"></script>
			  </div>
</div>
</div>
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>


<script src="/js copy/cad_usu.js"></script>
<script src="/js copy/load_img_real_time.js"></script>
</body>
</html>