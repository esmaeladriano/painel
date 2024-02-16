<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
  <div class="">
    <?php include_once('D:\xampp\htdocs\sistema\painel\adim\navbar-adim.php') ?>
  
    <div id="container-panel">
                <div class="" id="opacity-panel">
                    <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
    <section class="box">
      <header class="div-title-box">
        <h1 class="title-box-main d-flex justify-content-center">Dashboard Admin</h1>
      </header>
      <div class="div-content-box mt-3 mb-3">
        <div class="row">
          
          <div class="box-dash col-md-3 col-sm-3 col-6">
            <a href="#">
              <article class="box-count " id="box-dash-prof">
                <header class="col-12 title-box-dash p-2">
                  <h1>Professor(es)</h1>
                </header>
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                      <i class="fas fa-chalkboard-teacher"></i>
          </div>
                    </div>
                    <div class="col-md-6">
                    
                    7                    
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div>
  
          <div class="box-dash col-md-3 col-sm-3 col-6">
            <a href="#">
              <article class="box-count " id="box-dash-aluno">
                <header class="col-12 title-box-dash p-2">
                  <h1>Alunos</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                      <i class="fas fa-user-graduate"></i>
    </div>
                    </div>
                    <div class="col-md-6">
  
                    8
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div>
  
          <div class="box-dash col-md-3 col-sm-3 col-6">
            <a href="#">
              <article class="box-count " id="box-dash-adm">
                <header class="col-12 title-box-dash p-2">
                  <h1>Adms</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                      <i class="fas fa-users"></i>
   </div>
                    </div>
                    <div class="col-md-6">
                    
                      3
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div>
  
          <!-- <div class="box-dash col-md-3 col-sm-3 col-6">
            <a href="#">
              <article class="box-count " id="box-dash-noticia">
                <header class="col-12 title-box-dash p-2">
                  <h1>Noticias</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                      <i class="far fa-calendar-alt"></i>
                      </div>
                    </div>
                    <div class="col-md-6">
                    
                      6
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div> -->

          <div class="box-dash col-md-3 col-sm-3 col-6 mt-2">
            <a href="http://localhost/sistema\painel\adim\visualizar-curso.php">
              <article class="box-count " id="box-dash-noticia">
                <header class="col-12 title-box-dash p-2">
                  <h1>Cursos</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                        <i class="fas fa-book-open"></i>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <?php 
                    include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                    $sql = "SELECT COUNT(*) total FROM `curso`;";
                    $result = mysqli_query($conexao, $sql);
                    while($dados = mysqli_fetch_assoc($result))
                    {
                      echo $dados['total'];
                    }
                    ?>
                    
                      
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div>
          <div class="box-dash col-md-3 col-sm-3 col-6 mt-2">
            <a href="http://localhost/sistema\painel\adim\visualizar-disciplina.php">
              <article class="box-count " id="box-dash-noticia">
                <header class="col-12 title-box-dash p-2">
                  <h1>Disciplinas</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                        <i class="fas fa-book-open"></i>
                      </div>
                    </div>
                    <div class="col-md-6">
                    
                    <?php 
                    include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                    $sql = "SELECT COUNT(*) total FROM `disciplina`;";
                    $result = mysqli_query($conexao, $sql);
                    while($dados = mysqli_fetch_assoc($result))
                    {
                      echo $dados['total'];
                    }
                    ?>
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div>
          <div class="box-dash col-md-3 col-sm-3 col-6 mt-2">
            <a href="http://localhost/sistema\painel\adim\visualizar-turma.php">
              <article class="box-count " id="box-dash-noticia">
                <header class="col-12 title-box-dash p-2">
                  <h1>Turmas</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                        <i class="fas fa-book-open"></i>
                      </div>
                    </div>
                    <div class="col-md-6">
                    
                    <?php 
                    include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                    $sql = "SELECT COUNT(*) total FROM `turma`;";
                    $result = mysqli_query($conexao, $sql);
                    while($dados = mysqli_fetch_assoc($result))
                    {
                      echo $dados['total'];
                    }
                    ?>
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div>
          <div class="box-dash col-md-3 col-sm-3 col-6 mt-2">
            <a href="http://localhost/sistema\painel\adim\visualizar-inscricao.php">
              <article class="box-count " id="box-dash-noticia">
                <header class="col-12 title-box-dash p-2">
                  <h1>Inscrições</h1>
                </header>
                
                <div class="col-12 count-dash p-2">
                  <div class="row">
                    <div class="col-md-6 icon-dash">
                      <div class="container-icon-dash">
                      <i class="far fa-calendar-alt"></i>
                      </div>
                    </div>
                    <div class="col-md-6">
                    <?php 
                    include_once('D:\xampp\htdocs\sistema\conexao.php') ;
                    $sql = "SELECT COUNT(*) total FROM `aluno`;";
                    $result = mysqli_query($conexao, $sql);
                    while($dados = mysqli_fetch_assoc($result))
                    {
                      echo $dados['total'];
                    }
                    ?>
                    </div>
                  </div>
                </div>                         
              </article>
            </a>
          </div> 
          
        </div>
      </div>
    </section>
    </div>        
    </div>
    </div>

 			  </div>
                </div>
            </div>
      </div>
  </div>
</body>

</html>