<div class="titulo">Download</div>

<?php
session_start();

if ($_FILES['arquivo']) {


    $arquivos = $_SESSION['arquivos'] ?? [];
    $pastaUpload = __DIR__ . '/../UPLOADS/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if (move_uploaded_file($tmp, $arquivo)) {
        echo "<br>Arquivo valido e enviado com sucesso.";
        $arquivos[] = $nomeArquivo;
        $_SESSION['arquivos'] = $arquivos;
    } else {
        echo "<br>Falha ao enviar arquivo.";
    }
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>

</form>

<ul>
    <?php foreach ($_SESSION['arquivos']  as $arquivo) : ?>
        <?php if (strpos($arquivo, '.png') > 0) : ?>
            <li>
                <a href="./UPLOADS/<?= $arquivo ?>">
                    <img src="./UPLOADS/<?= $arquivo ?>" alt="<?= $arquivo ?>">
                </a>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>


<style>
    input,
    button {
        font-size: 1.2rem;
    }
</style>