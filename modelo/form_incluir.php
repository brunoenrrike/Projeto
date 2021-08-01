<!doctype html>
<html>
	<head>
		<?php include_once "links_includes/head.php"; ?>
		<?php include_once "links_includes/script.php"; ?>
		<link href="links_includes/estilos.css" rel="stylesheet" type="text/css">
		<link href="links_includes/estilos_gerais.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="container-botoes_sair" class="col-md-12">
			<a style="float: right"><button class="btn button3 col-md-12" onclick="goBack()">SAIR</button></a>
			<script>
				function goBack() {
					location.href="index.php";
				}
			</script>			
		</div><br>

		<form action="bd/incluir_registro_novo.php" method="post" enctype="multipart/form-data">
			<div  style="margin-left: 1%; margin-right: 1%;">
				<p class="titulo-formulario">Incluir Novo Registro</p>

				<div class="formulario contorno" id="formulario" >
					<div class="form-row">
						<div class="col-md-4">
							<p class="col-md-12 ">Responsável:
								<input name="responsavel" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Tipo de Cotrato:
								<input name="tipo_contrato" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2 ">
							<p class="col-md-12 ">Nº Regsitro:<br>
								<input type="number" name="n_registro" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Nº Contrato:
								<input name="n_contrato" class="col-md-12 "value="" >
							</p>
						</div>


						<div class="col-md-4">
							<p class="col-md-12 ">Empresa:
								<select class="col-md-12 "  name="id_empresa">
									<option value="">Escolha uma empresa</option>
									<option value="Noromix" >Noromix</option>
									<option value="Demop" >Demop</option>
								</select>
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Data Entrada:
								<input  type="date" name="data_entrada" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Data Saída:
								<input  type="date" name="data_saida" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Status:
							<select class=" col-md-12"  name="status" id="">
								<option value="">------</option>
								<option value="ATIVO">ATIVO</option>
								<option value="INATIVO">INATIVO</option>
							</select>
							</p>
						</div> 
						
						<div class="col-md-2">
							<p class="col-md-12 ">Data Validade:
								<input  type="date" name="data_validade" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Estado:<br>			
								<select name="estados_brasil" class="col-md-12" >
									<option  value="AL">Alagoas</option>
									<option  value="AC">Acre</option>
									<option  value="AP">Amapá</option>
									<option  value="AM">Amazonas</option>
									<option  value="BA">Bahia</option>
									<option  value="CE">Ceará</option>
									<option  value="DF">Distrito Federal</option>
									<option  value="ES">Espírito Santo</option>
									<option  value="GO">Goiás</option>
									<option  value="MA">Maranhão</option>
									<option  value="MT">Mato Grosso</option>
									<option  value="MS">Mato Grosso do Sul</option>
									<option  value="MG">Minas Gerais</option>
									<option  value="PA">Pará</option>
									<option  value="PB">Paraíba</option>
									<option  value="PR">Paraná</option>
									<option  value="PE">Pernambuco</option>
									<option  value="PI">Piauí</option>
									<option  value="RJ">Rio de Janeiro</option>
									<option  value="RN">Rio Grande do Norte</option>
									<option  value="RS">Rio Grande do Sul</option>
									<option  value="RO">Rondônia</option>
									<option  value="RR">Roraima</option>
									<option  value="SC">Santa Catarina</option>
									<option  value="SP">São Paulo</option>
									<option  value="SE">Sergipe</option>
									<option  value="TO">Tocantins</option>
								</select>
							</p>
						</div>

						<div class="col-md-3">
							<p class="col-md-12 ">Cidade:
								<input name="cidade" class="col-md-12 " value=""  style="text-transform: uppercase;">
							</p>
						</div>

						<div class="col-md-3">
							<p class="col-md-12 ">Bairro:
								<input name="bairro" class="col-md-12 " value=""  style="text-transform: uppercase;">
							</p>
						</div>

						<div class="col-md-3">
							<p class="col-md-12 ">Rua:
								<input name="rua" class="col-md-12 " value=""  style="text-transform: uppercase;">
							</p>
						</div>

						<div class="col-md-1">
							<p class="col-md-12 ">Número:
								<input name="numero" class="col-md-12 "value="" >
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Data do Aluguél:
								Dia: &nbsp;<input name="data_pagamento" class="col-md-5 "value="" title="Informe o dia que deve ser pago o aluguél da casa.">
							</p>
						</div>

						<div class="col-md-2">
							<p class="col-md-12 ">Enviar e-mail:<br>	
								<input type="checkbox" name="enviar_email" id="enviar_email" value="1" >
								<label style="font-size:12px"  class="form-check-label" for="enviar_email">Receber notificação.</label>
								</input>
							</p>
						</div>
					</div>

					<p class="col-md-12 ">Observação:
						<textarea class="col-md-12 " rows="2" name="Observacao" value=""></textarea>
					</p>

					<div class="form-row col-md-12 " >
						<div class="form-row contorno col-md-4 " style="height: 60px;">
							<input type="file" name="doc1"  class="form-control-file col-md-10" id="exampleFormControlFile1" style="font-size:12px">&nbsp;
							<button type="submit" name="adicionar_anexo" id="adicionar_anexo" class="button fas fa-plus fa-2x" style="color:red; background-color:#bfbfbb"></button>
						</div>&nbsp;

						<div class="form-group contorno col-md-3">
							<?php include_once "links_includes/script.php"; ?>
							<table id="tabela" class="table table-striped table-bordered table-hover">
								<tbody>
									<tr>
										<td style="width:40px; text-align:center;">
											<a href="" onclick="return confirm('Deseja realmente excluir esse arquivo?')" title="Excluir registro" style="color:#ff0000"><i class="far fa-trash-alt fa-2x"></i></a> 
											&nbsp;&nbsp;
											<a href="ARQUIVOS//" target="_blank" title="Download" data-lightbox="gallery" style="color:#0037ff"><i class="fas fa-file-download fa-2x"></i>
											</a>
										</td>
										<td></td>
									</tr>         
								</tbody>
							</table>
						</div>
					</div>

					<button type="button" name="btnCancelar" onclick="goBack()" class="btn btn-danger col-md-2">Cancelar</button>
					<button type="submit" name="btnConfirmar"  id="btnConfirmar" class="btn btn-success col-md-2"  style="float: right;">Salvar</button>
				</div>
			</div>
		</form>
	</body>
</html>