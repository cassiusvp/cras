<?php
	include('function.php');
	include('header.php');
?>
<div class="corpo">
	<h3 class="uk-margin uk-heading-line"><span>Consultar</span></h3>
	
	<form class="uk-grid-small" action="consultar.php" method="post" uk-grid>
		
		<div class="uk-width-3-4@s">
			<p class="uk-text-small uk-margin-remove">Responsável:</p>
			<input class="uk-input uk-form-small" type="text" name="responsavel">
		</div>
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Código:</p>
			<input class="uk-input uk-form-small" type="text" name="codigo">
		</div>
		
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">CPF:</p>
			<input type="text" class="uk-input uk-form-small mask_cpf" name="cpf">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">RG:</p>
			<input class="uk-input uk-form-small" type="text" name="rg">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">PIS/NIS/PASEP:</p>
			<input class="uk-input uk-form-small" type="text" name="pis">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Data de Nascimento:</p>
			<input class="uk-input uk-form-small mask_data" type="text" placeholder="DD/MM/AAAA" name="nasc">
		</div>
		
		
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Endereço:</p>
			<input type="text" class="auto_endereco uk-input uk-form-small" name="end" >
		</div>	
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Número:</p>
			<input class="uk-input uk-form-small" type="text" name="numero">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Bairro:</p>
			<input type="text" class="auto_bairro uk-input uk-form-small" name="end_bairro" name="bairro">
		</div>
		
		
		<div class="uk-width-1-4@s">
			<input class="uk-button uk-button-default uk-width-1-1" type="reset" value="LIMPAR CAMPOS"/>
		</div>	
		<div class="uk-width-1-2@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="consulta"/>
			<input class="uk-button uk-button-secondary uk-width-1-1" type="submit" value="PESQUISAR"/>
		</div>
		
	</form>
	<?php
		if(@$_POST['acao'] == "consulta"){
			
			if(isset($_POST['responsavel'][0])){
				$nome = "*".amigavel($_POST['responsavel'])."*";
				foreach(glob("./root/*/".$nome.".nome") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['codigo'][0])){
				$nome = "*".amigavel($_POST['codigo'])."*";
				foreach(glob("./root/*/".$nome.".cod") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['cpf'][0])){
				$nome = "*".amigavel($_POST['cpf'])."*";
				foreach(glob("./root/*/".$nome.".cpf") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['rg'][0])){
				$nome = "*".amigavel($_POST['rg'])."*";
				foreach(glob("./root/*/".$nome.".rg") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['pis'][0])){
				$nome = "*".amigavel($_POST['pis'])."*";
				foreach(glob("./root/*/".$nome.".pis") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['nasc'][0])){
				$nome = "*".amigavel($_POST['nasc'])."*";
				foreach(glob("./root/*/".$nome.".nasc") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['end'][0])){
				$nome = "*".amigavel($_POST['end'])."*";
				foreach(glob("./root/*/".$nome.".end") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['numero'][0])){
				$nome = "*".amigavel($_POST['numero'])."*";
				foreach(glob("./root/*/".$nome.".num") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			if(isset($_POST['end_bairro'][0])){
				$nome = "*".amigavel($_POST['end_bairro'])."*";
				foreach(glob("./root/*/".$nome.".bairro") as $aux){
					$aux = explode("/",$aux);
					$linhas[$aux[2]] = $aux[2];
				}
			}
			
	?>
		<?php
			if(count(@$linhas) == 0){
		?><pre>Não foram escontrados resultados</pre>
		<?
			}else{				
	?>
	<table class="uk-table  uk-table-hover uk-table-striped">
		<thead>
			<tr>
				<th nowrap="nowrap">CRAS</th>
				<th class="uk-table-expand">Responsável</th>
				<th nowrap="nowrap">CPF</th>
				<th nowrap="nowrap">Data de Nascimento</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach($linhas as $linha){
			$dados = buscar_dados($linha);
		?>
			<tr>
				<td nowrap="nowrap" width="0" ><?=$dados['cod']?></td>
				<td class="uk-table-link uk-table-expand">
					<a class="uk-link-reset" href="atualizar.php?atualizar=<?=$linha?>"><?=$dados['nome']?></a>
				</td>
				<td nowrap="nowrap"><?=$dados['cpf']?></td>
				<td nowrap="nowrap"><?=$dados['nasc']?></td>
			</tr>
		<?php
		}
		?>
		</tbody>
	</table>
	<?
			}
		}
	?>
</div>
<?php
	include('footer.php');
?>