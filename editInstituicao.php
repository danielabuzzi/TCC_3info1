<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lista Instituições</title>
  </head>
  <body>

  	<div class="container">
  		<form method="post" action="<?php echo site_url('InstituicoesController/update')?>/<?php echo $row->cnpj; ?>">
                            <div class="form-group">
                              <label for="cnpj" required >Cnpj</label>
                              <input type="text" class="form-control" name="cnpj" value="<?php echo $row->cnpj;?>" placeholder="XX.XXX.XXX/XXXX-XX">
                            </div>
                             <div class="form-group">
                              <label for="usuario">Usuario</label>
                              <input type="text" class="form-control" name="usuario" value="<?php echo $row->usuario; ?>" placeholder="@exemplo">
                            </div>
                             <div class="form-group">
                              <label for="nome">Nome</label>
                              <input type="text" class="form-control" name="nome" value="<?php echo $row->nome; ?>">
                            </div>
                            <div class="form-group">
                              <label for="tipo_inst">Tipo de Instituição</label>
                              <select class="form-control" name="tipo_inst" value="<?php echo $row->tipo_inst; ?>">
                                <option>Orfanato</option>
                                <option>Asilo</option>
                              </select>
                            </div>
                             <div class="form-group">
                              <label for="logradouro">Logradouro</label>
                              <input type="text" class="form-control" name="logradouro" value="<?php echo $row->logradouro; ?>" placeholder="Rua:XXXXXX N° XXX">
                            </div>
                             <div class="form-group">
                              <label for="cep">Cep</label>
                              <input type="text" class="form-control" name="cep" value="<?php echo $row->cep; ?>" placeholder="XXXXX-XXX">
                            </div>
                            <div class="form-group">
                              <label for="descri">Descrição</label>
                              <textarea class="form-control" name="descri" value="<?php echo $row->descri; ?>" rows="3"></textarea>
                            </div>
                            <!--colocar um proprio para numeros-->
                            <div class="form-group">
                              <label for="quant_abrig">Quantnameade de Abrigados</label>
                              <select class="form-control" name="quant_abrig" value="<?php echo $row->quant_abrig; ?>">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" placeholder="exemplo@tatat">
                            </div>
                            <div class="form-group">
                              <label for="nome_resp">Nome Responsavel</label>
                              <input type="text" class="form-control" name="nome_resp" value="<?php echo $row->nome_resp; ?>" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="cpf">Cpf</label>
                              <input type="text" class="form-control" name="cpf" value="<?php echo $row->cpf;?>" placeholder="">
                            </div>
                            <div class="form-group">
                              <label for="senha">Senha</label>
                              <input type="password" class="form-control" name="senha" value="<?php echo $row->senha; ?>" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary" value="save">Submit</button>
                          </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>