
<html>
	<head>
	<title>Visualizar Cadastros</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>

  <?php
  include ("header.php")
  ?>

  <center>
    <h1 id="name_tab">Cadastro de máquinas</h1>
  </center>

  <table class="tabela">
    
  <tr>
    <th>Código máquina</th>
    <th>Serviço prestado</th>
    <th>Setor da máquina</th>
    <th>Serviço usuário</th>
    <th>marca</th>
    <th>cidade</th>
  </tr>

  <?php include("connect.php");

  $sql_tipo = "SELECT * FROM cadastro";
  $resulta = $conn->query($sql_tipo);

  if ($resulta->num_rows > 0){

      while ( $row = $resulta->fetch_assoc()){

          echo '<tr>';
          echo '<td>'. $row['codigo_maquina'] .'</td>';
          echo '<td>'. $row['serv_prest'] .'</td>';
          echo '<td>'. $row['set_maquina'] .'</td>';
          echo '<td>'. $row['serv_usr'] .'</td>';
          echo '<td>'. $row['marca'] .'</td>';
          echo '<td>'. $row['cidade'] .'</td>';


          echo '</tr>';
      }
  }
  ?>
  </table>

</body>
</html>
