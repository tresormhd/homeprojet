
<?php
require('config.php');
require('function.php');



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

 echo json_encode($email);
}//if isset BT      




?>