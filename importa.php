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
        <form method="post" enctype="multipart/form-data" action="importa.php">
        Selecione uma imagem: <input name="arquivo" type="file" />
        <br />
        <input type="submit" value="Salvar" />
        </form>
        <?php
            if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
                echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
                echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
                echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
                echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
             
                $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
                $nome = $_FILES[ 'arquivo' ][ 'name' ];
             
                // Pega a extensão
                $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
             
                // Converte a extensão para minúsculo
                $extensao = strtolower ( $extensao );
             
                // Somente imagens, .jpg;.jpeg;.gif;.png
                // Aqui eu enfileiro as extensões permitidas e separo por ';'
                // Isso serve apenas para eu poder pesquisar dentro desta String
                if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                    $novoNome = uniqid ( time () ) . '.' . $extensao;
             
                    // Concatena a pasta com o nome
                    $destino = 'imagens / ' . $novoNome;
             
                    // tenta mover o arquivo para o destino
                    if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                        echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                        echo ' < img src = "' . $destino . '" />';
                    }
                    else{echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';}
                }
                else{ echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';}
            }
            else{echo 'Você não enviou nenhum arquivo!';}
        
        ?>

        
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