<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
</head>
<?php $message = $session = session()->getFlashdata('message'); ?>
<?php if (isset($message)) : ?>
  <script type="text/javascript">
    alert("<?php echo $message ?>");
  </script>
<?php endif; ?>

<?php if (session()->get('sucesso')) : ?>
  <script type="text/javascript">
    alert("<?= session()->get('sucesso') ?>");
  </script>
<?php endif; ?>




<body class="text-center">
  <?= form_open(route_to('loginpage'), ['class' => 'form-signin']) ?>

  <?php if (isset($error) && $error === true) : ?>
    <?php foreach ($errors as $error) : ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endforeach; ?>
  <?php endif; ?>

  <img src="<?= base_url('assets/img/login.png');?>">
  <label for="email" class="sr-only">Email address</label>
  <input type="text" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
  <label for="senha" class="sr-only">Password</label>
  <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
  <label>
    <a href="<?=route_to('forgotpage')?>" > Recuperação de Senha.
  </label>
  </div>
  <p>
    <a href="<?= route_to('registrarpage'); ?>">Não tem cadastro ?</a>
  </p>
  <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
  <?= form_close() ?>

</body>

</html>