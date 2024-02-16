<?php
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
//Cadastro de turma
if(isset($_POST['cadTurma']))
{
  $turma = $_POST['turma'];
  $idc = $_POST['curso'];
  $idcl = $_POST['classe'];
  $idtu = $_POST['turno'];
     $insr = "INSERT INTO `turma` (`nome`, `id_curso`, `id_classe`, `id_turno`) VALUES ('$turma ', '$idc', '$idcl', '$idtu');";
     $result = mysqli_query($conexao, $insr);

    header('Location:http://localhost/sistema/painel\adim\cad-turma.php');
}
?>
<!-- Cadastro de Curso -->
<?php
if(isset($_POST['cadCurso']))
{
    include_once('D:\xampp\htdocs\sistema\conexao.php') ;

    $nome = $_POST['curso'];
    $insr = "INSERT INTO `curso` (`id`, `nome`) VALUES (NULL, '$nome');";
    $result = mysqli_query($conexao, $insr);
    header('Location:http://localhost/sistema/painel\adim\cad-curso.php');
}
?>
<!-- Cadastro De Disciplina -->
<?php
if(isset($_POST['cadDisc']))
{
   
    include_once('D:\xampp\htdocs\sistema\conexao.php') ;
    $nome = $_POST['disciplina'];
    $curso = $_POST['curso'];
    $turma = $_POST['turma'];
    $prof = $_POST['professor'];
    $insr = "INSERT INTO `disciplina` (`id`, `nome`) VALUES (NULL, '$nome');";
    $result = mysqli_query($conexao, $insr);
// Buscando O ID da disciplina que disgitei agora
    $s2 = "SELECT id FROM `disciplina` WHERE nome = '$nome'";
    $r2 = mysqli_query($conexao, $s2);
    while($e = mysqli_fetch_assoc($r2))
    {
    $idD = $e['id'];  
$insertDC ="INSERT INTO `disciplina_curso` (`id`, `id_disciplina`, `id_curso`) VALUES (NULL, '$idD', ' $curso ');";  $resultDC = mysqli_query($conexao, $insertDC);
    $insertDT ="INSERT INTO `disciplina_turma` (`id`, `id_disciplina`, `id_turma`) VALUES (NULL, '$idD', '$turma');";
    $resultDT = mysqli_query($conexao, $insertDT);
    $insertDP ="INSERT INTO `disciplina_prof` (`id`, `id_prof`, `id_disciplina`) VALUES (NULL, ' $prof', '$idD');";
    $resultDP = mysqli_query($conexao, $insertDP);
    }
    
    
    header('Location:http://localhost/sistema/painel\adim\cad-disc.php');
    
}
?>
<!-- Matrículas -->
<?php
if(isset($_POST['cadMatri']))
{
    include_once('D:\xampp\htdocs\sistema\conexao.php') ;
    $t = $_POST['turma'];
    $codigo = $_POST['codigo'];
    $insr = "INSERT INTO `matricula` (`id`, `data_matricula`, `id_turma`, `id_aluno`) VALUES (NULL, current_timestamp(), '$t', ' $codigo');";
    $result = mysqli_query($conexao, $insr);
    header('Location:http://localhost/sistema/painel\adim\matri.php');
}
?>

<?php
// Salvar edição de Curso
 if(isset($_POST['updateCurso'])){
    $id = $_POST['id'];
    $nome = $_POST['editarC'];
   $update = "UPDATE `curso` SET `nome` = '$nome' WHERE `curso`.`id` = $id;";
   $result = mysqli_query($conexao, $update);
    header('Location:http://localhost/sistema/painel\adim\visualizar-curso.php');
}
?>
<?php
// Salvar edição da Turma
 if(isset($_POST['updateTurma'])){
    $id = $_POST['id'];
    $nome = $_POST['editarT'];
    $update = "UPDATE `turma` SET `nome` = '$nome' WHERE `turma`.`id` = $id;";
    $result = mysqli_query($conexao, $update);
    header('Location:http://localhost/sistema/painel\adim\visualizar-turma.php');
}
?>
<?php
// Salvar edição da Disciplina
 if(isset($_POST['updateDisc'])){
    $id = $_POST['id'];
    $nome = $_POST['editarD'];
    $update = "UPDATE `disciplina` SET `nome` = '$nome' WHERE `disciplina`.`id` = $id;";
    $result = mysqli_query($conexao, $update);
    header('Location:http://localhost/sistema/painel\adim\visualizar-disciplina.php');
}
?>
