<?php
if(isset($_GET['ConfINS']))
{
  include_once('D:\xampp\htdocs\sistema\conexao.php') ;
    $pes = $_GET['ConfINS'];
    $nome = $_GET['nome'];
    $classe = $_GET['classe'];
    $curso = $_GET['curso'];

    $MTP = $s2 = "SELECT t.id as id, t.nome as nome FROM turma t
    JOIN curso c on t.id_curso = c.id
    join classe cl on t.id_classe = cl.id
    WHERE t.id_curso = '$curso' And t.id_classe = '$classe'";
   $r2 = mysqli_query($conexao, $s2);
  //  die($mostraturma.$mostro);
} 
else{
  include_once('D:\xampp\htdocs\sistema\conexao.php') ;

  $pes = '';
  $invi = 'invisible';
  $MTP  = 
 $s2 = "SELECT t.id as id, t.nome as nome FROM turma as t";
$r2 = mysqli_query($conexao, $s2);
}
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
<h1 class="title-box-main">Cadastrar Matrículas</h1>
</header>
<div class="div-content-box py-2">
<form method="post" action="salve_inser.php">
<label>Codigo de Inscrição</label>
<input type="text" name="codigo" value="<?php echo $pes ?>" placeholder="O seu codigo de inscrição">
<div class="row">
  <div class="col">
    <label for="turma"><b style="justify-content: center;"> Opções da Solicitação do Cliente</b> </label> <br>
    <select class="col-4" name='turma' id="turma" required="require">
                            <option value=""> </option>
                           <?php
                           echo $MTP ;

                           while($d = mysqli_fetch_assoc($r2))
                           {
                          echo '<option value="'.$d['id'].'">'.$d['nome'].'</option>';
                           }

                          ?>
                          </select>
  </div>
<br>
<div class="col-5 border border-left border-right mt-2 me-5 <?php echo($invi) ?>">
  <b style="justify-content: center;">Solicitações do Cliente</b> <br>
  <label for="curso">Curso Solicitado</label>
  <input type="text" id="curso" readonly value="<?php  $s2 = "SELECT c.nome as curso FROM curso c
        WHERE c.id='$curso'";
   $r2 = mysqli_query($conexao, $s2);
   while($c = mysqli_fetch_assoc($r2))
   {
   echo $c['curso'];
   } ?>">
  <label for="classe">Classe Solicitada</label>
  <input type="text" id="classe" readonly value="<?php  $s2 = "SELECT cl.nome as classe FROM classe cl
        WHERE cl.id='$classe'";
   $r2 = mysqli_query($conexao, $s2);
   while($c = mysqli_fetch_assoc($r2))
   {
   echo $c['classe'];
   } ?>">
</div>
</div>
<div class="row d-flex justify-content-center">
<input class="btn btn-primary mt-3" id="" type="submit" name="cadMatri" value="Cadastrar">
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