<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
     crossorigin="anonymous">
</head>
<body>


<h1 class="display-3 text-center">Calculo de Distancia percorrida</h1>
    
<main class="container my-5 text-center">

<form action="resultado.php" method="post">

<label>Digite o tempo(em horas)</label><br>
<input type="number" name="tempo" required><br><br>

<label>Digite a velocidade media(em km/h)</label><br>
<input type="number" name="velocidade"><br><br>

<input type="submit" value="Enviar">

</form>






</main>

</body>
</html>