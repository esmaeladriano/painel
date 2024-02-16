<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<link rel="stylesheet" href="C:\xampp\htdocs\sistema\painel\aluno\boletim-imprime.css" media="print">
<body>

<?php  include_once ('D:\xampp\htdocs\sistema\painel\aluno\navbar-aluno.php')?>
	

<div id="container-panel">
<div class="" id="opacity-panel">

    <div class="container">
        <div class="row">
            <div class="col-12">         
                <div class="box">
                    <div class="div-title-box">       
                        <span class="title-box-main  d-flex justify-content-center">Boletim</span>
                    </div>       
                    <table id="tabela-scroll" class="table table-hover">
                      <thead>
                        <tr>
                            <th>Esmael Adriano</th>
                            <th>MAC</th>
                            <th>PP</th>
                            <th>PT</th>
                            <th>Média</th>
                            <th>Resultado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>TREI</td>
                            <td>12</td>
                            <td>11</td>
                            <td>13</td>
                            <td>12</td>
                            <td>Aprovado</td>
                        </tr>
                        <tr>
                            <td>Matemática </td>
                            <td>18</td>
                            <td>16</td>
                            <td>18</td>
                            <td>17</td>
                            <td>Aprovado</td>
                           
                        </tr>
                        <tr>
                            <td>SEAC</td>
                            <td>12</td>
                            <td>5</td>
                            <td>7</td>
                            <td>8</td>
                            <td>Reprovado</td>
                        </tr>
                        <tr>
                            <td>TLP</td>
                            <td>18</td>
                            <td>15</td>
                            <td>14</td>
                            <td>15</td>
                            <td>Aprovado</td>
                        </tr>
                        <tr>
                            <td>OGI </td>
                            <td>15</td>
                            <td>14</td>
                            <td>9</td>
                            <td>12</td>
                            <td>Aprovado</td>
                        </tr>
                        <tr>
                            <td>Empreendedorismo</td>
                            <td>14</td>
                            <td>11</td>
                            <td>13</td>
                            <td>12</td>
                            <td>Aprovado</td>
                        </tr>
                        <tr>
                            <td>Física</td>
                            <td>09</td>
                            <td>11</td>
                            <td>14</td>
                            <td>12</td>
                            <td>Aprovado</td>
                        </tr>
                        <tr>
                            <td>Inglês</td>
                            <td>12</td>
                            <td>11</td>
                            <td>13</td>
                            <td>12</td>
                            <td>Aprovado</td>
                        </tr>
                      </tbody>
                    </table>
                    
                </div>
                <div class="col-2 offset-10 mt-3">
                        <button class="btn btn-primary btn-group-lg" onclick="imprimir()">Imprimir</button>
                    </div>
            </div>
        </div> 
    </div>

</div>
</div> 
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>

<script>
    function imprimir(){
        window.print();
    }
</script>

</body>
</html>