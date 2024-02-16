
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
<h1 class="title-box-main">Cadastro de disciplina</h1>
</header>
<div class="div-content-box py-2">
<form method="post" action="salve_inser.php">
<label>Nome da disciplina</label>
<input type="text" name="disciplina" placeholder="Nome da disciplina">
<div class="row">
                      <label class="col-4">Selecione um Curso</label>
                      <select class="col-4" name='curso' id="curso" required="require">  
                       <option value="">Selecione um Curso</option>
                       <?php 
                       include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                       $s1 = "SELECT * FROM `curso`";
                      $r1 = mysqli_query($conexao, $s1);
                        while($f = mysqli_fetch_assoc($r1))
                      {   
                      echo '<option value="'.$f['id'].'">'.$f['nome'].'</option>';   
                      }
                      ?>
                      </select>
        </div>
        <div class="row">
                      <label class="col-4">Selecione uma Turma</label>
                      <select class="col-4" name='turma' id="turma" required="require">  
                       <option value="">Selecione uma Turma</option>
                       <?php 
                       include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                       $s2 = "SELECT * FROM `turma`";
                      $r2 = mysqli_query($conexao, $s2);
                        while($e = mysqli_fetch_assoc($r2))
                      {   
                      echo '<option value="'.$e['id'].'">'.$e['nome'].'</option>';   
                      }
                      ?>
                      </select>
        </div>
        <div class="row">
                      <label class="col-4">Selecione um Professore</label>
                      <select class="col-4" name='professor' id="professor" required="require">  
                       <option value="">Selecione um Professor</option>
                       <?php 
                       include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                       $s3 = "SELECT * FROM `professores`";
                      $r3 = mysqli_query($conexao, $s3);
                        while($p = mysqli_fetch_assoc($r3))
                      {   
                      echo '<option value="'.$p['ID'].'">'.$p['Nome'].'</option>';   
                      }
                      ?>
                      </select>
        </div>
<div class="row d-flex justify-content-center">
<input class="btn btn-primary mt-3" id="" type="submit" name="cadDisc" value="Cadastrar">
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