<h1 style="text-align:center">Cadastrar Questionário</h1>
<table class='table table-bordered table-striped table-hover'>
	<tr><th>➤ Neste caso, as questões do questionário serão escolhidas pelo Consultor(dono do Consultório)!</th></tr>
</table>
<form action="?page=salvar-questionario" method="POST">
	<div class="form-group">
		<label>Tema do Questionário</label>
		<input type="text" name="tema_questionario" class="form-control">
	</div>
	<div class="form-group">
	<label>Número de Questões </label>
		<input type="text" name="n_questoes_questionario" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>