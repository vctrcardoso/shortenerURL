<html>
<header>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link type=text/css rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
  <link type=text/css rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.23/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.23/datatables.min.js"></script>

  <script src="<?= base_url("assets/js/bootstrap.js") ?>"></script>
  <script src="<?= base_url("assets/js/side.js") ?>"></script>
  <script src="<?= base_url("assets/js/bootstrap.bundle.js") ?>"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $session = session(); ?>
</header>

<body>




  <!-- navbar -->
  <div class="container-fluid">
    <div class="row justify-content-start">
      <nav class="navbar navbar-light navbar-light col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
        <a class="navbar-brand" href="#">

          <img src="<?= base_url("assets/img/logo2.png"); ?>" alt="ENCURTA!URL" loading="lazy" id="sidebarCollapse">


        </a>

      </nav>
    </div>
  </div>
  <!-- menu lateral -->



  <div class="vertical-nav bg-white " id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <div class="media-body">
          <h4 class="m-0 text-center"><?= $session->get('nome'); ?></h4>
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-4 small pb-4 mb-0">Main</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="admin" id="conteudo" class="nav-link text-dark font-italic bg-light">
          <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="#" id="newConteudo" class="nav-link text-dark font-italic">
          <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
          Minhas URLs
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= route_to('logout'); ?>" class="nav-link text-dark font-italic">
          <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
          Sair
        </a>
      </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0"></p>
  </div>


  <!-- body -->






  <div class="page-content p-5" id="content" id="newConteudo">
    <div class="container">
      <div class="row justify-content-center">


        <div class="container">
          <div class="page-header">
          </div>
          <div class="row">


          </div>
        </div>
        <div class="row">
          <div class="main-content">
            <section class="section">
              <div class="section-body">
                <!-- add content here -->
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4>Minhas Urls</h4>
                      </div>



                      <div class="table-responsive">
                      <?php if ($urls) : ?>
                        <table class="table table-striped data-table">
                          <thead>
                            <tr>

                              <th class="text-center">Url Original</th>
                              <th class="text-center">Url Encurtada</th>
                              <th class="text-center">Data da criação</th>
                              <th class="text-center">Action</th>
                            </tr>
                         
                       
                            
                            


                                <?php foreach ($urls as $url) : ?>

                                <tr>
                                  <td><?php echo $url['url_orig']; ?> </td>
                                  <td> <a href="<?= site_url('url/' . $url['url_short']) ?>" target="_blank"><?= site_url('url/' . $url['url_short']) ?> </td>
                                  <td><?php echo $url['created_at']; ?> </td>

                                  <td class="text-center">

                                    <a href="#" class="btn btn-danger">Excluir</a>
                                  </td>

                                  </tr>

                                <?php endforeach; ?>
                             
                      
                        </table>
                        
                      <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>



    </div>
    <footer>
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#029f5b" fill-opacity="1" d="M0,320L60,320C120,320,240,320,360,272C480,224,600,128,720,122.7C840,117,960,203,1080,240C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
      </svg>

    </footer>


</html>