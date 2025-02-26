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


<h1 class="display-3 text-center">Calculo de Salario</h1>
    
<main class="container my-5 text-center">

<form action="resultado.php" method="post">

<label>Desconto INSS de 8% </label><br>
<label>Imposto de renda de 12% </label><br>
<label>Digite o salario bruto</label><br>
<input type="number" name="salario" required><br><br>


<input type="submit" value="Enviar">

</form>






</main>

</body>
</html>