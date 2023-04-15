<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == "pedro" && $senha == "123321") {
    header('LOCATION: principal.php');
} else {
    header ('LOCATION: index.php');
}
     

?>