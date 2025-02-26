<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

print_r($_POST);
echo '<br />';

$raio = $_POST['raio'];


    echo "Area = " . ( 4 * 3.14 *($raio **2));

}else {
    echo "Formulário não enviado.";
}



?>