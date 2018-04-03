<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/head') ?>
</head>
<body class="login-page">
    <?php $this->load->view('layout/top_menu'); ?>
    
    <div class="row">
      <div class="col-md-8 col-md-push-2" align="center">
        <h1>Daftar Alumni</h1><br>
        <table id="table_id" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>NIS</th>
              <th>Nama Alumni</th>
              <th>Kota Kelahiran</th>
              <th>Alamat</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>

    <script type="text/javascript">
      $(document).ready( function () {
          $('#table_id').DataTable({
            "ajax": {
              url: "<?php echo site_url("welcome/dataTable") ?>",
              type: 'GET'
            },
          });
      });
    </script>

    <?php $this->load->view('layout/foot3'); ?>

    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
  </body>
</html>
