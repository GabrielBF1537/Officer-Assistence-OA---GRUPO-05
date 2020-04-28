<h1 style="text-align:center">Cadastrar Consultor</h1>
<form action="?page=salvar-consultor" method="POST">
	<div class="form-group">
		<input type="text" name="nome_consultor" placeholder="Nome do consultor" class="form-control">
	</div>
	<div class="form-group">
		<input type="number" name="cpf_consultor" placeholder="CPF" class="form-control">
	</div>
	<div class="form-group">
		<input type="number" name="rg_consultor" placeholder="RG" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="endereco_consultor" placeholder="Endereço" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="email_consultor" placeholder="E-mail" class="form-control">
	</div>
	<div class="form-group">
		<input type="number" name="telefone_consultor" placeholder="Telefone(s)" class="form-control">
	</div>
	<div class="form-group">
		<input type="text" name="usuario_consultor" placeholder="Crie um usuário" class="form-control">
	</div>
	<div class="form-group">
		<input type="number" name="senha_consultor" placeholder="Crie uma senha de 6 digitos" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>