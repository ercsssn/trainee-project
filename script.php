<?php

    $firstname = $surname = $username = $password = $age = $email = "";
        if (isset($_POST['forename']))
            $firstname = fix_string($_POST['firstname']);
        if (isset($_POST['surname']))
            $surname = fix_string($_POST['surname']);
        if (isset($_POST['username']))
            $username = fix_string($_POST['username']);
        if (isset($_POST['password']))
            $password = fix_string($_POST['password']);
        if (isset($_POST['age']))
            $age = fix_string($_POST['age']);
        if (isset($_POST['email']))

        $email = fix_string($_POST['email']);
        $fail = validate_firstname($firstname);
        $fail .= validate_surname($surname);
        $fail .= validate_username($username);
        $fail .= validate_password($password);
        $fail .= validate_age($age);
        $fail .= validate_email($email);
 
        echo "<!DOCTYPE html>\n<html><head><title>An Example Form</title>";
 
        if ($fail == "")
        {
 
            echo "</head><body>Form data successfully validated:
                $firstname, $surname, $username, $password, $age, $email.</body></html>";


            // This is where you would enter the posted fields into a database,
            // preferably using hash encryption for the password.
            
            exit;
        }

 ?>