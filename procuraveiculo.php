<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
      }
    </style>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include 'connect.php';
    $chassi = $_POST['chassi'];
    $sql = mysqli_query($conn," SELECT * FROM carro WHERE chassi = '$chassi'");
    $vetor = mysqli_fetch_array($sql);
      if ($chassi == $vetor['chassi']) {
      $nome = $vetor['nomeseg'];
      $placa = $vetor['placa'];
      $uf = $vetor['uf'];
      $marca = $vetor['marca'];
      $ano = $vetor['ano'];
      $nmotor = $vetor['nmotor'];
      $chassi = $vetor['chassi'];
      $model = $vetor['model'];
      $cor = $vetor['cor'];
      $renav = $vetor['renav'];

      ?>
      <div class='container-fluid'>
      <h1 class='display-4 text-center' >Informacao de Veiculo</h1>
      <table class='table table-striped' style='margin-top:20px'>
  <thead>
    <tr>
      <th scope='col'>Chassi</th>
      <th scope='col'>Nome</th>
      <th scope='col'>Placa</th>
      <th scope='col'>UF</th>
      <th scope='col'>Marca</th>
      <th scope='col'>Ano</th>
      <th scope='col'>Numero Motor</th>
      <th scope='col'>Modelo</th>
      <th scope='col'>Placa</th>
      <th scope='col'>Renavam</th>
      <th scope='col'>Cor</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'><?php echo $chassi; ?></th>
      <td><?php echo $nome; ?></td>
      <td><?php echo $placa; ?></td>
      <td><?php echo $uf; ?></td>
      <td><?php echo $marca; ?></td>
      <td><?php echo $ano; ?></td>
      <td><?php echo $nmotor; ?></td>
      <td><?php echo $model; ?></td>
      <td><?php echo $placa; ?></td>
      <td><?php echo $renav; ?></td>
      <td><?php echo $cor; ?></td>
    </tr>
  </tbody>
</table>
</div>
<a href='index.php' class='blockquote-footer'> Retornar a busca de veiculos </a>


      <?php


  }else { ?>
    <h2 class='display-4'>Numero de Chassi invalido</h2> <br> <a href='formprocuraveiculo.php' class='blockquote-footer' style='font-size:30pt'> Voltar </a>
  <?php }

?>



  </body>
</html>
