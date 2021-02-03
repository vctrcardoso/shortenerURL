<html>
<head>
  <?php echo $this->include('header'); ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <link type = text/css rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
  <script src="<?=base_url("assets/js/bootstrap.js");?>"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $session = session();?>
</head>

<body>
  <script>
$("login").click(function(){
  alert("The paragraph was clicked.");
});
</script>

<?php if (session()->get('sucess')) : ?>
  <script type="text/javascript">
    alert("<?= session()->get('sucess') ?>");
  </script>
<?php endif; ?>

<div class="jumbotron  bg-transparent text-center">
  <h1 class="display-4">Encurta!URL</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class=" btn btn-success btn-lg " href="<?= route_to('loginpage');?>" role="button">Login</a>
</div>


</body>
<?php echo $this->include('footer'); ?>
</html>