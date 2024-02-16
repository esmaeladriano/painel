<?php
$disciplina = 'A2';
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
          <div class="col-md-12 col-12">   
            <div class="box">
              <header class="div-title-box">
                <h1 class="title-box-main  d-flex justify-content-center">Preencher disciplina na turma <?php echo $disciplina ?> </h1>
              </header>
              <div class="div-content-box p-3">
                <form>
                    <div class="row">
                      <div class="col">
                      <label><b>Cadastrar disciplina na Turma</b></label>
                        <div class="row">
                        <label class="col-4">Selecione uma Disciplina</label>
                          <select class="col-4" name=''>
                            <option></option>
                           <option>Informática</option>
                            <option>Enfermagem</option>
                          </select>
                        </div>
                        <div class="row">
                        <label class="col-4">Selecione uma Disciplina</label>
                          <select class="col-4" name=''>
                           <option></option>
                           <option> 10ªClasse</option>
                           <option> 11ªClasse</option>
                           <option> 12ªClasse</option>
                          </select>
                        </div>
                        <div class="row">
                        <label class="col-4">Selecione uma Disciplina</label>
                          <select class="col-4" name=''>
                           <option></option>
                           <option>Manhã</option>
                            <option>Tarde</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                      <label><b>Procurar O professor para disciplina</b></label>
                        <div class="row">
                          <label class="col-4">Selecione um professor</label>
                          <select class="col-4" name=''>
                           <option></option>
                           <option>Informática</option>
                            <option>Enfermagem</option>
                          </select>
                        </div>
                        <div class="row">
                       <label class="col-4">Selecione um professor</label>
                          <select class="col-4" name=''>
                           <option></option>
                           <option> 10ªClasse</option>
                           <option> 11ªClasse</option>
                           <option> 12ªClasse</option>
                          </select>
                        </div>
                        <div class="row">
                        <label class="col-4">Selecione um professor</label>
                          <select class="col-4" name=''>
                           <option></option>
                           <option>Manhã</option>
                            <option>Tarde</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <input type="submit" name="" class="btn btn-primary mt-2" value="Cadastrar">
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