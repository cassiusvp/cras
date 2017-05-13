<?php
	include('header.php');
?>
<div class="corpo">
	<h3 class="uk-margin uk-heading-line"><span>Cadastrar</span></h3>
	
	<form class="uk-grid-small" uk-grid action="core.php" method="post">
	
		<div class="uk-width-1-1@s">
			<p class="uk-text-small uk-margin-remove">Responsavel pela Casa:</p>
			<input type="text" class="uk-input uk-form-small" name="responsavel" required="required">
		</div>
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">RG:</p>
			<input type="text" class="uk-input uk-form-small" name="rg">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Orgão Emissor:</p>
			<input type="text" class="auto_orgao_emissor uk-input uk-form-small" name="rg_orgao_emissor">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">UF:</p>
			<input type="text" class="auto_estado uk-input uk-form-small" name="rg_uf">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Data Emissão:</p>
			<input type="text" class="uk-input uk-form-small mask_data" name="rg_data_emissao">
		</div>	
		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Carteira de Trabalho:</p>
			<input type="text" class="uk-input uk-form-small" name="carteira_trabalho">
		</div>
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Série:</p>
			<input type="text" class="uk-input uk-form-small" name="carteira_trabalho_serie">
		</div>
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">PIS/PASEP:</p>
			<input type="text" class="uk-input uk-form-small" name="carteira_trabalho_pis">
		</div>
		
		<div class="uk-width-1-1@s">
			<p class="uk-text-small uk-margin-remove">CPF:</p>
			<input type="text" class="uk-input uk-form-small mask_cpf" name="cpf">
		</div>
		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Data de Nascimento:</p>
			<input type="text" class="uk-input uk-form-small mask_data" name="data_nascimento">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Telefone:</p>
			<input type="text" class="uk-input uk-form-small" name="telefone">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Renda:</p>
			<input type="text" class="uk-input uk-form-small" name="renda">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Escolaridade:</p>
			<input type="text" class="auto_escolaridade uk-input uk-form-small" name="escolaridade">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Profissão:</p>
			<input type="text" class="auto_profissao uk-input uk-form-small" name="profissao">
		</div>
	
	<h4 class="uk-margin uk-width-1-1@s"><span>Dados da Moradia</span></h4>
	
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Endereço:</p>
			<input type="text" class="auto_endereco uk-input uk-form-small" name="end">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Número:</p>
			<input type="text" class="uk-input uk-form-small" name="end_numero">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Bairro:</p>
			<input type="text" class="auto_bairro uk-input uk-form-small" name="end_bairro">
		</div>
		
		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="cadastro"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="AVANÇAR" />
		</div>
		
	</form>
</div>
<?php
	include('footer.php');
?>