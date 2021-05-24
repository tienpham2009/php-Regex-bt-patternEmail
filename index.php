<?php
$patternEmail = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
$email = "ab@gmail.";

function isPatterEmail($email, $patternEmail)
{
    if (preg_match($patternEmail, $email)){
        echo "email hop le";
    }else{
        echo "email khong hop le";
    }
}

isPatterEmail($email, $patternEmail);

