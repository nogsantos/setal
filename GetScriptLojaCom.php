<?
class GetScriptLojaCom {

	// CONFIGURA��O ---------------------------------------------------------------------- //

	var $loja = 35; // ID da loja

	// ----------------------------------------------------------------------------------- //

	function servico($sistema, $id, $orderBy="") {
		// SCRIPT DE MENU LOJACOM ######################################################## //
		$order = "";
		if ($orderBy) {
			$order = base64_encode($orderBy);

		}

		$urlMenu = "http://script.lojacom.com.br/servico/" . $sistema . "/?id=" . $id;
		if ($order) {
			$urlMenu .= "&order=" . $order;
			
		}
		$urlMenu .= "&loja=" . $this->loja;

		// INCLUDE MENU ------------------------------------------------------------------ //
		ini_set("allow_url_fopen", 1); //fun��o habilitada 
		ini_set("allow_url_include", 1); //fun��o habilitada 

		$html = ""; // Variavel de armazenamento do conte�do aberto ---------------------- //
		$fd = fopen($urlMenu, "r"); // Abre uma conex�o com o arquivo remoto ------------- //
		while ($line = fgets($fd, 1000)) { // Verifica a exist�ncia de dados ------------- //
			$html .= $line; // Armazena os dados ----------------------------------------- //

		}

		fclose($fd); // Fecha a conex�o com o arquivo remoto ----------------------------- //

		ini_set("allow_url_fopen", 0); //fun��o desabilitada  
		ini_set("allow_url_include", 0); //fun��o desabilitada 

		return $html; // Mostra o HTML do menu ------------------------------------------- //
		// ############################################################################### //

	}

}
?>