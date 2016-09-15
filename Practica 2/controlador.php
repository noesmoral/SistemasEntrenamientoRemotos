<?php


/* Parsear la solicitud del cliente */
/*

sudo javac -cp "$HOME/Descargas/lib/*:$HOME/Descargas/gson-2.6.2.jar" /var/www/AplicacionWeb/src/aplicacionweb/Estructura.java /var/www/AplicacionWeb/src/aplicacionweb/Modelo.java

http://localhost/controlador.php?peticion="informe"&alumno="Matias"
&tipo="obtener nota"&grupos="M10"&actividad="SSOO_M1_A1"&profesor="Profesor3"
&asignatura="SSOO"
*/

$peticion=$_GET['peticion'];
$tipo=$_GET['tipo'];
$grupos=$_GET['grupos'];
$actividad=$_GET['actividad'];
$asignatura=$_GET['asignatura'];
$profesor=$_GET['profesor'];
$alumno=$_GET['alumno'];


function devolverResultado($peticion, $tipo, $grupos, $actividad, $asignatura, $profesor, $alumno) {
    switch ($peticion) {
        case "\"borrar alumno\"": {
                echo 'Metodo no implementado<br>';
                break;
            }
        case "\"modificar nota\"": {
                echo 'Metodo no implementado<br>';
                break;
            }
        case "\"informe\"": {
             echo "Bienvenido al informe<br>";

             $command = 'java -cp "/var/www/AplicacionWeb/src/:/home/optinformatica/Descargas/gson-2.6.2.jar:/home/optinformatica/Descargas/lib/*" aplicacionweb/Modelo --tipo ' . $tipo . ' --actividad ' . $actividad . ' --grupos ' . $grupos . ' --alumno ' . $alumno . ' --asignatura ' . $asignatura . ' --profesor ' . $profesor;
            $resultado = system($command );
			return $resultado;
        	break;
            }
        default :
            echo 'error, no se encontro la peticion';
            break;
    }
}

echo 'Bienvenido al controlador<br>';
$aux = devolverResultado($peticion, $tipo, $grupos, $actividad, $asignatura, $profesor, $alumno);

echo $aux;

?>
