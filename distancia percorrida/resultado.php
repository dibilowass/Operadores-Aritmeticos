<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

print_r($_POST);
echo '<br />';

$velocidade = $_POST['velocidade'];
$tempo = $_POST['tempo'];


    echo "Resultado = " . $velocidade * $tempo . "km" ;

}else {
    echo "Formulário não enviado.";
}



?>