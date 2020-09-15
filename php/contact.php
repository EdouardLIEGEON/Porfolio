<?php
    // On intialise les inputs à zéro au départ //
    $array = array("firstname" => "", "name" => "", "email" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "emailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);
    $emailTo = "edouard.liegeon@gmail.com";

    // On teste nos inputs //

    if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["message"] = test_input($_POST["message"]);
        $array["isSuccess"] = true;
        $emailText = "";
        
        if (empty($array["firstname"])){

            $array["firstnameError"] = "Un prénom s'il vous plaît :)";
            $array["isSuccess"] = false; 

        } else{

            $emailText .= "Firstname: {$array['firstname']}\n";
        }

        if (empty($array["name"])){

            $array["nameError"] = "Et puis un nom également :)";
            $array["isSuccess"] = false; 

        }else{

            $emailText .= "Name: {$array['name']}\n";
        }

        if(!isEmail($array["email"])){

            $array["emailError"] = "Un email valide s'il vous plaît";
            $array["isSuccess"] = false;

        }else{

            $emailText .= "Email: {$array['email']}\n";
        }

        if (!isPhone($array["phone"])){
            $array["phoneError"] = "Un numéro valide de préférence";
            $array["isSuccess"] = false; 

        }else{

            $emailText .= "Phone: {$array['phone']}\n";
        }

        if (empty($array["message"])){

            $array["messageError"] = "Soyez plus explicite s'il vous plaît...";
            $array["isSuccess"] = false; 

        }else{

            $emailText .= "Message: {$array['message']}\n";
        }
        
        if($array["isSuccess"]){ // On envoie un mail récap des données //

            $headers = "From: {$array['firstname']} {$array['name']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "Des news du portfolio ;)", $emailText, $headers);
        }
        
        echo json_encode($array);
        
    }

    function isEmail($email){

        return filter_var($email, FILTER_VALIDATE_EMAIL); // On teste le format de l'adresse mail//
    }

    function isPhone($phone){

        return preg_match("/^[0-9 ]*$/",$phone); // On teste le format du numéro de tel //
    }

    function test_input($data){ // On évite les caractères trop spéciaux //

      $data = trim($data); 
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>


