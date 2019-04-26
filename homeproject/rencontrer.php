<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>homeprojet</title>
</head>
<body>

	<header>
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark black">
        <div class="container">
          <a class="navbar-brand" href="index.php" id="logos">home<span>p</span>roject</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faire-un-devis.php">faire un devis</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="plans.php">voir nos plans</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">a propos</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>
 
      <div class="view intro-2">
        <div class="full-bg-img">
          <div class="mask rgba-black-strong flex-center">
            <div class="container">
              <div class="white-text text-center wow fadeInUp">
                <h2><i>homeprojet pour vour aider dans vos projets de constructions</i></h2>
                
                <br>
                <h4>ici nous vous proposons des maisons et batiments concus par les meilleurs des architectes et vous mettrent en relations  </h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>
<!-- rencontre -->
	<div class="container">
        <div class="heading">
            <h2 class="text-center text-uppercase ">contactez un architecte </h2>
        </div>
            
       <div class="row">
           <div class="col-lg-11 col-lg-offset-0.5">
                <form id="contact-form" method="POST" action="" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Prénom <span >*</span></label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Votre prénom">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Nom <span >*</span></label>
                            <input id="lastname" type="text" name="lastname" class="form-control" placeholder="Votre Nom">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="loc">localité <span >*</span></label>
                            <input id="loc" type="text" name="localite" class="form-control" placeholder="Votre localité">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="sup">superficie du terrain <span >*</span></label>
                            <input id="sup" type="number" name="superficie" class="form-control" placeholder="la superficie du terrain en m²">
                            <p class="comments"></p>
                        </div>

                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email <span >*</span></label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Votre Email">
                            <p class="comments"></p>
                        </div>
                        
                        <div class="col-md-12">
                            <p ><strong>* Ces informations sont requises.</strong></p>
                        </div>
                        <!-- success -->
                        <div class="col-md-6 offset-md-4 align-center">
                            <div class="alert alert-succes alert-dismissible fade show" role="alert" id="success"></div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <input type="submit" name="form-rencontre" class="btn btn-success" value="Envoyer">
                        </div>    
                    </div>
                </form>
            </div>
       </div>
    </div>

	<!-- footer -->
    <footer  id="footer">
        <div class="container padding" >
            <div class="row text-center">
            	<div class="col-md-6" id="contacts">
        			<h2 id="logo">home<span>P</span>roject</h2>
     				<hr class="light">
    				<p><i class="fas fa-phone-square"></i> (+225) 45 03 09 52</p>
        			<p><i class="fas fa-envelope-square"></i> plansenligne@outlook.fr</p>
    			</div>
    			<div class="col-md-6">
    				<h2 >Nous Suivre</h2>
    				<hr class="light">
    				<div class="social padding">
    					<div class="social-section text-center">
                  <ul class="list-unstyled list-inline">
                      <li class="list-inline-item"><a href="www.facebook.com" class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a>
                      </li>
                      <li class="list-inline-item"><a href="www.twitter.com" class="btn-floating btn-tw"><i class="fab fa-twitter"> </i></a>
                      </li>
                      <li class="list-inline-item"><a href="www.linkedin-in.com" class="btn-floating btn-li"><i class="fab fa-linkedin-in"> </i></a>
                      </li>
                  </ul>
              </div>
    				</div>
    			</div>
    			<div class="col-12">
    				<hr class="light">
    				<h3>&copy;copyright 2019, homeproject </h3>
    			</div>
    		</div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/mdb.js"></script>
    <script src="js/script.js"></script>
</body>
</html>