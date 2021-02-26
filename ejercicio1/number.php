<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Ejercicio 1 del Taller 1</title>
<link rel="stylesheet" href="css/fonts.css" />
<link rel="stylesheet" href="css/sticky-table.css" />
</head>
<body>
<section>
<article class="component">
<table>
<thead>
</thead>
<tbody>
<?php
if(isset($_POST['enviar'])){
if(isset($_POST['ingresados'])){
pares($_POST['ingresados']);
positivo($_POST['ingresados']);
}
else{
$msgerr = "No hay edades que procesar.";
$nums = array($msgerr);
pares($nums);
positivo($_POST['ingresados']);
}
}

//Funcion para evaluar los numeros pares ingresados 
function pares($nums){
$porcentaje = 0;
$contador = 0;
foreach($nums as $num){
 if($num%2 == 0){
$contador++;
 }
}
$porcentaje = ($contador*100)/12;
$porcentaje = number_format($porcentaje, 2, ".", ",");
echo "<h2>El porcentaje de numeros pares del total ingresado es: $porcentaje %</h2>";
}

//Funcion para evaluar los numeros positivos ingresados
function positivo($nums){
$descendente = [];
$contador = 0;
foreach($nums as $num){
 if($num > 0){
 	 array_push($descendente, $num);
 }
}
echo "<h2>El listado de números positivos ingresados son:\n";
foreach($descendente as $descent){
    echo $descent. ",\n";
}
}



?>
</table>
</article>
<!-- Librerías de jQuery para hacer el efecto stycky-headers -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/jquery.stickyheader.js"></script>
</section>
</body>
</html>