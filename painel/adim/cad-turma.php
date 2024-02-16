<?php
 include_once('D:\xampp\htdocs\sistema\conexao.php') ; 
 ?>

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
                <h1 class="title-box-main  d-flex justify-content-center">Cadastro de turma</h1>
              </header>
              <div class="div-content-box py-2">
                <form method="post" action="salve_inser.php">
                  <label>Nome da turma</label>
                    <input type="text" name="turma" placeholder="Nome da turma" required="require">
                    <div class="row">
                      <label class="col-4">Selecione um Curso</label>
                      <select class="col-4" name='curso' id="curso" required="require">  
                       <option value="">Selecione um Curso</option>
                       <?php 
                       $s1 = "SELECT * FROM `curso`";
                      $r1 = mysqli_query($conexao, $s1);
                        while($c = mysqli_fetch_assoc($r1))
                      {   
                      echo '<option value="'.$c['id'].'">'.$c['nome'].'</option>';   
                      }
                      ?>
                      </select>
                    </div>
                    <div class="row">
                      <label class="col-4">Selecione uma Classe</label>
                      <select class="col-4" name='classe' required="require">  
                       <option value="">Selecione uma Classe</option> 
                       <?php 
                       $s2 = "SELECT * FROM `classe`";
                      $r2 = mysqli_query($conexao, $s2);
                        while($d = mysqli_fetch_assoc($r2))
                      {   
                        echo '<option value="'.$d['id'].'">'.$d['nome'].'</option>';    
                      }
                        ?>
                      </select>
                    </div>
                    <div class="row">
                      <label class="col-4">Selecione um Período</label>
                      <select class="col-4" name='turno' required="require">  
                       <option value="">Selecione um Período</option>
                       <?php 
                       $s3 = "SELECT * FROM `turno`";
                      $r3 = mysqli_query($conexao, $s3);
                        while($e = mysqli_fetch_assoc($r3))
                      {   
                        echo '<option value="'.$e['id'].'">'.$e['nome'].'</option>';   
                      }
                        ?>
                      </select>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input class="btn btn-primary my-2" type="submit" name="cadTurma" value="Cadastrar">

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
</body>
</html>