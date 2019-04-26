<?php
function verifyInput($var){
    $var = htmlspecialchars($var);
    $var = stripcslashes($var);
    $var = trim($var);
    return $var ;
}
function isEmail ($email){
    $email = filter_var($email,FILTER_VALIDATE_EMAIL);
    return $email;
}

function VerifierAdresseMail($adresse) 
{ 
   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
   if(preg_match($Syntaxe,$adresse)) 
      return true; 
   else 
     return false; 
}

function isLetter ($letter){
    $letter = preg_match('/^[a-zA-Z ]*$/',$letter);
    return $letter ;
}

function telDefind($phone){
    $phone = preg_match('/^[0-9-]*$/',$phone);
    return $phone ;
}
function isNumeric($superfice){
    $superfice = preg_match('/^[0-9]*$/',$superfice);
    return $superfice ;
}
function limitDesc($msg){
    $msg = strlen($msg) ;
    return $msg ;
}

?>