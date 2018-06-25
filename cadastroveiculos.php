<?php
include 'connect.php';

$nome = $_POST['nome'];
$placa = $_POST['placa'];
$uf = $_POST['uf'];
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$nmotor = $_POST['nmotor'];
$chassi = $_POST['chassi'];
$model = $_POST['model'];
$renav = $_POST['renav'];
$cor = $_POST['cor'];

$query = "INSERT INTO carro(nomeseg,placa,uf,marca,ano,nmotor,chassi,model,cor,renav) VALUES ('$nome','$placa','$uf','$marca','$ano','$nmotor','$chassi','$model','$cor','$renav')";
mysqli_query($conn, $query);

header("Location:cadastrosucesso.php");
 ?>
