<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('layout/head') ?>
</head>
<body class="hold-transition login-page">

<?php $this->load->view('layout/top_menu')?>
  
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('auth/register') ?>"><b>SISFO</b> ALUMNI</a>
  </div>
  <!-- /.login-logo -->

  <div class="login-box-body">
    <?php if ($isSet) { ?>
      <?php if ($alumni) { ?>
        <div class="form-group">
        <p class="login-box-msg">Anda terdaftar sebagai : </p> <br>
        <h4 class="login-box-msg"><b><?php echo $alumni->nama ?></b></h4> <br>
          <div class="row">
            <div class="col-xs-4 col-xs-push-4">
                <a href="<?php echo base_url('auth/register') ?>"><button type="submit" class="btn btn-success btn-block btn-flat">Kembali</button></a>
            </div>  
          </div>
        </div>
      <?php }else{ ?>
        <div class="form-group">
          <p class="login-box-msg">Anda belum terdaftar, untuk daftar silakan klik :</p><br>
          <div class="row">
            <div class="col-xs-4 col-xs-push-4">
                <a href="<?php echo base_url('auth/register') ?>"><button type="submit" class="btn btn-primary btn-block btn-flat">Daftar</button></a>
            </div>  
          </div>
        </div>
      <?php } ?>
    <?php } else { ?>
      <div class="form-group">
          <p class="login-box-msg"><b><?php echo $alumni ?></b></p><br>
          <div class="row">
            <div class="col-xs-4 col-xs-push-4">
                <a href="<?php echo base_url('auth/register') ?>"><button type="submit" class="btn btn-primary btn-block btn-flat">Kembali</button></a>
            </div>  
          </div>
        </div>
    <?php } ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php $this->load->view('layout/foot3'); ?>
</body>
</html>
