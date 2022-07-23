<div class="container">
    <center>
        <img src="<?= VIEWS ?>/images/logo.png" width="200" height="228" class=""><br>
    </center>
		
        <form action="?page=login" method="post">
            <label for=""><i class="fa fa-user"></i> Usuário</label>
            <input type="text" name="user" class="form-control">
            <label for="" class="mt-2"><i class="fa fa-lock"></i> Senha</label>
            <input type="password" name="pass" class="form-control">
            <button type="submit" class="mt-2 btn btn-primary btn-block">Entrar</button>
        </form>
		