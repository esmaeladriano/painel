<?php 
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
$sql = "SELECT * FROM `disciplina` ORDER BY nome;";
$result = mysqli_query($conexao, $sql);
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
            <div class="col mt-3 search">
                  
                  <a href="http://localhost/sistema/painel\adim\cad-disc.php"> 
                    <button class="btn" style="background-color: #5699e5ef;"> <h6>Adicionar +</h6></button>
                  </a>
               
                </div> 
                <div class="box">
                    <div class="div-title-box">       
                        <span class="title-box-main  d-flex justify-content-center">Todas Disciplinas</span>
                    </div>       
                    <table id="tabela-scroll" class="table">
                      <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        while($dados = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td> $dados[id] </td>";
                            echo "<td> $dados[nome] </td>";
                            echo "<td> 
                            <a href='http://localhost/sistema/painel/adim/editarD.php?editDisc=$dados[id]'>
                            <button class='btn btn-primary'> </button>
                            </a>
                            <a href='http://localhost/sistema/painel/adim/delete.php?deletDisci=$dados[id] '>
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
