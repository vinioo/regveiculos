<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Cadastro de Veiculos</title>
    <style>
     </style>

  </head>
  <body>

    <div id="container" class="container" style="background:lightyellow">
                  <div class="col-sm-8 offset-sm-2 text-center">
                      <h1 class="display-3">Cadastro De veiculos</h1>
                      <form class="" action="cadastroveiculos.php" method="post">
                      <div class="form-group row" style="margin-top:30px">
              <label for="example-text-input" class="col-2 col-form-label">Nome</label>
              <div class="col-9">
                <input class="form-control" type="text" name="nome">
              </div>
            </div>
            <div class="form-group row">
              <label for="placa" class="col-2 col-form-label">Placa</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="placa">
              </div>
            </div>
            <div class="form-group row">
              <label for="uf" class="col-2 col-form-label">UF</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="uf" maxlength="2">
              </div>
            </div>
            <div class="form-group row">
              <label for="marca" class="col-2 col-form-label">Marca</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="marca">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-2 col-form-label">Ano</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="ano">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Num. Motor</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="nmotor">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-number-input" class="col-2 col-form-label">Chassi</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="chassi">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-datetime-local-input" class="col-2 col-form-label">Modelo</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="model">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-month-input" class="col-2 col-form-label">Renavam</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="renav">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-color-input" class="col-2 col-form-label">Cor</label>
              <div class="col-9">
                <input class="form-control" type="text"  name="cor">
              </div>
            </div>
            <div class="form-group row" style="padding-top:10px">
              <div class="col-6 offset-sm-3">
                <input class="form-control" type="submit" value="Enviar">
              </div>
            </div>
</form>
<a href="formprocuraveiculo.php" target="_blank" class="blockquote-footer"> Pesquisa de Veiculos </a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
