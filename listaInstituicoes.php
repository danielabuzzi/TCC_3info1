<?php 
include('cabecalho.php');
?>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/icon/css/fontawesome.min.css">
 <section class="parallax-container" data-parallax-img="images/capa1.jpg">
    <div class="parallax-content breadcrumbs-custom context-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-9">
              <h2 class="breadcrumbs-custom-title" style="font-family: Poppins-Regular;">Lista de Instituições</h2>
              <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Inicio</a></li>
                  <li class="active">Lista de Intituições</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
</section>
<div id="list" class="row">
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>CNPJ</th>
                      <th  >Usuário</th>
                      <th  >Nome</th>
                      <th  >Tipo Instituição</th>
                      <th  >Logradouro</th>
                      <th  >CEP</th>
                      <th  >Telefone</th>
                      <th  >Descrição</th>
                      <th  >Quantidade de abrigados</th>
                      <th  >Email</th>
                      <th  >Nome Responsável</th>
                      <th  >CPF</th>
                      <th  >Senha</th>
                    <th class="actions">Ações</th>
                 </tr>
            </thead>
            <tbody>
              <?php foreach($result as $row) {?>
              <tr>
                <th><?php echo $row->cnpj;?></th>
                <td><?php echo $row->usuario;?></td>
                <td><?php echo $row->nome;?></td>
                <td><?php echo $row->tipo_inst;?></td>
                <td><?php echo $row->logradouro;?></td>
                <td><?php echo $row->cep;?></td>
                <td><?php echo $row->telefone;?></td>
                <td><?php echo $row->descri;?></td>
                <td><?php echo $row->quant_abrig;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->nome_resp;?></td>
                <td><?php echo $row->cpf;?></td>
                <td><?php echo $row->senha;?></td>
                <td class="actions">
                        <a class="btn btn-warning btn-xs" href="<?php echo site_url('InstituicoesController/editar/'.$row->cnpj);?>">Editar</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo site_url('InstituicoesController/delete/'.$row->cnpj);?>" onclick="return confirm('Deseja realmente exluir esta Instituição?');">Excluir</a>
                    </td>
              </tr>
              <?php } ?>
            </tbody>
         </table>
 
     </div>
 </div> 
<!--<div class="col-md-12" style="margin-top: 40px;">
<table class="table table-hover" style="">
  <thead class="thead-dark">
    <tr>
      <th  scope="col">CNPJ</th>
      <th  scope="col">Usuário</th>
      <th  scope="col">Nome</th>
      <th  scope="col">Tipo Instituição</th>
      <th  scope="col">Logradouro</th>
      <th  scope="col">CEP</th>
      <th  scope="col">Telefone</th>
      <th  scope="col">Descrição</th>
      <th  scope="col">Quantidade de abrigados</th>
      <th  scope="col">Email</th>
      <th  scope="col">Nome Responsável</th>
      <th  scope="col">CPF</th>
      <th  scope="col">Senha</th>
      <th  scope="col">açoes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($result as $row) {?>
              <tr>
                <th scope="row"><?php echo $row->cnpj;?></th>
                <td><?php echo $row->usuario;?></td>
                <td><?php echo $row->nome;?></td>
                <td><?php echo $row->tipo_inst;?></td>
                <td><?php echo $row->logradouro;?></td>
                <td><?php echo $row->cep;?></td>
                <td><?php echo $row->descri;?></td>
                <td><?php echo $row->quant_abrig;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->nome_resp;?></td>
                <td><?php echo $row->cpf;?></td>
                <td><?php echo $row->senha;?></td>
                <td><a href="<?php echo site_url('InstituicoesController/Editar');?>/<?php echo $row->cnpj;?>">Editar</a>  | <a href="<?php echo site_url('InstituicoesController/Delete');?>/<?php echo $row->cnpj;?>">Deletar</a></td>

              </tr>
              <?php } ?>
            </tbody>
      </table>

            
</div>
-->
<?php 
include('rodape.php');
?>