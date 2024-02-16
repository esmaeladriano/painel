<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
<?php include_once('D:\xampp\htdocs\sistema\painel\adim\navbar-adim.php') ?>
<div id="container-panel">
<div class="" id="opacity-panel">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-9 col-12">
<div class="box">
<header class="div-title-box">
<h1 class="title-box-main">Associando Disciplina Aos Professore</h1>
</header>
<div class="div-content-box py-2">
<form method="post" action="salve_inser.php">
        <div class="row">
                      <label class="col-4">Selecione uma Disciplina</label>
                      <select class="col-4" name='curso' id="curso" required="require">  
                       <option value="">Selecione uma Disciplina</option>
                       <?php 
                       include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                       $s1 = "SELECT * FROM `disciplina`";
                      $r1 = mysqli_query($conexao, $s1);
                        while($c = mysqli_fetch_assoc($r1))
                      {   
                      echo '<option value="'.$c['id'].'">'.$c['nome'].'</option>';   
                      }
                      ?>
                      </select>
        </div>

        <div class="row">
                      <label class="col-4">Selecione um Professor</label>
                      <select class="col-4" name='curso' id="curso" required="require">  
                       <option value="">Selecione um Professor</option>
                       <?php 
                       $s1 = "SELECT * FROM `professores`";
                      $r1 = mysqli_query($conexao, $s1);
                        while($c = mysqli_fetch_assoc($r1))
                      {   
                      echo '<option value="'.$c['ID'].'">'.$c['Nome'].'</option>';   
                      }
                      ?>
                      </select>
        </div>
<div class="row d-flex justify-content-center">
<input class="btn btn-primary mt-3" id="" type="submit" name="cadDT" value="Cadastrar">
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