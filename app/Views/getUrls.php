<?= $this->extend('Layout/layout') ?>
<?= $this->section('content') ?>
<!-- body -->
<?php if (session()->get('success')) : ?>
  <script type="text/javascript">
    alert("<?= session()->get('success') ?>");
  </script>
<?php endif; ?>

<div class="page-content p-5" id="content" id="newConteudo">
  
  <div class="container">
    <div class="row justify-content-center">
      <table id="myTable" class="table">
        <thead>
          <tr>
            <th>URL Encurtada</th>
            <th>URL Original</th>
            <th>Data de criação</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>

    <?= $this->endSection() ?>
    <?= $this->section('javascript') ?>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />    <script>
      $(document).ready(function() {
        $('#myTable').DataTable({
          ajax: {
            url: "<?= route_to('getmyurls'); ?>",
            dataSrc: ""
          },
          columns: [{
              data: 'url_short',
              render: function(data) {
                var url = '<?= base_url('url/') ?>' + data;
                return '<a href="' + url + '">' + url + '</a>';
              }
            },
            {
              data: 'url_orig',
              render: function(data) {
                return '<a href="' + data + '">' + data + '</a>';
              }
            },
            {
              data: 'created_at'
            },
          ],
          columnDefs: [{
            targets: 3,
            data: function(row, type, data, meta) {
              var url = '<?= base_url('url/') ?>' + row.url_short;
              return '<a href="' + url + '"><i class="fa fa-trash text-success text-center d-flex justify-content-center"></i></a>';
            }
          }]
        });
      });
    </script>

    <?= $this->endSection() ?>