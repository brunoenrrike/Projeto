<?php
	date_default_timezone_set('America/Sao_Paulo');

	header('Content-Type: text/html; charset=utf-8');

	$data_time	= date("d/m/Y H:i");


	if(isset($_POST["btnConfirmar"])){
		$responsavel 		= $_POST["responsavel"];
		$tipo_contrato 		= $_POST["tipo_contrato"];
		$n_registro 		= $_POST["n_registro"];
		$n_contrato			= $_POST["n_contrato"];
		$id_empresa 		= $_POST["id_empresa"];
		$data_entrada 		= $_POST["data_entrada"];
		$data_saida 		= $_POST["data_saida"];
		$status 		= $_POST["status"];
		$data_validade 		= $_POST["data_validade"];
		$estados_brasil 		= $_POST["estados_brasil"];
		$cidade 		= $_POST["cidade"];
		$bairro 		= $_POST["bairro"];
		$rua 		= $_POST["rua"];
		$numero 		= $_POST["numero"];
		$data_pagamento 		= $_POST["data_pagamento"];
		if (!empty($_POST["enviar_email"])){
			$email = 'Sim';
		} else{ $email = 'Não'; }
		$Observacao 		= $_POST["Observacao"];


		$html = "<!doctype html>";
		$html .= "<html>";

		$html .= "Incluir novo Registro"; $html .= "<br>"; $html .= "<br>";

		$html .= "Responável: $responsavel"; $html .= "<br>";
		$html .= "Tipo de Contrato: $tipo_contrato"; $html .= "<br>";
		$html .= "Nº Registro: $n_registro"; $html .= "<br>";
		$html .= "Nº Contrato: $n_contrato"; $html .= "<br>";
		$html .= "Empresa: $id_empresa"; $html .= "<br>";
		$html .= "Data Entrada: $data_entrada"; $html .= "<br>";
		$html .= "Data Saída: $data_saida"; $html .= "<br>";
		$html .= "Status: $status"; $html .= "<br>";
		$html .= "Data Validade: $data_validade"; $html .= "<br>";
		$html .= "Estado: $estados_brasil"; $html .= "<br>";
		$html .= "Cidade: $cidade"; $html .= "<br>";
		$html .= "Bairro: $bairro"; $html .= "<br>";
		$html .= "Rua: $rua"; $html .= "<br>";
		$html .= "Nº: $numero"; $html .= "<br>";
		$html .= "Dia Aluguel: $data_pagamento"; $html .= "<br>";
		$html .= "Enviar e-mail: $email"; $html .= "<br>";
		$html .= "Observação: $Observacao"; $html .= "<br>";

		echo "$html";
	}
	
	
	if(isset($_POST["btnEditar"])){
		$responsavel 		= $_POST["responsavel"];
		$tipo_contrato 		= $_POST["tipo_contrato"];
		$n_registro 		= $_POST["n_registro"];
		$n_contrato			= $_POST["n_contrato"];
		$id_empresa 		= $_POST["id_empresa"];
		$data_entrada 		= $_POST["data_entrada"];
		$data_saida 		= $_POST["data_saida"];
		$status 		= $_POST["status"];
		$data_validade 		= $_POST["data_validade"];
		$estados_brasil 		= $_POST["estados_brasil"];
		$cidade 		= $_POST["cidade"];
		$bairro 		= $_POST["bairro"];
		$rua 		= $_POST["rua"];
		$numero 		= $_POST["numero"];
		$data_pagamento 		= $_POST["data_pagamento"];
		if (!empty($_POST["enviar_email"])){
			$email = 'Sim';
		} else{ $email = 'Não'; }
		$Observacao 		= $_POST["Observacao"];


		$html = "<!doctype html>";
		$html .= "<html>";

		$html .= "Editar Registro"; $html .= "<br>"; $html .= "<br>";

		$html .= "Responável: $responsavel"; $html .= "<br>";
		$html .= "Tipo de Contrato: $tipo_contrato"; $html .= "<br>";
		$html .= "Nº Registro: $n_registro"; $html .= "<br>";
		$html .= "Nº Contrato: $n_contrato"; $html .= "<br>";
		$html .= "Empresa: $id_empresa"; $html .= "<br>";
		$html .= "Data Entrada: $data_entrada"; $html .= "<br>";
		$html .= "Data Saída: $data_saida"; $html .= "<br>";
		$html .= "Status: $status"; $html .= "<br>";
		$html .= "Data Validade: $data_validade"; $html .= "<br>";
		$html .= "Estado: $estados_brasil"; $html .= "<br>";
		$html .= "Cidade: $cidade"; $html .= "<br>";
		$html .= "Bairro: $bairro"; $html .= "<br>";
		$html .= "Rua: $rua"; $html .= "<br>";
		$html .= "Nº: $numero"; $html .= "<br>";
		$html .= "Dia Aluguel: $data_pagamento"; $html .= "<br>";
		$html .= "Enviar e-mail: $email"; $html .= "<br>";
		$html .= "Observação: $Observacao"; $html .= "<br>";

		echo "$html";
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>