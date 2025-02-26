<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

print_r($_POST);
echo '<br />';

$salario = $_POST['salario'];

$inss = ($salario / 100) * 8;
$imposto = ($salario / 100) * 12;


    echo "Desconto de INSS = " . $inss . "<br>";
    echo "Desconto de Imposto de renda = " . $imposto . "<br>";
    echo "Salario Liquido = " . $salario - $inss - $imposto . "<br>";

}else {
    echo "Formulário não enviado.";
}



?>