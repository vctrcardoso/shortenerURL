<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Registrar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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



<body class="text-center">

    <?= form_open(route_to('sendpage'), ['class' => 'form-signin']) ?>


    <?php if (isset($error) && $error === true) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($sucess= session()->getFlashdata('sucess')) : ?>
       
            <div class="alert alert-success"><?= $sucess ?></div>

    <?php endif; ?>



    <img src="<?= base_url('assets/img/forgot.png');?>">



    <label for="email" class="sr-only">Email address</label>
    <input type="email" name="email" id="email" class="form-control" placeholder="Email " required autofocus>


    <p>
    
    <a href="<?= route_to('loginpage'); ?>">Login.</a>
    </p>

    <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>

    <?= form_close() ?>
</body>

</html>