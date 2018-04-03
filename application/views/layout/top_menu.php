<header class="navbar navbar-default" style="border: 1px solid #000;">
    <div class="row">
      <div class="col-md-4" align="center">
        <div id="logo" class="pull-left">
          <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logoApp.png"></a>
        </div>
      </div>

      <div class="col-md-5" style="margin-left: 80px;">      
        <div style="float: left; padding-right: 50px; top: 3px; position: relative;">
          <a href="<?php echo base_url() ?>welcome"><h4>Home</h4></a>
        </div>
        <div style="float: left; padding-right: 50px; top: 3px; position: relative;">
          <a href="<?php echo base_url() ?>welcome/findAlumni"><h4>Cari Alumni</h4></a>
        </div>
        <div style="float: left; padding-right: 50px; top: 3px; position: relative;">
          <a href="<?php echo base_url() ?>welcome/statistic"><h4>Statistik</h4></a>
        </div>
      </div>

      <div class="col-md-2" style="margin-left: 30px;">
        <a href="<?php echo base_url('auth/login') ?>" style="float: left; padding-right: 50px; top: 3px; position: relative; width: 70px;"><h4>Login</h4></a>
        <a href="<?php echo base_url('auth/register') ?>" style="float: left; padding-right: 50px; top: 3px; position: relative; width: 70px;"><h4>Register</h4></a>
      </div>
    </div>
  </header>