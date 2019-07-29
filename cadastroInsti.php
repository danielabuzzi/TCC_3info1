<?php 
include('cabecalho.php');
?>

<section class="parallax-container" data-parallax-img="images/cadastro.jpg">
  <div class="parallax-content breadcrumbs-custom context-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-9">
          <h2 class="breadcrumbs-custom-title" style="font-family: Poppins-Regular;>Cadastrar Instituição</h2>
            <ul class="breadcrumbs-custom-path">
               <li><a href="index.html">Inicio</a></li>
               <li class="active">Cadastrar Intituição</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Cadastro-->
      <section class="section section-lg bg-gray-1">
        <div class="container ">
            <form method="post" action="<?php echo site_url('InstituicoesController/create')?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="cnpj"  >CNPJ</label>
                              <input type="text" class="form-control" name="cnpj" id='cnpj' placeholder="XX.XXX.XXX/XXXX-XX" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                              <label for="usuario">Nome de Usuário</label>
                              <input type="text" class="form-control" name="usuario" placeholder="@exemplo" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome da Instituição</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="row" style="margin-top: 0px !important;">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="tipo_inst">Tipo de Instituição</label>
                              <select class="form-control" name="tipo_inst" required>
                                <option>Orfanato</option>
                                <option>Asilo</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label for="quant_abrig">Quantidade de Abrigados</label>
                            <input type="text" min="1" maxlength="4" class="form-control" name="quant_abrig" placeholder="XXXX"required >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="descri">Descrição da Instituição</label>
                        <textarea class="form-control" name="descri" rows="3"></textarea>
                    </div>
                    <div class="row" style="margin-top: 0px !important;">
                        <div class="col-md-4">
                            <div class="form-group">
                              <label for="cep">CEP</label>
                              <input type="text" class="form-control" name="cep" placeholder="XXXXX-XXX" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                              <label for="logradouro">Logradouro</label>
                              <input type="text" class="form-control" name="logradouro" placeholder="Rua:XXXXXX N° XXX"required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone da Instituição</label>
                        <input type="tel" class="form-control" name="telefone" placeholder="(XX)XXXXX-XXXX"required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="exemplo@tatat"required>
                    </div>
                    <div class="form-group">
                        <label for="nome_resp">Nome Responsável</label>
                        <input type="text" class="form-control" name="nome_resp" placeholder=""required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" name="cpf" placeholder="XXX.XXX.XXX-XX"required>
                    </div>
                    <div class="row" style="margin-top: 0px !important;">
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="senha">Senha</label>
                              <input type="password" class="form-control" name="senha" placeholder=""required>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                              <label for="senha">Confirmar Senha</label>
                              <input type="password" class="form-control" name="senha" placeholder=""required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
            </form>
          </div>
        </section>

<?php 
include('rodape.php');
?>