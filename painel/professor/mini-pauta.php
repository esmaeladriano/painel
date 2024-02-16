<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>


<?php  include_once('D:\xampp\htdocs\sistema\painel\professor\navbar.php')  ?>

<div id="container-panel">
<div class="" id="opacity-panel">
<div class="container">
<div class="row">
<div class="col-12">
<div class="box">
<div class="div-title-box">
<span class="title-box-main  d-flex justify-content-center">Mini - pauta </span>
</div>   
<div class="container">
                <div class="row justify-content-around">

                <div class="col my-3 search">
                        <Label>Classe</Label>
                       <select name="turma" id="turmac">
                        <option>Escolha uma Classe</option>
                        <option>10Classe</option>
                        <option>11Classe</option>
                       </select>
                  </div>
                   
                    <div class="col my-3 search">
                        <Label>Turma</Label>
                       <select name="turma" id="turmac">
                        <option>Escolha uma turma</option>
                        <option>F31M</option>
                        <option>F36T</option>
                       </select>
                  </div>
                  <div class="col my-3 search">
                        <Label>Disciplina</Label>
                       <select name="disc" id="disc">
                        <option>Escolha a disciplina</option>
                        <option>TLP</option>
                        <option>TP</option>
                       </select>
                    </div>
                </div>



                <div class="row">
                    <div class="col-5 my-3 search">
                        <h6>Classe:</h6>
                    </div>
                    <div class="col my-3 search">
                        <h6>Turma: </h6>
                  </div>
                  <div class="col my-3 search">
                        <h6>Disciplina: </h6>
                  </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
<div class="row">
    <table class=" table table-hover">
        <thead>
            <tr>
            <th>Nº do Estudante</th>
            <th>Nome</th>
            <th>Mac</th>
            <th>PP</th>
            <th>PT</th>
            <th>Média</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ana João</td>
                    <td>8</td>
                    <td>10</td>
                    <td>17</td>
                    <td>18</td>
                </tr> 
                <tr>
                    <td>2</td>
                    <td>André Luiz</td>
                    <td>8</td>
                    <td>14</td>
                    <td>07</td>
                    <td>7.5</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ana João</td>
                    <td>9</td>
                    <td>9</td>
                    <td>07</td>
                    <td>15</td>
                </tr>
            </tbody>
            
</table>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Preencher</button>
</div>
</div>
</div>

</div>       
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
</body>
</html>