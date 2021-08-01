<!doctype html>
<html>
	<head>
		<?php include_once "links_includes/head.php"; ?>
		<?php include_once "links_includes/script.php"; ?>
		<link href="links_includes/estilos.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php
			/*
			include_once "log/gravar_log.php";
			$usuario = $_SESSION['nome'];
			logMsg( "$usuario Entrou na tela index.php" );
			*/
		?>

		<div id="container-botoes_sair" class="col-md-12">
			<a href="" style="float: right"><button class="btn button3 col-md-12">SAIR</button></a>
		</div>

		<div id="container-botoes" class="form-row">
			<a href="form_incluir.php"><button class="button button5" >Cadastrar</button></a>
			<!--<a href="enviar_email.php" target="_blank" class="button button5" >Disparar Email(s)</a>-->
		</div>

		<div id="conteudo" style="margin-left: 1%; margin-right: 1%;">
			<h1 style="text-align: center">Tela de Modelo</h1>
			<div class="form-group col-md-12 contorno" style="background-color:white"> 
				<table id="table" class="display table table-striped table-bordered table-hover ">
					<thead>
						<tr>
							<th></th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td style="text-align:center">	
								<a href="<?php echo "visualizar.php?id_contratos_casas=";?>" title="Visualizar Contrato" style="color:blue" target="_blank"><i class="far fa-eye fa-2x"></i></a>&nbsp;
								
								<a href="<?php echo "form_editar.php?id=";?>" title="Editar Contrato" style="color:green"><i class="far fa-edit fa-2x"></i></a>&nbsp;

								<a href="" 
								target="_blank" title="Gerar relatório em arquivo PDF" style="color:#f8c261"><i class="far fa-file-pdf fa-2x"></i></a> &nbsp;

								<a href="" onclick="return confirm('Deseja realmente excluir esse relatorio?')" title="Excluir registro" style="color:#ff0000"><i class="far fa-trash-alt fa-2x"></i></a> 

							</td>
							<td>
								Responável: Bruno
								Tipo de Contrato: alugue
								Nº Registro: 1
								Nº Contrato: 2
								Empresa: Noromix
								Data Entrada: 2021-08-01
								Data Saída: 2021-08-31
								Status: ATIVO
								Data Validade: 2021-08-20
								Estado: SP
								Cidade: VOTUPORANGA
								Bairro: Belo Horizonte II
								Rua: Rua Edmo Rodrigues Barbosa
								Nº: 5065
								Dia Aluguel: 10
								Enviar e-mail: Sim
								Observação: testeeee
							</td>
						</tr>
					</tbody>

					<tfoot>
						<tr class="print">
							<th><select><option value=""></option></select></th>
							<th><select><option value=""></option></select></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</body>
</html>