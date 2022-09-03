<?php
session_start();

require_once 'dbc.php';
$simpUSer = new Dbc;

if(isset($_POST['action']) && $_POST['action'] == 'simp_Reg'){

        $simp_UserName = $simpUSer->test_input($_POST['simp_UserName']);
        $simpUser_Email = $simpUSer->test_input($_POST['simpUser_Email']);
        $simpUser_Password = $simpUSer->test_input($_POST['simpUser_Password']);

        $hpass = password_hash($simpUser_Password, PASSWORD_DEFAULT);


            if($simpUSer->user_exitsEmail($simpUser_Email)){
                echo "E-Mail already Exists!!!";
            }else if($simpUSer->user_exitsUserName($simp_UserName)){
                echo "UserName already Exists!!!";
                }else{
                if((!empty($simp_UserName)) && (!empty($simpUser_Email)) &&(!empty($simpUser_Password))){
                    $uppercase = preg_match('@[A-Z]@', $simpUser_Password);
                    $lowercase = preg_match('@[a-z]@', $simpUser_Password);
                    $number = preg_match('@[0-9]@', $simpUser_Password);
                    $specialChars = preg_match('@[^\W]@', $simpUser_Password);
                    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($simpUser_Password) < 8 ){
                        echo "password must consist of lowercase, uppercase, special characters and must be 8 characters long";
                    }else{
                        $simpUSer->registerSimpUser($simp_UserName, $simpUser_Email, $hpass);
                        echo "Register";
                                $_SESSION['ourUser'] = $simp_UserName;
                    }
        }else{
            echo "Some fields are empty!";
        } 
            }
        
 
}
if(isset($_POST['action']) && $_POST['action'] == 'simp_login'){
   
    $simp_UserName =$simpUSer->test_input($_POST['simp_UserName']);
    $simpUser_Password =$simpUSer->test_input($_POST['simpUser_Password']);

    $simpLogUser = $simpUSer->simpUsers_Login($simp_UserName);
    if ($simpLogUser != null){
        if (password_verify($simpUser_Password,$simpLogUser['simpUser_Password'])){
            echo "login";

            $_SESSION['ourUser'] = $simp_UserName;
        }else{
            echo "password not correct!";
        }
    }else{
        echo "user not found";
    }

}

