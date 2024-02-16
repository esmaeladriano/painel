<?php
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
if(isset($_GET['dINS']))
{
    $pes = $_GET['dINS'];
    $sql = "DELETE FROM aluno WHERE `aluno`.`id` = $pes;";
    $result = mysqli_query($conexao, $sql);
    header('Location:http://localhost/sistema/painel\adim\visualizar-inscricao.php');
}  
?>
<?php
// Deletando os cursos
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
if(isset($_GET['deletCurso']))
{
    $pes = $_GET['deletCurso'];
    $sql = "DELETE FROM curso WHERE `curso`.`id` = $pes;";
    $result = mysqli_query($conexao, $sql);
    header('Location:http://localhost/sistema/painel\adim\visualizar-curso.php');
}  
?>
<?php
// Deletando Disciplina
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
if(isset($_GET['dINS']))
{
    $pes = $_GET['dINS'];
    $sql = "DELETE FROM aluno WHERE `aluno`.`id` = $pes;";
    $result = mysqli_query($conexao, $sql);
    header('Location:http://localhost/sistema/painel\adim\visualizar-inscricao.php');
}  
?>
<?php
// Deletando turma
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
if(isset($_GET['deletTurma']))
{
    $pes = $_GET['deletTurma'];
    $sql = "DELETE FROM turma WHERE `turma`.`id` = $pes";
    $result = mysqli_query($conexao, $sql);
    header('Location:http://localhost/sistema/painel\adim\visualizar-turma.php');
}  
?>