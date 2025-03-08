<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

print_r($_POST);
echo '<br />';

$massa = $_POST['massa'];


    echo "Massa final após perder 10%: " . $massa - (($massa / 100) * 10) . "<br>";
    echo "Massa final após perder 20%: " .  $massa - (($massa / 100) * 20) . "<br>";
    echo "Massa final após perder 30%: " .  $massa - (($massa / 100) * 30) . "<br>";
}else {
    echo "Formulário não enviado.";
}



?>