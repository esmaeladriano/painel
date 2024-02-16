<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
<?php include_once('D:\xampp\htdocs\sistema\painel\adim\navbar-adim.php') ?>
  


<div id="container-panel">
<div class="" id="opacity-panel">
<div class="container">
<div class="row">
<div class="col-md-9 col-12">
<div id="msg"></div>
<div class="box">
<header class="div-title-box">
<h1 class="title-box-main  d-flex justify-content-center">Preencher disciplinas em turmas</h1>
</header>
<div class="container p-3">
<form id="form"> 

<div class='col-12 py-2'>
Selecione a turma a qual deseja preencher 
<select required>
    <option></option>
    <option>F31M</option>
    <option>F30T</option>

</select> </div>


<div class='col-12 py-2'>
Selecione a disciplina
<select required>
 <option></option>
 <option>Matemática</option>
 <option>Física</option>
 <option>Inglês</option>
</select> SEAC</div>

<div class='col-12 py-2'>
Selecione o professor 
<select  required>
<option value=""></option>
<option>Francisco</option>
<option>José</option>
<option>André</option>
<option>João</option>
</select>
</div>
       
<div class="col-12 py-2">

<input type="submit" value="Cadastrar"  class="btn btn-primary" name="">
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
</body>
</html>