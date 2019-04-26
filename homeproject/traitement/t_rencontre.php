<?php
    require('config.php');
    require('function.php');

$array = array("name" => "","lastname" => "","localite" => "","superficie" => "","phone" => "","email" => "",
    "nameError" => "","lastnameError" => "","localiteError" => "","superficieError" => "",
    "phoneError" => "","emailError" => "",
    "isSuccess" => false);

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $array["name"] = verifyInput($_POST["name"]);
        $array["lastname"] = verifyInput($_POST["lastname"]);
        $array["localite"] = verifyInput($_POST["localite"]);
        $array["superficie"] = verifyInput($_POST["superficie"]);
        $array["phone"] = verifyInput($_POST["phone"]);
        $array["email"] = verifyInput($_POST["email"]);
        $array["isSuccess"] = true; 
        $emailText = "";

        // veif name
    // if (empty($array["name"])) {
    //     $array["nameError"]="votre nom svp !";
    // } else {
    //     if (!isLetter($array["name"])){
    //         $array["nameError"] = "que des lettres svp ! ";
    //         $array["isSuccess"] = false; 
    //     } else{
    //         $array["name"];
    //     }
    // }
    // // verif lastame
    // if (empty($array["lastname"])) {
    //     $array["lastnameError"]="votre prenom  svp !";
    // } else {
    //     if (!isLetter($array["lastname"])){
    //         $array["lastnameError"] = "que des lettres svp ! ";
    //         $array["isSuccess"] = false; 
    //     } else{
    //         $array["lastname"];
    //     }
    // }
    //      // verif localite 
    // if (empty($array["localite"])) {
    //     $array["localiteError"]="votre localite  svp !";
    // } else {
    //     if (!isLetter($array["localite"])){
    //         $array["localiteError"] = "que des lettres svp !";
    //         $array["isSuccess"] = false; 
    //     } else{
    //         $array["localite"];
    //     }
    // }
    //     // verif superficie

    // if (empty($array["superficie"])) {
    //     $array["superficieError"]="la superfice de votre terrain";
    // } else {
    //     if (!isNumeric($array["superficie"])){
    //         $array["superficieError"] = "Que des chiffres svp ! ";
    //         $array["isSuccess"] = false; 
    //     } else{
    //         $array["superficie"];
    //     }
    // }

    //     // verif phone
    // if (empty($array["phone"])) {
    //     $array["phoneError"]="votre numero svp !";
    // } else {
    //     if (!isPhone($array["phone"])){
    //         $array["phoneError"] = "Que des chiffres et des espaces, stp...";
    //         $array["isSuccess"] = false; 
    //     } else{
    //         $array["phone"];
    //     }
    // }

    //     // verif email
        

    // if (empty($array["email"])) {
    //         $array["emailError"] = 'ton email stp !!';
    //         $array['isSuccess']= false ;
    //     } else {

    //        if(!isEmail($array["email"])) {
    //             $array["emailError"] = "T'essaies de me rouler ? C'est pas un email ça  !";
    //             $array["isSuccess"] = false; 
    //         }else{
    //            $array["email"];
    //         }
        
    //     }

        // inserrer en bd 
        if($array["isSuccess"] ) { 

    $req =$bdd->prepare("INSERT INTO rencontrer (name, lastname, localite, superficie, phone, email) VALUES (?, ?, ?, ?, ?, ?) ");
    $req->execute(array($array["name"],$array["lastname"],$array["localite"],$array["superficie"],$array["phone"],$array["email"]));

            // $headers = "From: {$array['name']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            // mail($emailTo, "Un message de votre site", $emailText, $headers);
        }
        
         echo json_encode($array);
        
    }

?>