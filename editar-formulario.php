<h1>Editar Formulário</h1>
<?php
	$sql = "SELECT * FROM formulario WHERE id_formulario=".$_REQUEST["id_formulario"];
	
	$res = $conn->query($sql);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-formulario" method="POST">
	<div class="form-group">
		<label>Cliente</label>
		<select name="cliente_id_cliente" class="form-control">
			<option>== Selecione um Cliente ==</option>
		<?php
			$sql_2 = "SELECT * FROM cliente";			
			$res_2 = $conn->query($sql_2) or die($conn->error);		
			$qtd_2 = $res_2->num_rows;			
			if($qtd_2 > 0){				
				while($row_2 = $res_2->fetch_object()){
					if($row_2->id_cliente == $row->cliente_id_cliente){
						print "<option value='".$row_2->id_cliente."' selected>".$row_2->usuario_cliente."</option>";
					}else{
						print "<option value='".$row_2->id_cliente."'>".$row_2->usuario_cliente."</option>";
					}
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label>Nome do Cliente</label>
		<input type="text" name="nome_formulario" value="<?php print $row->nome_formulario; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_formulario" value="<?php print $row->cpf_formulario; ?>"  class="form-control">
	</div>
	<div class="form-group">
		<label>Data de Nascimento</label>
		<input type="text" name="data_nasc_formulario" value="<?php print $row->data_nasc_formulario; ?>"  class="form-control">
	</div>
	<div class="form-group">
		<label>Gênero</label>
		<input type="text" name="genero_formulario" value="<?php print $row->genero_formulario; ?>"   class="form-control">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="text" name="email_formulario" value="<?php print $row->email_formulario; ?>"   class="form-control">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="number" name="telefone_formulario" value="<?php print $row->telefone_formulario; ?>"   class="form-control">
	</div>
	<div class="form-group">
		<label>Endereço</label>
		<input type="text" name="endereco_formulario" value="<?php print $row->endereco_formulario; ?>"   class="form-control">
	</div>

	<div class="form-group">
		<input type="hidden" name="acao" value="editar">
		<input type="hidden" name="id_formulario" value="<?php print $row->id_formulario; ?>">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>