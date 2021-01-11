<?php
include ("connect.php");

$cod_ma = $_POST["cod_m"];
$serv_ma = $_POST["serv_m"];
$set_ma = $_POST["set_m"];
$serve_user = $_POST["serv_user"];
$marka = $_POST["mark"];
$citty = $_POST["city"];


$sql = "INSERT INTO cadastro ( codigo_maquina ,  serv_prest , set_maquina, serv_usr, marca, cidade) VALUES ('$cod_ma', '$serv_ma', '$set_ma', '$serve_user', '$marka','$citty')";
if (mysqli_query($conn, $sql)) {
      echo "Dados gravados com sucesso";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);



?>
