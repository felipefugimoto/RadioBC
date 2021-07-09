<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://webness.com.br/radiobc/wp-content/uploads/2020/12/icon2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="css/cadastros.css">
    <title>Promoções - Radio Camboriu FM </title>
  </head>
  <body>
    <h2 class="titulo-h2">Cadastros das Promoções</h2>
    <div class="container container-md cadastro-form">
      <form action="cadastros.php" method="post">
        <div class="row">
        
            <div class="row g-2">
            <div class="col-md">
              <div class=" input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Promoção</span>
              <input type="text" class="form-control" placeholder="Nome da Promoção" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class="col-md">
              <div class=" input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Descrição</span>
              <input type="text" class="form-control" placeholder="Descreva sobre a promoção" aria-label="Username" aria-describedby="basic-addon1">
              </div>
            </div>
            <!---->
            <div class="row">
              <div class="row g-2">
                <div class="col-md">
                  <div class=" input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Começo do Promoção</span>
                  <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="col-md">
                  <div class=" input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">Fim da Promoção</span>
                  <input type="date" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="row g-2">
                <div class="col-md">
                  <div class=" input-group mb-3">
                      <input type="file" class="form-control" placeholder="JPG, JPEG e PNG"  aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div>
                
            </div>
                      
        </div>
        <button type="button" class="btn btn-outline-success btn-prom">Gerar Promoção</button>
      </form>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>