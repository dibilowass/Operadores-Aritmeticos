<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

print_r($_POST);
echo '<br />';

$fahrenheit = $_POST['fahrenheit'];


    echo "Graus Celsius = " . 5/9 * ($fahrenheit - 32);

}else {
    echo "Formulário não enviado.";
}



?>