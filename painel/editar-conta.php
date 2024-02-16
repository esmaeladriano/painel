<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
<style>
 body{
background-color: whitesmoke;
}


</style>




<div id="container-panel">
<div class="" id="opacity-panel">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-9 col-12">
<div class="box">
<header class="div-title-box">
<h1 class="title-box-main d-flex justify-content-center">Editar usuário</h1>
</header>
<div class="div-content-box">
<form>
<div class="row">
<div class="divisao-cad col-12">
<div class="divisao-cad">
<article>
<header>
<h2 class="title-div-form">Dados do sistema</h2>
</header>

<li><label>Nome do usuário</label></li>
<li><input type="text" name="login" placeholder="Nome temporário" required=""></li>
<li><label>Senha do usuário</label></li>
<li><input type="password" name="pass" placeholder="Senha temporária" required=""></li>
<center>
    <div class="row mt-3 justify-content-center">
    <div class="col h-100">
    <input id="file-upload1" name="img_profile" type="file" style="display:none;">
    <img src="http://localhost/sistema/Imagem\user.png" id="img_profile">
    <li><label>Imagem de perfil</label></li>
    <label for="file-upload1" style="background-color: #007bff;; color: white; border: none;" class="btn btn-sm">
    Enviar Imagem
    </label>
    </div>
    </div>
</center>
</article>
</div>
</div>
</div>
</div> 
<div class="d-flex justify-content-center">                    
<button type="submit" class="btn-lg my-3" style="background-color: #007bff;; color: white; border: none;">Editar</button>
</div>

</article>
</div>
</div>
</form>
</div>
</div>
</div>
</div> 
</div> 
</div>       
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
<script>
  $(function(){
   $('#file-upload1').change(function(){
  const file = $(this)[0].files[0]
  const fileReader = new FileReader()
  fileReader.onloadend = function(){
    $('#img1').attr('src', fileReader.result)
  }
  fileReader.readAsDataURL(file)
  })
  })
</script>
</body>
</html>