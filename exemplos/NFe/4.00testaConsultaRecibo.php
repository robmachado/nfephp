<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once '../../bootstrap.php';

use NFe\Tools;

$nfe = new Tools('../../config/config.json');
$aResposta = array();
$tpAmb = '2';
//$recibo = '351000087124119';
$recibo = '351000087215190';
$retorno = $nfe->sefazConsultaRecibo($recibo, $tpAmb, $aResposta);
echo '<br><br><PRE>';
echo htmlspecialchars($nfe->soapDebug);
echo '</PRE><BR>';
print_r($aResposta);
echo "<br>";