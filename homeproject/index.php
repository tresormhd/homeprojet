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
    <h1 class="text-uppercase text-center text-decoration"> quelques exemples de maisons </h1>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th><strong class="text-uppercase">images</strong></th>
          <th><strong class="text-uppercase">Descriptions</strong></th>
        </tr>
      </thead>
      <tbody>


          <tr>
            <td><img src="images/img2.jpg" width="400" height="300" ></td>
            <td>
                <p class="text-center">
                200 m² , 6 pièces , 5 chambres<br>

                Cette propriété contemporaine de 200m² offre un vaste lieu de vie et intègre cinq chambres. Suivant un plan en T, elle se démarque par son toit en partie cintré et revêt de nombreux espaces conviviaux, que ce soit à l'intérieur ou à l'extérieur.</p>
              <a href="rencontrer.php" class="btn btn-primary">rencontrer l'architecte</a>
            </td>
          </tr>
          <tr>
            <td><img src="images/img3.jpg" width="400" height="300"></td>
            <td>
                <p class="text-center">
                80 m² , 4 pièces, 3 chambres <br>

              Une maison de 3 chambres sera la taille parfaite qui vous permetta une grande variété d’aménagement intérieur. Avec 3 chambres, vous pouvez avoir une chambre séparée pour les enfants, faire une chambre d’amis, ou aménager un bureau qui servira pour les petites familles et les couples</p>
              <a href="rencontrer.php" class="btn btn-primary">rencontrer l'architecte</a>
            </td>
          </tr>
        
      </tbody>
    </table>
        <a href="plans.php" class="btn btn-outline-info text-center">voir plus de maisons 
          <span class="glyphicon glyphicon-circle-arrow-right"></span>
        </a>
       <!-- newletter -->
    <section id="newletter" class="newletter" >
        <div class="container" >
            <form id="f_email" method="POST" action="<?php echo $_SERVER['PHP_SELF'];  ?>  ">
                <h2>Rejoindre notre newletter</h2>
                    <p  class="commit">  Entrez votre email et souscrivez pour avoir <br> les nouveautés directement sur boite mail.</p>
                      <div class="col-md-6 offset-md-4 align-center">
                        <div class="alert alert-succes alert-dismissible fade show" role="alert" id="news"></div>
                      </div>
                    <div class="email-box">
                        <i class="fas fa-envelope text-dark"></i>
                        <input class="tbox" type="email" name="email" placeholder="Entrez votre adresse mail">
                      <input type="submit" name="form_email" class="btn1" value="Souscrire" >
                    </div>
                    
            </form>
        </div>
    </section>
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
    <!-- <script src="js/script.js"></script> -->
</body>
</html>
<?php
require('traitement/config.php');
require('traitement/function.php');



if( isset(  $_POST['form_email'] ) && (  isset(  $_POST['email'] )   )   ) //cliqué et var email définie
{
    if(!empty($_POST['email']) )
    {
        $email=$_POST['email'];
 
        if (VerifierAdresseMail($email)==true)
        {
            
            /*enregistrer email*/
            $req=$bdd->prepare('INSERT INTO contacts (email)VALUES(:email)') ;
     
            $req->execute(array(':email' => $_POST['email']));
     
            if ($req)
                echo 'réussi';
            else echo 'non';
        }//if verifier
     
        else echo'vérifier votre mél!!!';
 
    }//!empty
    else
        echo "veuillez saisir votre mél";

}//if isset BT      

 ?>