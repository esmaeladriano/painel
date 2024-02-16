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