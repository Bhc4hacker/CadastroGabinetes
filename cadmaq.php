<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Projeto Pedro</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>

    <?php
      include("header.php")
     ?>

  <div class="container">
  <form method="post" action="grava_dados.php">
    <div class="row">
      <h4>Cadastro de máquinas</h4>
      <div class="input-group">
        <input name="cod_m" type="text" placeholder="Código da máquina"/>
      </div>
      <div class="input-group">
        <input name="serv_m" type="text" placeholder="Serviço prestado pela máquina"/>
      </div>
      <div class="input-group">
        <input name="set_m" type="text" placeholder="Setor da máquina"/>
      </div>
    </div>
    <div class="row">
      <div class="input-group">
        <input name="serv_user" type="text" placeholder="Usuário que fez o serviço"/>
      </div>
      <div class="input-group">
        <input name="mark" type="text"placeholder="Marca"/>
      </div>
      <div class="input-group">
        <input name="city" type="text" placeholder="Cidade"/>
      </div>
      <button type="submit" name="button">Cadastrar</button>
    </div>
  </form>
</div>


  </body>
</html>
