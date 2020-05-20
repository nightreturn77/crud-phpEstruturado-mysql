<form method="post" action="controller/cadastrar.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" name="pass" minlength="8"  class="form-control" required id="inputPassword4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" name="nome" maxlength="30" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" required class="form-control" >
    </div>
    <div class="form-group col-md-6">
      <label> Data de Nascimento</label>
      <input type="date" name="nascimento" required class="form-control">
  </div>
  <div class="form-group col-md-6">
      <select name="sexo" required class="form-control" >Sexo
     <option>Masculino</option>
     <option>Feminino</option>
     </select>
  </div>
  </div>
  <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
</form>