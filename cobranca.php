<html>
<META http-equiv="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<?php
session_start();
ob_start();
$_SESSION['home'] = "";
include_once("inc.site.php");
include_once("inc.cabecalho.php");

include_once("inc.scripts.php");
?>
</head>
<body>
<div id="header"><div id="logo"></div></div>
<!-- content -->
<div id="splash"></div>
<!-- end #splash -->
<div id="page">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="left" valign="top" width="20px">
                <?include_once("inc.menuesq.php");?>
            </td>
            <td align="left" valign="middle">
<?
// SCRIPT DE COBRANÇA LOJACOM ############################################################################# //
//
// * A DESCRIÇÃO COMPLETA DE COMO UTILIZAR O SISTEMA DE SCRIPT ESTÁ EM - http://script.lojacom.com.br/ajuda
//
// ######################################################################################################## //

if (isSet($_REQUEST["acao"]) && $_REQUEST["acao"] == "retorno") {
	?>
	<table border="0" cellspacing="5" cellpadding="2" width="100%">
		<tr bgcolor="#FFFFFF" height="100%">
			<td align="center" valign="top">
				<BR><BR><BR>
				<b>Sua transação de pagamento foi finalizada.</b><BR>
				<BR>
				Verifique abaixo o status do seu pagamento:<BR>
				<BR>
				<b>Status:</b> <?=base64_decode($_REQUEST["s"])?><BR>
				<b>Tipo de Pagamento:</b> <?=base64_decode($_REQUEST["tp"])?><BR>
				<BR>
				Foi enviado um e-mail para você, com os detalhes da transação, para acompanhamento.<BR>
				Qualquer dúvida, entre em contato com [Nome do Seu Site].
				<BR><BR>
				<a href="/" style="color: #0000FF">Ir para a página inicial</a>
			</td>
		</tr>
	</table>
	<?
} else {
	if (isSet($_REQUEST["lccdpgs"])) {

		include_once($_SERVER["DOCUMENT_ROOT"] . "/GetScriptLojaCom.php");
		$objGetScriptLojaCom = new GetScriptLojaCom();
		$html = $objGetScriptLojaCom->servico("cobranca", $_REQUEST["lccdpgs"]);

		echo "<table border='0' cellspacing='5' cellpadding='2' width='700'>";

		if ($html) {
			?>
			<tr bgcolor="#FFFFFF" height="100%">
				<td valign="top"><?=$html?></td>
			</tr>
			<?

		} else {
			?>
			<tr bgcolor="#FFFFFF" height="100%">
				<td align='center'><b>O documento pode estar vazio, ou não foi encontrado.</b></td>
			</tr>
			<?

		}

		echo "</table>";

	} else {
		echo "O código da transação não foi identificado";

	}

}

// ############################################################################### //
?>
            </td>
        </tr>
    </table>

<div style="clear: both;">&nbsp;</div>
</div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr><td style="height:150px" valign="bottom"></td></tr>
</table>
<div id="footer">
                <p>Copyright&copy;2009-2010 SETAL. Todos os Direitos Reservados..</p>
            </div>
</body>
</html>
<?ob_end_flush();?>
		