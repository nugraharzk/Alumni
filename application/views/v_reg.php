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
    <p class="login-box-msg">Cek NIS-mu Disini! </p>

    <?=$this->session->flashdata('error')?>
    <?=form_open('auth/cekRegister')?>
      <div class="form-group has-feedback">
        <input name="nis" type="text" class="form-control" placeholder="Cek NIS">
        <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Cek!</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

      

    
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php $this->load->view('layout/foot3'); ?>
</body>
</html>
