<?php 
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
if(isset($_GET['pesquisar']))
{
    $pes = $_GET['search'];
    $sql = "SELECT * FROM `aluno` WHERE nome LIKE '%$pes%' or id LIKE '%$pes%' ;";
    $result = mysqli_query($conexao, $sql);
}
else
{
 $sql = "SELECT * FROM `aluno`";
$result = mysqli_query($conexao, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
<style>
        .search{
            display: flex;
            justify-content: right;
        }
    </style>
  <div class="">
    <?php include_once('D:\xampp\htdocs\sistema\painel\adim\navbar-adim.php') ?>
    <div id="container-panel">
<div class="" id="opacity-panel">

    <div class="container">
        <div class="row">
            <div class="col-12">  
            <form action="visualizar-inscricao.php" method="get">  
            <div class="col mt-3 search">
                  
                        <input type="search" name="search" id="search" placeholder="Pesquisar" class="form-control w-25">
                        <button type="submit" name="pesquisar" class="btn btn-primary mx-1">Pesquisar</button>
                   
            </div>
            </form>
                <div class="box">
                    <div class="div-title-box">       
                        <span class="title-box-main  d-flex justify-content-center">Todas Inscrições</span>
                    </div>       
                    <table id="tabela-scroll" class="table">
                      <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Data de Inscrição</th>
                            <th>Accões</th>
                           
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        while($dados = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td> $dados[id] </td>";
                            echo "<td> $dados[nome] </td>";
                            echo "<td> $dados[email] </td>";
                            echo "<td> $dados[Data_ins] </td>";
                            echo "<td> 
                            <a href='http://localhost/sistema/painel/adim/matri.php?ConfINS=$dados[id]&nome=$dados[nome]&classe=$dados[Classe]&curso=$dados[Curso]'>
                            <button class='btn btn-success'> </button>
                            </a>
                            <a href='http://localhost/sistema/painel/adim/delete.php?dINS=$dados[id] '>
                            <button class='btn btn-danger'> </button>
                            </a> 
                            </td>";
                            echo "</tr>";
                        }
                        
                        ?>
                       
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div> 
    </div>
