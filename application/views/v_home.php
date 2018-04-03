<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('layout/head') ?>
  </head>
  <?php $this->load->view('layout/top_menu'); ?>
  <body class="login-page">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 500px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?= base_url('assets/img/photo1.png') ?>" alt="Los Angeles" style="height: 500px; width: 100%;">
          <div class="carousel-caption">
            <h3>IMAGES 1</h3>
            <p>Subtitle Here 1 ...</p>
          </div>
        </div>

        <div class="item">
          <img src="<?= base_url('assets/img/photo2.png') ?>" alt="Chicago" style="height: 500px; width: 100%;">
          <div class="carousel-caption">
            <h3>IMAGES 2</h3>
            <p>Subtitle Here 2 ...</p>
          </div>
        </div>

        <div class="item">
          <img src="<?= base_url('assets/img/photo3.jpg') ?>" alt="New York" style="height: 500px; width: 100%;">
          <div class="carousel-caption">
            <h3>IMAGES 3</h3>
            <p>Subtitle Here 3 ...</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <?php $this->load->view('layout/foot3'); ?>

    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 2000
      });
    </script>
    
  </body>
</html>