<?php

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

require "../../../vendor/autoload.php";

if($_POST){
    $validator = Validation::createValidator();
    $errors = [];
    $errors[] = $validator->validate(
        $_POST['name'],
        [
            new NotBlank(),
            new Length(["min" => 3])
        ]
    );
    $errors[] = $validator->validate(
        $_POST['email'],
        [
            new NotBlank(),
            new Email()
        ]
    );
    $errors[] = $validator->validate(
        $_POST['topic'],
        [
            new NotBlank()
        ]
    );
    $errors[] = $validator->validate(
        $_POST['message'],
        [
            new NotBlank()
        ]
    );
    $isValid = true;
    foreach ($errors as $error){
        if($error->count()>0){
            $isValid = false;
            break;
        }
    }

    if(!$isValid){
        echo "Correct form";
        exit;
    }
    require "SwiftMailer.php";
    header("Location: ../../View/main.php");
}
