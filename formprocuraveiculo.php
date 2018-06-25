<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Pesquisa por Veiculo</title>
  </head>
  <body>

    <div class="container">
      <div class="col-sm-8 offset-sm-2 " style="background:lightyellow">
        <h1 class="display-3 text-center"> Pesquisa por Veiculo </h1>
        <form class="form-inline justify-content-center" action="procuraveiculo.php" method="post" style="padding-top:15px" >
    <div class="form-group mb-2">
      <label for="" class="sr-only">Chassi</label>
      <input type="text" readonly class="form-control-plaintext" value="Numero do Chassi :">
    </div>
    <div class="form-group mx-sm-3 mb-2">
      <label for="chassi" class="sr-only">Chassi</label>
      <input type="text" class="form-control" name="chassi" placeholder=" numero do Chassi" required>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Pesquisar</button>
  </form>
  <a href="formcadastro.php" class="blockquote-footer"> Retornar ao Cadastro </a>
      </div>

    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
