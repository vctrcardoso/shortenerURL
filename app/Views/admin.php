<?= $this->extend('Layout/layout') ?>
<?= $this->section('content') ?>
<!-- body -->

<?php if (session()->get('success')) : ?>
  <script type="text/javascript">
    alert("<?= session()->get('success') ?>");
  </script>
<?php endif; ?>

<?= form_open(route_to('shorten')) ?>

<div class="page-content p-5" id="content" id="newConteudo">
  <div class="container">
    <div class="row justify-content-center">
      <div class="jumbotron bg-transparent text-center ">
        <h1 class="display-4 ">Encurtador de URL</h1>
        <div class="form-group">
          <input type="url" class="form-control" name="url">
        </div>
        <button class="btn btn-lg btn-success btn-block" href="<?= route_to('shorten') ?>">Enviar</button>
      </div>
    </div>
  </div>

</div>
</div>

<?= form_close() ?>

<?= $this->endSection() ?>
