<?php
// Edição de turma
if(isset($_GET['editTurma']))
{
  include_once('D:\xampp\htdocs\sistema\conexao.php') ;
    $pes =$_GET['editTurma'];
    $sql ="SELECT * FROM turma WHERE id = $pes;";
    $result = mysqli_query($conexao, $sql);
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
<h1 class="title-box-main">Editando Turma</h1>
</header>
<div class="div-content-box py-2">

<form action="salve_inser.php" method="post">
<label>Nome do Curso</label>
<input type="text" name="editarT" value="<?php 
                        while($dados = mysqli_fetch_assoc($result))
                        {
                          echo $dados['nome'];
                         } ?>" placeholder="Nome do curso">
 <input type="hidden" name="id" value="<?php echo $pes; ?>">
<div class="row d-flex justify-content-center">
<input class="btn btn-primary mt-3" id="submit" type="submit" name="updateTurma" value="Editar">
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