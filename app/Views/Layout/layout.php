<html>
<header>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link type=text/css rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
  <link type=text/css rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>">
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
    <div class="px-3 mb-4 bg-white">
      <div class="media d-flex align-items-center">
        <div class="media-body bg-white p-2">
          <i class="fas fa-user-alt fa-md text-success "></i> <span class="m-0 ml-2 text-center"><?= $session->get('nome'); ?></span>
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-4 small pb-4 mb-0">Menu</p>

    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="<?= route_to('/'); ?>" class="nav-link font-italic <?= url_is('/') ? 'btn-success text-white' : 'text-dark' ?>">
          <i class="fa fa-th-large mr-3 <?= url_is('/') ? 'text-white' : 'text-success' ?> fa-home"></i>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= route_to('myurls'); ?>" class="nav-link font-italic <?= url_is('getUrls') ? 'btn-success text-white' : 'text-dark' ?>">
          <i class="fa fa-address-card mr-3 <?= url_is('getUrls') ? 'text-white' : 'text-success' ?> fa-link"></i>
          Minhas URLs
        </a>
      </li>
      <li class="nav-item">
        <a href="<?= route_to('logout'); ?>" class="nav-link text-dark font-italic">
          <i class="fa fa-right-from-bracket mr-3 text-success fa-fw"></i>
          Sair
        </a>
      </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0"></p>
  </div>

  <!-- body content -->
  <?= $this->renderSection('content') ?>



  <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#029f5b" fill-opacity="1" d="M0,320L60,320C120,320,240,320,360,272C480,224,600,128,720,122.7C840,117,960,203,1080,240C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>

  <?= $this->renderSection('javascript') ?>
</html>

