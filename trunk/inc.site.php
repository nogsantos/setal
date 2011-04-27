<?php
/*
 * Motor do sistema, pagina que direciona os includes das secoes
 * distribuindo os seus ids.
 */

$_GET['secao'] != "" ? $secao_id = $_GET['secao'] : header("Location:home.php");
?>
