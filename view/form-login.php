<form method="post" action="controller/login.php">
<?php echo  "<p class='text-center text-danger' >".$_SERVER['db_msg']."</p>" ?>
  <div class="form-group w-50 mx-auto">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu email com ninguém</small>
  </div>
  <div class="form-group w-50 mx-auto">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" name="senha" maxlength="8" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check text-center">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar de mim</label>
  </div>
  <div class="text-center">
  <button type="submit" name="logar" class="btn-lg w-50 btn-primary">Logar</button>
  </div>
