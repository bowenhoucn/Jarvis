<?php
// Questo proxy � necessario, poich� le richieste in ajax da un dominio (come localhost) ad un altro dominio, vengono bloccate per evitare attacchi di tipo XXS.
// Se per� la richiesta al dominio remoto � uno script .php come questo a farla e poi passa le info allo script ajax sullo stesso dominio, non ci sono problemi.

if (!isset($_GET['url'])) die();
$url = urldecode($_GET['url']);
$url = 'http://' . str_replace('http://', '', $url); // Avoid accessing the file system
echo file_get_contents($url);

?>