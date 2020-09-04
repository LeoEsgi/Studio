<!DOCTYPE html>
<html lang="fr">

<!-- login planyo = EzStud  ; mdp = AGS1587965 !-->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="studios d'enregistrement , Enregistrement - Mixage - Mastering - Conseils de pros sous réservation">
  <meta name="author" content="Easy Studio Enterprise">

  <title>Easy Studio - Enregistrement - Mixage - Mastering - Conseils de pros</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <link href="css/calendar.css" rel="stylesheet">

  
  <link rel="icon" href="images/icon.ico" />

</head>


<body  style="background-color:black;color:white;">
<div style="text-align:center;">
  <a href="index.php">
  <img class="img-fluid rounded mb-4" src="images/logo.jpg" alt="studio enregistrement">
  </a>
</div>
  <?php
  if(!isset($_GET['studio'])){
	  

    ?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div onClick="window.location.href='?studio=1';" class="carousel-item active" style="background: url(images/studio2.jpg);cursor:pointer">
          <div class="carousel-caption d-none d-md-block">
            <h3>Studio 1</h3>
            <p>Profitez de nos studios neufs à la pointe de la technologie.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div onClick="window.location.href='?studio=2';" class="carousel-item" style="background-image: url(images/studio2.jpg);cursor:pointer">
          <div class="carousel-caption d-none d-md-block">
            <h3>Studio 2</h3>
            <p>Profitez de nos studios neufs à la pointe de la technologie.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div onClick="window.location.href='?studio=3';" class="carousel-item" style="background-image: url(images/studio1.jpg);cursor:pointer">
          <div class="carousel-caption d-none d-md-block">
            <h3>Studio 3</h3>
            <p>Profitez de nos studios neufs à la pointe de la technologie.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <br>

   <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">A propos
      <small>de nous</small>
    </h1>


    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="images/studio2.jpg" alt="studio enregistrement">
      </div>
      <div class="col-lg-6">
        <h2>Easy Studio</h2>
        <p>Vous rêvez depuis longtemp d'enregistrer un son , une mixtape ou même un album, Easy Studio vous propose des tarif attractifs avec des professionels du son dans des locaux a la pointe de la technologie !  !</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
      </div>
    </div>
    <!-- /.row -->

  </br>
</br>
    <!-- Team Members -->
    <h2>Notre Team</h2>

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/inge.jpg" alt="ceo easy studio">
          <div class="card-body">
            <h4 class="card-title">Ingé 1</h4>
            <h6 class="card-subtitle mb-2 text-muted">Ingénieur du son</h6>
            <p class="card-text">Ingé 1 est un ingénieur du son professionel avec beaucoup d'experience</p>
          </div>
          <div class="card-footer">
            <a href="#">Ingé1@hotmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/inge.jpg" alt="ingenieur du son">
          <div class="card-body">
            <h4 class="card-title">Ingé 2</h4>
            <h6 class="card-subtitle mb-2 text-muted">Ingénieur du son</h6>
            <p class="card-text">Ingé 2 est un ingénieur du son professionel avec beaucoup d'experience</p>
          </div>
          <div class="card-footer">
            <a href="#">Ingé2@hotmail.com</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/inge.jpg" alt="ingenieur du son">
          <div class="card-body">
            <h4 class="card-title">Ingé 3</h4>
            <h6 class="card-subtitle mb-2 text-muted">Ingénieur du son</h6>
            <p class="card-text">Ingé 3 est un ingénieur du son professionel avec beaucoup d'experience</p>
          </div>
          <div class="card-footer">
            <a href="#">Ingé3@hotmail.com</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

  </br>
</br>

    <!-- Our Customers -->
    <h2>Nos Artistes</h2>
    <div class="row">
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/ninho.jpg" alt="ninho">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/niska.png" alt="niska">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/booba.jpg" alt="booba">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/kalash.png" alt="kalash">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/plk.png" alt="plk">
      </div>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid" src="images/vald.jpg" alt="vald">
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php } else { 
  
  $studio = $_GET['studio'];
  
  ?>
  <div style="text-align:center">
    <p class="calendar-preview"> <iframe id="calp_1726892894" style="width: 1140px; height: 267px; overflow: visible;" class="calprev_iframe caltype_4" scrolling="no" frameborder="0" src="https://www.planyo.com/embed-calendar.php?resource_id=165988&amp;calendar=34982&amp;style=week-grid&amp;days=7&amp;feedback_url=https%3A%2F%2Fwww.planyo.com%2Fbooking.php%3Fcalendar%3D34982&amp;modver=2.7&amp;background=none&amp;custom-language=EN&amp;ifr=calp_1726892894&amp;usage=resform&amp;"></iframe> </p>
      <p class="resource-footer">
        <a href="https://www.planyo.com/booking.php?calendar=34982&amp;feedback_url=https%3A%2F%2Fwww.planyo.com%2Fbooking.php%3Fcalendar%3D34982&amp;mode=reserve&amp;planyo_lang=en&amp;prefill=true&amp;resource_id=165988&amp;" role="button" class="btn btn-primary btn-lg">Make reservation</a>
    </p>
  </div>


  <?php } ?>



  <!-- Footer -->
  <footer class="py-4 bg-dark text-white-50">


    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Easy Studio 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
<script type='text/javascript' src='https://www.planyo.com/as.js'></script>
<iframe id='calp_2498424361' style='width:640px;height:641px;' class='calprev_iframe caltype_4' scrolling='no' frameborder='0' src='https://www.planyo.com/embed-calendar.php?resource_id=178214&calendar=56046&style=week-grid&days=21&custom-language=FR&ifr=calp_2498424361&find_first_av=1'></iframe>
</html>
