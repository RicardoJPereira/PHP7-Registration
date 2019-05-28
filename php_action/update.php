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

if (isset($_POST['btn-edit'])):
    $name = clear($_POST['name']);
    $surname = clear($_POST['surname']);
    $email = clear($_POST['email']);
    $age = clear($_POST['age']);
    $id = clear($_POST['id']);

    $sql = "UPDATE customers SET nome = '$name', sobrenome = '$surname', email = '$email', idade = '$age' WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    else:
        header('Location: ../index.php');
    endif;
endif;