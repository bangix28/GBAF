<?php $title = 'Connexion au site du GBAF'; ?>

<?php ob_start(); ?>
<form method="POST" action="index.php?access!connect">
        <div class="form-group row">
        <div class="form-group offset-4 col-5 text-center">
            <label for="username">Pseudo</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Pseudo">
        </div>
        <div class="form-group offset-4 col-5 text-center">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
            <div class="row">
        <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
            <div class="col-12">
                <p class="lead text-center"><a href='index.php?access=register'>S'inscrire !</a></p>
            </div>
        </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>

