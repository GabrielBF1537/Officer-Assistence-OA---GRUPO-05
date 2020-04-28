<h1 style="text-align:center">Cadastrar Formulário</h1>
<form action="?page=salvar-formulario" method="POST">
	<div class="form-group">
		<label>Cliente</label>
		<select name="cliente_id_cliente" class="form-control">
			<option>== Selecione um Cliente==</option>
		<?php
			$sql = "SELECT * FROM cliente";			
			$res = $conn->query($sql) or die($conn->error);			
			$qtd = $res->num_rows;			
			if($qtd > 0){				
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_cliente."'>".$row->usuario_cliente."</option>";
				}
			}else{
				print "Nenhum dado encontrado";
			}
		?>
		</select>
	</div>
	<div class="form-group">
		<label>Nome do Cliente</label>
		<input type="text" name="nome_formulario" class="form-control">
	</div>
	<div class="form-group">
		<label>CPF</label>
		<input type="text" name="cpf_formulario" class="form-control">
	</div>
	<div class="form-group">
		<label>Data de Nascimento</label>
		<input type="text" name="data_nasc_formulario" class="form-control">
	</div>
	<div class="form-group">
		<label>Gênero</label>
		<input type="text" name="genero_formulario"  class="form-control">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="text" name="email_formulario"  class="form-control">
	</div>
	<div class="form-group">
		<label>Telefone</label>
		<input type="number" name="telefone_formulario"  class="form-control">
	</div>
	<div class="form-group">
		<label>Endereço completo</label>
		<input type="text" name="endereco_formulario"  class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>