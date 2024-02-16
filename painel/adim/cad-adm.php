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
<h1 class="title-box-main  d-flex justify-content-center">Cadastro de administrador</h1>
</header>
<div class="container">
<form class="py-3">
<div class="row">
<div class="divisao-cad col-md-8 col-sm-12">
<article>
<header>
<h2 class="title-div-form">Dados pessoais</h2>
</header>
<hr>
<div class="row">
<div class="col-md-6 col-sm-6">

<li><label>Nome</label></li>
<li><input type="text" name="name" placeholder="Nome" required=""></li>

<li><label>Sobrenome</label></li>
<li><input type="text" name="last_name" placeholder="Sobrenome"></li>

<li><label>Data de nascimento</label></li>
<li><input type="text" name="birth" class="date" data-mask="00/00/0000" placeholder="Ex.: 12/05/2000" required></li>

<li><label>Nª do BI</label></li>
<li><input type="text" name="document" class="cpf" placeholder="BI" pattern="[0-9]{9}[A-Za-z]{2}[0-9]{3}"></li>

</div>

<div class="col-md-6 col-sm-6">
<li><label>Gênero</label></li>
<li><input type="text" name="genre" placeholder="M/F/O" pattern="[M,m,F,f,O,o]{1}"></li>

<li><label>Telefone</label></li>
<li><input type="text" name="phone" class="phone" maxlength="9" pattern="[0-9]{9}" placeholder="Contato"></li>

<li><label>Email</label></li>
<li><input type="text" name="email" class="field_email" placeholder="Email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"></li>

<li><label>Endereço Completo</label></li>
<li><input type="text" name="address"  placeholder="Cidade-Bairro-Rua-Numero"></li>
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
<li><input type="password" name="pass" placeholder="Senha temporária" required=""></li>
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