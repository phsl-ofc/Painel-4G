<div class="container">
    <center>
        <img src="<?= VIEWS ?>/images/logo.png" width="200" height="228" class=""><br>

        Bem vindo(a) <a href="" data-toggle="modal" data-target="#perfil"><b><?=Functions::getUser('nome', $_SESSION['login'])?></b></a> !<br>

        <div class="row">
            <div class="col"><button class="mt-3 btn btn-info btn-block" data-toggle="modal" data-target="#modalconfig"><i class="fa-solid fa-gear"></i> Configurações</button></div>
            <div class="col"><a class="mt-3 btn btn-success btn-block" href="<?=LINK?>/update.php?download"><i class="fa-solid fa-download"></i> Baixar JSON</a></div>
        </div>
        <div class="row">
        <div class="col"><button style="color: white" class="mt-3 btn btn-warning btn-block" data-toggle="modal" data-target="#sms"><i class="fa-solid fa-comment-sms"></i> Alterar SMS</button></div>
            <div class="col"><a class="mt-3 btn btn-danger btn-block" href="?logout=yes"><i class="fa-solid fa-arrow-right-from-bracket"></i> Fazer logout</a></div>
        </div>

        <?php 
        if($_GET['logout']):
            session_destroy();
            header('location: /');
        endif;
        ?>

        <label class="mt-5" for=""><b><i class="fa-solid fa-arrow-right"></i> Selecione o servidor</b></label>

        <form action="" id="form_servidor" method="post">
            <div class="input-group mb-3">
                <select class="form-control" id="editar_servidor" name="editar_servidor">
                    <option value="">Selecione</option>
                    <?php foreach ($servers as $server) : ?>
                        <option value="<?= $server['id'] ?>"><?= $server['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
        </form>
        <div class="input-group-prepend">
            <a href="" class="btn btn-light" data-toggle="modal" data-target="#addservidor"><i class="fa fa-plus"></i></a>
        </div>
        </div>




        <label for=""><b><i class="fa-solid fa-arrow-right"></i> Selecione a payload</b></label>

        <form action="" id="form_payload" method="post">
            <div class="input-group mb-3">
                <select id="editar_payload" class="form-control" name="editar_payload">
                    <option value="">Selecione</option>
                    <?php foreach ($payloads as $payload) : ?>
                        <option value="<?= $payload['id'] ?>"><?= $payload['Name'] ?></option>
                    <?php endforeach; ?>
                </select>
        </form>
        <div class="input-group-prepend">
            <a href="" class="btn btn-light" data-toggle="modal" data-target="#addpayload"><i class="fa fa-plus"></i></a>
        </div>
        </div>



        <label for=""><b><i class="fa-solid fa-arrow-right"></i> Selecione a porta</b></label>

        <form action="" id="form_porta" method="post">
            <div class="input-group mb-3">
                <select class="form-control" id="editar_porta" name="editar_porta">
                    <option value="">Selecione</option>
                    <?php foreach ($ports as $port) : ?>
                        <option value="<?= $port['id'] ?>"><?= $port['Porta'] ?></option>
                    <?php endforeach; ?>
                </select>
        </form>
        <div class="input-group-prepend">
            <a href="" class="btn btn-light" data-toggle="modal" data-target="#addporta"><i class="fa fa-plus"></i></a>
        </div>
        </div>


    </center>

</div>

<?php

include_once 'modais.php';

if (isset($_POST['editar_payload'])) {
    echo "<script>$('#editarpayload').modal('show')</script>";
} else if (isset($_POST['editar_servidor'])) {
    echo "<script>$('#editarservidor').modal('show')</script>";
} else if (isset($_POST['editar_porta'])) {
    echo "<script>$('#editarporta').modal('show')</script>";
}

?>

<script>
    $('#editar_payload').on('change', function() {
        document.getElementById("form_payload").submit();
    })
    $('#editar_servidor').on('change', function() {
        document.getElementById("form_servidor").submit();
    })
    $('#editar_porta').on('change', function() {
        document.getElementById("form_porta").submit();
    })
</script>