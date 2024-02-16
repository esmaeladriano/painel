<?php 
include_once('D:\xampp\htdocs\sistema\conexao.php') ;
$sql = "SELECT t.id, t.nome as turma, c.nome curso, cl.nome as classe, tu.nome as turno FROM turma t JOIN curso c on t.id_curso = c.id JOIN classe cl on t.id_classe = cl.id JOIN turno tu on t.id_turno = tu.id ORDER BY turma;";
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
                  
                  <a href="http://localhost/sistema/painel\adim\cad-turma.php"> 
                    <button class="btn" style="background-color: #5699e5ef;"> <h6>Adicionar +</h6></button>
                  </a>
               
                </div> 
                <div class="box">
                    <div class="div-title-box">       
                        <span class="title-box-main  d-flex justify-content-center">Todas Turmas</span>
                    </div>       
                    <table id="tabela-scroll" class="table">
                      <thead>
                        <tr>
                            <th>Código</th>
                            <th>Turma</th>
                            <th>Curso</th>
                            <th>Classe</th>
                            <th>Turno</th>
                            <th>Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        while($dados = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td> $dados[id] </td>";
                            echo "<td> $dados[turma] </td>";
                            echo "<td> $dados[curso] </td>";
                            echo "<td> $dados[classe] </td>";
                            echo "<td> $dados[turno] </td>";
                            echo "<td> 
                            <a href='http://localhost/sistema/painel/adim/editarT.php?editTurma=$dados[id]'>
                            <button class='btn btn-primary'> </button>
                            </a>
                            <a href='http://localhost/sistema/painel/adim/delete.php?deletTurma=$dados[id] '>
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
