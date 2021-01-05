<div class="titulo">Upload</div>

<?php

print_r($_FILES);
/* 
Array
(
    [arquivo] => Array
        (
            [name] => Link_download.txt
            [type] => text/plain
            [tmp_name] => /tmp/phpiUy6l1
            [error] => 0
            [size] => 272
        )
)
*/

if ($_FILES && $_FILES['arquivo']) {
    $pastaUpload = '/var/www/html/estudos/udemy_php7/UPLOADS/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo enviado com sucesso!";
    } else {
        echo "<br>Erro no Upload do Arquivo!";
    }
}

?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="file">
    <button>Enviar</button>
</form>

<style>
    input,
    button {
        font-size: 1.2rem;
    }
</style>