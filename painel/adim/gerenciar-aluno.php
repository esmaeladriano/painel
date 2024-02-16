<!DOCTYPE html>
<html lang="en">
<?php include_once('D:\xampp\htdocs\sistema\painel\header.php') ?>
<body>
    <style>
        .search{
            display: flex;
            justify-content: center;
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
                    <input type="search" name="pesquisar" id="pesquisar" placeholder="Psquise Aqui" class="form-control w-25">
                    <button type="submit" class="btn btn-primary mx-1">Pesquisar</button>
                </div>   
                <div class="box">
                    <div class="div-title-box">       
                        <span class="title-box-main  d-flex justify-content-center">Todos Admin</span>
                    </div>       
                    <table id="tabela-scroll" class="table">
                      <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Foto</th>
                            <th>Nivel de acesso</th>
                            <th>Acções</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Esmael Adriano</td>
                            <td><img width="100px" height="40px"  src="http://localhost/sistema/Imagem/Loo-removebg-preview%20(1).png" alt=""></td>
                            <td>Adim</td>
                            <td> <h1>+ - *</h1></td>
                        </tr>
                       
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div> 
    </div>
