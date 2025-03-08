<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

print_r($_POST);
echo '<br />';

$raio = $_POST['raio'];
$altura = $_POST['altura'];


    echo "Volume = " . 1/3 * 3.14 * $raio**2 * $altura;

}else {
    echo "Formulário não enviado.";
}



?>