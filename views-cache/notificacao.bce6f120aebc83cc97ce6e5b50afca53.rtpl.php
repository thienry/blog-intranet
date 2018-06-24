<?php if(!class_exists('Rain\Tpl')){exit;}?><body id="top" class="grey lighten-4" >
<!--Main Navigation-->
<header>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

          <!-- Brand -->
          <a class="navbar-brand" href="/">
              <strong class="blue-text">Intranet</strong>
          </a>

          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                  <a class="nav-link" href="/blog">Blog</a>
              </li>
              <li class="nav-item disabled">
                <a class="nav-link js-scroll-trigger" href="#ramais"> Ramais </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="//ecm/" target="_blank">Documentos Institucionais</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ferramentas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: #8d1d2e;">
                  <a class="dropdown-item" href="http://helpdesk" target="_blank">Helpdesk</a>
                  <a class="dropdown-item" href="//webmail" target="_blank" >Webmail</a>
                  <a class="dropdown-item" href="//ebem.dinamus.net" target="_blank">Dinamus</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/notificacao">Notificação</a>
              </li>
            </ul>

              <!-- Right -->
              <ul class="navbar-nav nav-flex-icons">
                  
                  <li class="nav-item">
                      <a href="http://jaymedafonte.com.br" class="nav-link border border-light rounded waves-effect" target="_blank">
                          <i class="fa fa-medkit mr-2"></i>Jayme da Fonte
                        </a>
                  </li>
              </ul>

          </div>


      </div>
  </nav>
  <!-- Navbar -->

</header>
<!--Main Navigation-->

<main class="mt-5 pt-5">

<div class="container">
  <?php if( $success == 1 ){ ?>

  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Sua notificacao foi enviada com <strong>suscesso</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    </div>
  </div>
  <?php } ?>

  <div class="row">
    <div class="col-md-10">
      <div class="card wow bounceInUp">
        <div class="card-header" style="background-color: #8d1d2e;"> 
          <h3 style="text-align: center; color: aliceblue;">Formulário de Notificação<br>Hospital Jayme da Fonte</h3>
        </div>

        <div class="card-body register-card-body">
          <p class="login-box-msg">Preencha o formulario abaixo para realizar a notificacao*</p>

          <hr>

        <form role="form" action="/notificacao" method="post">
        
          <div class="form-group">
            <label for="nome">Nome do Paciente*: </label>
            <input type="text" class="form-control" placeholder="Digite o nome do paciente" id="nome" name="nome_pac" required>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dt_nasc">Data de Nasc.*:</label>
              <input type="text" class="form-control" id="dt_nasc" name="dt_nasc" data-lang="pt" data-format="j/m/Y" data-large-mode="true" data-large-default="true" data-min-year="1900" placeholder="" required>
            </div>
            <div class="form-group col-md-6">
              <label for="prontuario">Numero de Prontuario*:</label>
              <input type="number" class="form-control" id="prontuario" name="prontuario" placeholder="Digite o numero do prontuario" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="registro">Registro*:</label>
              <input type="number" class="form-control" id="registro" name="registro" placeholder="Digite o numero do registro" required>
            </div>
            <div class="form-group col-md-6">
              <label for="dt_rel">Data do Relato*:</label>
              <input type="text" class="form-control" id="dt_rel" name="dt_relato" data-lang="pt" data-format="j/m/Y" data-large-mode="true" data-large-default="true" data-min-year="1900" placeholder="" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="dt_oco">Data Ocorrencia*:</label>
              <input type="text" class="form-control" id="dt_oco" name="dt_oco" data-lang="pt" data-format="j/m/Y" data-large-mode="true" data-large-default="true" data-min-year="1900" placeholder="" required>
            </div>
            <div class="form-group col-md-6">
              <label for="hr_oco">Hora Ocorrencia*:</label>
              <input type="time" class="form-control" id="hr_oco" name="hr_oco" placeholder="" required>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="st_cante">Setor Notificante*: </label>
                <input type="text" class="form-control" placeholder="Informe o setor notificante" id="st_cante" name="st_cante" required>
            </div>
            <div class="form-group col-md-6">
                <label for="st_cado">Setor Notificado*: </label>
                <input type="text" class="form-control" placeholder="Informe o setor que sera notificado" id="st_cado" name="st_cado" required>
            </div>
          </div>

          <div class="form-group">
            <label for="desc">Descrição da ocorrência*: </label>
            <textarea id="desc" name="descricao" class="form-control" placeholder="Descreva a ocorrencia com todos os detalhes" rows="5" required ></textarea>
          </div>
        
          <!-- /.col -->
          <div class="">
            <button type="submit" class="btn btn-primary btn-block">Enviar Notificação</button>
          </div>
          <!-- /.col -->
        
      </form>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
    </div>
  </div>
</div>

<hr class="my-5">

<!--Section: Not enough-->
<div id="carouselExampleSlidesOnly" class="carousel slide wow slideInLeft" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <!-- First slide -->
        <div class="carousel-item">
            <!--Grid row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/res/site/img/jayme-da-fonte-desde.png" class="img-fluid px-4" alt="jayme da fonte - logo" style="max-height: 60px">
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/res/site/img/qualidade.png" class="img-fluid px-4" alt="" style="max-height: 60px">
                </div>
                <!--/Second column-->
                 <!--Third column-->
                 <div class="col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/res/site/img/logo_acreditacao_qual.png" class="img-fluid px-4" alt="" style="max-height: 60px">
                </div>
                <!--/Third column-->
            </div>
            <!--/Grid row-->
        </div>
        <!-- First slide -->

        <!-- Second slide -->
        <div class="carousel-item active carousel-item-left">
            <!--Grid row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/res/site/img/jayme-da-fonte-desde.png" class="img-fluid px-4" alt="jayme da fonte - logo" style="max-height: 60px">
                </div>
                <!--/First column-->

                <!--Second column-->
                <div class="col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/res/site/img/qualidade.png" class="img-fluid px-4" alt="" style="max-height: 60px">
                </div>
                <!--/Second column-->

                <!--Third column-->
                <div class="col-md-4 col-sm-4 d-flex align-items-center justify-content-center">
                    <img src="/res/site/img/logo_acreditacao_qual.png" class="img-fluid px-4" alt="" style="max-height: 60px">
                </div>
                <!--/Third column-->

            </div>
            <!--/Grid row-->
        </div>
        <!-- Second slide -->
    </div>
</div>
<!-- /.register-box -->
</main>