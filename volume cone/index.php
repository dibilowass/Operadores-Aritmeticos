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


<h1 class="display-3 text-center">Calcul odo volume de um cone</h1>
    
<main class="container my-5 text-center">

<form action="resultado.php" method="post">

<label>V = 1/3 * pi * r^2 * h </label><br>
<label>Digite o raio</label><br>
<input type="number" name="raio" required><br><br>
<label>Digite a altura</label><br>
<input type="number" name="altura" required><br><br>


<input type="submit" value="Enviar">

</form>






</main>

</body>
</html>