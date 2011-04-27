<?php
/*
 * Descri��o: Publica��es feitas no site.
 * Autor: Fabricio Nogueira
 * Data: 16/12/2009
 */
switch ($secao_id){
    case "quemsomos":include_once ("inc.quemsomos.php");break;
    case "proposito":include_once ("inc.proposito.php");break;
    case "estudar":include_once ("inc.estudar.php");break;
    case "faleconosco":include_once ("inc.faleconosco.php");break;
    case "matriz":include_once ("inc.matriz.php");break;
    case "horario":include_once ("inc.horario.php");break;
    case "inscricoesabertas":include_once ("inc.inscricoesabertas.php");break;
    case "professores":include_once ("inc.professores.php");break;
    case "projetosaber":include_once ("inc.projetosaber.php");break;
    case "escolademissoes":include_once ("inc.escolademissoes.php");break;
    case "semanateologica":include_once ("inc.semanateologica.php");break;
    case "projetomissionario":include_once ("inc.projetomissionario.php");break;
    case "semanateologica":include_once ("inc.semanateologica.php");break;
    default:"home.php";break;
}