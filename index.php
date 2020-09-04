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
  <img class="img-fluid rounded mb-4" src="images/logo.png" alt="studio enregistrement">
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
        <div onClick="window.location.href='?studio=1';" class="carousel-item active" style="background: url(images/studio3.jpg);cursor:pointer">
          <div class="carousel-caption d-none d-md-block">
            <h3>Studio 1</h3>
            <p>Profitez de nos studios entierements neufs à la pointe de la technologie.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div onClick="window.location.href='?studio=2';" class="carousel-item" style="background-image: url(images/studio2.jpg);cursor:pointer">
          <div class="carousel-caption d-none d-md-block">
            <h3>Studio 2</h3>
            <p>Profitez de nos studios entierements neufs à la pointe de la technologie.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div onClick="window.location.href='?studio=3';" class="carousel-item" style="background-image: url(images/studio1.jpg);cursor:pointer">
          <div class="carousel-caption d-none d-md-block">
            <h3>Studio 3</h3>
            <p>Profitez de nos studios entierements neufs à la pointe de la technologie.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Revenir</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </header>

  <br>
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
            <h6 class="card-subtitle mb-2 text-muted">Ingénieur du son studio 1</h6>
            <p class="card-text">Nos ingénieurs sortent des meilleurs écoles du son pour vous apporter leur très grande expérience</p>
          </div>
          <div class="card-footer">
            <a href="?studio=1">Réserver avec lui</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/inge.jpg" alt="ingenieur du son">
          <div class="card-body">
            <h4 class="card-title">Ingé 2</h4>
            <h6 class="card-subtitle mb-2 text-muted">Ingénieur du son studio 2</h6>
            <p class="card-text">Nos ingénieurs sortent des meilleurs écoles du son pour vous apporter leur très grande expérience</p>
          </div>
          <div class="card-footer">
            <a href="?studio=2">Réserver avec lui</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center">
          <img class="card-img-top" src="images/inge.jpg" alt="ingenieur du son">
          <div class="card-body">
            <h4 class="card-title">Ingé 3</h4>
            <h6 class="card-subtitle mb-2 text-muted">Ingénieur du son studio 3</h6>
            <p class="card-text">Nos ingénieurs sortent des meilleurs écoles du son pour vous apporter leur très grande expérience</p>
          </div>
          <div class="card-footer">
            <a href="?studio=3">Réserver avec lui</a>
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
      <div class="col-lg-3 col-sm-4 mb-4">
        <img class="img-fluid" src="images/ninho.jpg" alt="ninho">
		<p>Ninho qui doit sa réussite à nos studios et notre expérience<p>
      </div>
      <div class="col-lg-3 col-sm-4 mb-4">
        <img class="img-fluid" src="images/niska.png" alt="niska">
		<p>Niska qui vendait des tapis avant de nous rencontrer<p>
      </div>
      <div class="col-lg-3 col-sm-4 mb-4">
        <img class="img-fluid" src="images/booba.jpg" alt="booba">
		<p>Booba un ptit de la rue qu'on a poussé vers le succès<p>
      </div>
      <div class="col-lg-3 col-sm-4 mb-4">
        <img class="img-fluid" src="images/kalash.png" alt="kalash">
		<p>Kalash crimi ptit albinos qui nous doit tous<p>
      </div>
      <div class="col-lg-3 col-sm-4 mb-4">
        <img class="img-fluid" src="images/plk.png" alt="plk">
		<p>Plk qui doit sa réussite à nos studios et notre expérience<p>
      </div>
      <div class="col-lg-3 col-sm-4 mb-4">
        <img class="img-fluid" src="images/vald.jpg" alt="vald">
		<p>Vald qui doit sa réussite à nos studios et notre expérience<p>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <br>
  <br>
  <!-- /.container -->

  <?php } else { 
  
  $studio = $_GET['studio'];
  ?>


  <div style="background-color:white">
<script type="text/javascript">
// change the following values to match your settings
var planyo_site_id='56046'; // ID of your planyo site
var planyo_default_mode='resource_list'; // one of: 'resource_list' (displays list of resources with photos, descriptions etc.), 'search' (displays the search box), 'empty' (will not display anything by default but will require you to either pass the resource ID as parameter in the URL (resource_id) or add an external search box or calendar preview), 'upcoming_availability' (displays a quick list of all upcoming availability)
var extra_search_fields=''; // comma-separated extra fields in the search box, e.g. 'Number of persons'. You first need to define them in settings/custom resource properties
var sort_fields=''; // comma-separated sort fields for the search box -- a single field will hide the sort dropdown box
var planyo_resource_ordering='name'; // optional sort criterium for resource list
var planyo_include_js_library=true; // set this to true if jQuery (required) should be included by this plugin, or false if your website already includes jQuery
var planyo_attribs=''; // optionally you can insert the attribute string here
var planyo_resource_id=''; // optional: ID of the resource being reserved
var planyo_language='FR'; // you can optionally change the language here, e.g. 'FR' or 'ES' or pass the languge in the 'lang' parameter. 'AUTO' means the language is detected automatically
var ulap_script="jsonp"; // leave this as "jsonp" for a plain-javascript implementation --OR-- if using a php/asp.net/java implementation, one of the ULAP scripts: "ulap.php", "ulap.aspx", "ulap.jsp", in such case you must download the advanced integration Planyo files from http://www.planyo.com/Plugins/PlanyoFiles/planyo-files.zip
var planyo_use_https=true; // set this to true if embedding planyo on a secure website (SSL)
var planyo_files_location=(planyo_use_https ? "https" : "http") + '://www.planyo.com/Plugins/PlanyoFiles'; // relative or absolute directory where the planyo files are kept (leave unchanged for plain-javascript implementation, otherwise e.g. '/planyo-files' when using the ULAP scripts)
var empty_mode=false; // should be always set to false
</script>

<script type="text/javascript">
function get_param (name) {name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");var regexS = "[\\?&]"+name+"=([^&#]*)";var regex = new RegExp (regexS);var results = regex.exec (window.location.href);if (results == null) return null;else  return results[1];}
if (get_param('mode'))planyo_embed_mode = get_param('mode');
function get_full_planyo_file_path(name) {if(planyo_files_location.length==0||planyo_files_location.lastIndexOf('/')==planyo_files_location.length-1)return planyo_files_location+name; else return planyo_files_location+'/'+name;}
</script>
<br>
  <br>
<link rel='stylesheet' href='https://www.planyo.com/schemes/?calendar=56046&detect_mobile=auto&sel=scheme_css' type='text/css' />
<div id='planyo_content' class='planyo'><img src='https://www.planyo.com/images/hourglass.gif' align='middle' /></div>
<script type='text/javascript' src='https://www.planyo.com/Plugins/PlanyoFiles/jquery.min.js'></script>
<script src='https://www.planyo.com/Plugins/PlanyoFiles/booking-utils.js' type='text/javascript'></script>
<noscript><a href='http://www.planyo.com/about-calendar.php?calendar=56046'>Make a reservation</a><br/><br/><a href='http://www.planyo.com/'>Reservation system powered by Planyo</a></noscript>
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
</html>
