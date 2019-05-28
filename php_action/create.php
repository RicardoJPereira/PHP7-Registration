<?php
    //Connection
    require_once 'db_connect.php';

    //Function against XSS
    function clear($input) {
        global $connect;
        $var = mysqli_escape_string($connect, $input);
        $var = htmlspecialchars($var);
        return $var;
    }

    if (isset($_POST['btn-register'])):
        $name = clear($_POST['name']);
        $surname = clear($_POST['surname']);
        $email = clear($_POST['email']);
        $age = clear($_POST['age']);

        $sql = "INSERT INTO customers(name, surname, email, age) VALUES ('$name', '$surname', '$email', '$age')";
        if(mysqli_query($connect, $sql)):
            header('Location: ../index.php');
        else:
            header('Location: ../index.php');
        endif;
    endif;