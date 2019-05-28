<?php
//Connection
include_once 'db_connect.php';

//Function against XSS
function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-delete'])):
    $id = clear($_POST['id']);

    $sql = "DELETE FROM customers WHERE id = '$id'";
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php');
    else:
        header('Location: ../index.php');
    endif;
endif;