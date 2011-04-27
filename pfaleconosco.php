<?php
/**
 */
include "mime/htmlMimeMail.php";

$mail = new htmlMimeMail();

$email = $_POST["cboDestino"];
$mail->setFrom(utf8_decode($_POST["txtNome"]) . "<" . $_POST["txtEmail"] . ">");
$mail->setSubject("Mensagem enviada do site SETAL.org.");

$sMensagem = trim(utf8_decode($_POST["txtMensagem"])) . "<br><br>";
$sMensagem .= "<br>Remetente: " . utf8_decode($_POST["txtNome"]);
$sMensagem .= "<br>E-mail: " . $_POST["txtEmail"];
$sMensagem .= "<br>Telefone: " . $_POST["txtTelefone"];
$sMensagem .= "<br>Cidade: " . utf8_decode($_POST["txtCidade"]) . "/" . $_POST["cboUF"];

$mail->setHtml($sMensagem);
$result = $mail->send(array($email));
if ($result) {
    header("Location:site.php?secao=faleconosco&msg=1");
} else {
    header("Location:site.php?secao=faleconosco&msg=2");
}
?>