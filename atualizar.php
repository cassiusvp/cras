<?php
	include('header.php');
	
	$pasta = $_GET['atualizar'];
	
	$xml = simplexml_load_file("root/".$pasta."/cadastro.xml");
	$comando = (isset($_GET['comando'])) ? $_GET['comando'] : "responsavel";
?>
<div class="corpo">
	<div>
		<ul class="uk-tab uk-child-width-expand">
			<li <?=($comando == "responsavel") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>">Responsável</a></li> <? /*  class="uk-active" */?>
			<li <?=($comando == "moradia") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=moradia">Moradia</a></li>
			<li <?=($comando == "beneficio") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=beneficio">Benefício</a></li>
			<li <?=($comando == "familia") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=familia">Família</a></li>
			<li <?=($comando == "atendimento") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=atendimento">atendimento</a></li>
			<li <?=($comando == "dependente") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=dependente">Dependentes</a></li>
			<li <?=($comando == "observacao") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=observacao">Observações</a></li>
			<li <?=($comando == "anexo") ? 'class="uk-active"' : "" ?>><a href="atualizar.php?atualizar=<?=$pasta?>&comando=anexo">Anexos</a></li>
		</ul>
	</div>
	<?php
	if(isset($_GET['alerta'])){
?>
<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Cadastro atualizado com sucesso</p>
</div>
<?
	}
	?>
<?php
	if($comando == "responsavel"){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">
		<div class="uk-width-2-3@s">
			<p class="uk-text-small uk-margin-remove">Responsavel pela Casa:</p>
			<input type="text" class="uk-input uk-form-small" name="responsavel" value="<?=$xml->responsavel?>">
		</div>
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">CRAS:</p>
			<input type="text" class="uk-input uk-form-small" name="cod" value="<?=$xml->cod?>">
		</div>
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">RG:</p>
			<input type="text" class="uk-input uk-form-small" name="rg" value="<?=$xml->rg->numero?>">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Orgão Emissor:</p>
			<input type="text" class="auto_orgao_emissor uk-input uk-form-small" name="rg_orgao_emissor" value="<?=$xml->rg->orgao_emissor?>">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">UF:</p>
			<input type="text" class="auto_estado uk-input uk-form-small" name="rg_uf" value="<?=$xml->rg->uf?>">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Data Emissão:</p>
			<input type="text" class="uk-input uk-form-small mask_data" name="rg_data_emissao" value="<?=$xml->rg->data_emissao?>">
		</div>	
		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Carteira de Trabalho:</p>
			<input type="text" class="uk-input uk-form-small" name="carteira_trabalho" value="<?=$xml->carteira_trabalho->numero?>">
		</div>
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Série:</p>
			<input type="text" class="uk-input uk-form-small" name="carteira_trabalho_serie" value="<?=$xml->carteira_trabalho->serie?>">
		</div>
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">PIS/PASEP:</p>
			<input type="text" class="uk-input uk-form-small" name="carteira_trabalho_pis" value="<?=$xml->carteira_trabalho->pis?>">
		</div>
		
		<div class="uk-width-1-1@s">
			<p class="uk-text-small uk-margin-remove">CPF:</p>
			<input type="text" class="uk-input uk-form-small mask_cpf" name="cpf" value="<?=$xml->cpf?>">
		</div>
		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Data de Nascimento:</p>
			<input type="text" class="uk-input uk-form-small mask_data" name="data_nascimento" value="<?=$xml->nascimento?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Telefone:</p>
			<input type="text" class="uk-input uk-form-small" name="telefone" value="<?=$xml->telefone?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Renda:</p>
			<input type="text" class="uk-input uk-form-small" name="renda" value="<?=$xml->renda?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Escolaridade:</p>
			<input type="text" class="auto_escolaridade uk-input uk-form-small" name="escolaridade" value="<?=$xml->escolaridade?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Profissão:</p>
			<input type="text" class="auto_profissao uk-input uk-form-small" name="profissao" value="<?=$xml->profissao?>">
		</div>
		
		
		
		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="responsavel"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
</form>	
<? }elseif($comando == "moradia"){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">

		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Endereço:</p>
			<input type="text" class="auto_endereco uk-input uk-form-small" name="end" value="<?=$xml->moradia->endereco?>">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Número:</p>
			<input type="text" class="uk-input uk-form-small" name="end_numero" value="<?=$xml->moradia->numero?>">
		</div>
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Bairro:</p>
			<input type="text" class="auto_bairro uk-input uk-form-small" name="end_bairro" value="<?=$xml->moradia->bairro?>">
		</div>
		
		<div class="uk-width-1-1@s">
			<p class="uk-text-small uk-margin-remove">Ponto de referência:</p>
			<input type="text" class="uk-input uk-form-small" name="end_ponto_referencia" value="<?=$xml->moradia->ponto_referencia?>">
		</div>
		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Tipo de habitação:</p>
			<input type="text" class="auto_tipo_residencia uk-input uk-form-small" name="tipo_residencia" value="<?=$xml->moradia->tipo_residencia?>">
		</div>		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Situação da moradia:</p>
			<input type="text" class="auto_situacao_moradia uk-input uk-form-small" name="situacao_moradia" value="<?=$xml->moradia->situacao_moradia?>">
		</div>		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Número de cômodos:</p>
			<input type="text" class="uk-input uk-form-small" name="numero_comodo" value="<?=$xml->moradia->numero_comodo?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Nº de pessoas na moradia:</p>
			<input type="text" class="uk-input uk-form-small" name="quantos_vivem" value="<?=$xml->moradia->quantos_vivem?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Possui banheiro:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="banheiro" value="<?=$xml->moradia->banheiro?>">
		</div>
		
		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Tempo de moradia:</p>
			<input type="text" class="uk-input uk-form-small" name="tempo_comunidade" value="<?=$xml->moradia->tempo_comunidade?>">
		</div>		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">No município:</p>
			<input type="text" class="uk-input uk-form-small" name="sit_municipio" value="<?=$xml->moradia->municipio?>">
		</div>		
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Abastecimento de água:</p>
			<input type="text" class="auto_abastecimento_agua uk-input uk-form-small" name="abastecimento_agua" value="<?=$xml->moradia->abastecimento_agua?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Energia eletrica:</p>
			<input type="text" class="auto_energia_eletrica uk-input uk-form-small" name="energia_eletrica" value="<?=$xml->moradia->energia_eletrica?>">
		</div>
		<div class="uk-width-1-5@s">
			<p class="uk-text-small uk-margin-remove">Esgoto sanitário:</p>
			<input type="text" class="auto_esgoto_sanitario uk-input uk-form-small" name="esgoto_sanitario" value="<?=$xml->moradia->esgoto_sanitario?>">
		</div>		
		
		
		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="moradia"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
</form>	
<? }elseif($comando == 'beneficio'){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">


		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Possui Bolsa Família (Programa Social):</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="beneficio_bolsa_familia_cond" value="<?=$xml->beneficio->bolsa_familia->cond?>">
		</div>		
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Valor:</p>
			<input type="text" class="uk-input uk-form-small" name="beneficio_bolsa_familia_valor" value="<?=$xml->beneficio->bolsa_familia->valor?>">
		</div>	
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Cadastro Único:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="beneficio_cad_unico_cond" value="<?=$xml->beneficio->cad_unico->cond?>">
		</div>
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Possui FOME ZERO:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="beneficio_fome_zero_cond" value="<?=$xml->beneficio->fome_zero->cond?>">
		</div>
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Algum membro recebe <abbr title="Programa de Proteção Continuada">BPC</abbr>:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="beneficio_bpc_cond" value="<?=$xml->beneficio->bpc->cond?>">
		</div>
		
		<div class="uk-width-1-4@s">
			<p class="uk-text-small uk-margin-remove">Quantos:</p>
			<input type="text" class="uk-input uk-form-small" name="beneficio_bpc_quantidade" value="<?=$xml->beneficio->bpc->quantidade?>">
		</div>
		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Possui aposentados:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="beneficio_aposentado_cond" value="<?=$xml->beneficio->aposentado->cond?>">
		</div>
		<div class="uk-width-2-3@s">
			<p class="uk-text-small uk-margin-remove">Quantidade:</p>
			<input type="text" class="uk-input uk-form-small" name="beneficio_aposentado_quantidade" value="<?=$xml->beneficio->aposentado->quantidade?>">
		</div>
		
		
		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="beneficio"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
</form>	
<? }elseif($comando == 'familia'){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">
		
		<div class="uk-width-2-3@s">
			<p class="uk-text-small uk-margin-remove">Município procedência da família:</p>
			<input type="text" class="auto_municipio uk-input uk-form-small" name="familia_municipio_procedente" value="<?=$xml->familia->municipio_procedente?>">
		</div>		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Estado procedência da família:</p>
			<input type="text" class="auto_estado uk-input uk-form-small" name="familia_uf_procedente" value="<?=$xml->familia->uf_procedente?>">
		</div>
		
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Há gestante:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_gestante_cond" value="<?=$xml->familia->gestante->cond?>">
		</div>
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Acompanhamento Pré-natal:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_gestante_acompanhamento" value="<?=$xml->familia->gestante->acompanhamento?>">
		</div>
		
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Hipertenso:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_hipertenso_cond" value="<?=$xml->familia->hipertenso->cond?>">
		</div>
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Acompanhamento médico:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_hipertenso_acompanhamento" value="<?=$xml->familia->hipertenso->acompanhamento?>">
		</div>
		
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Diabético:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_diabetico_cond" value="<?=$xml->familia->diabetico->cond?>">
		</div>
		<div class="uk-width-1-2@s">
			<p class="uk-text-small uk-margin-remove">Acompanhamento médico:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_diabetico_acompanhamento" value="<?=$xml->familia->diabetico->acompanhamento?>">
		</div>
		
		<div class="uk-width-1-1@s">
			<p class="uk-text-small uk-margin-remove">Família atendida por Equipes de Saúde da Família:</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_esf_cond" value="<?=$xml->familia->esf->cond?>">
		</div>
		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Deficiente na moradia</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_deficiente_cond" value="<?=$xml->familia->deficiente->cond?>">
		</div>		
		<div class="uk-width-2-3@s">
			<p class="uk-text-small uk-margin-remove">Quantos</p>
			<input type="text" class="auto_condicao uk-input uk-form-small" name="familia_deficiente_quantidade" value="<?=$xml->familia->deficiente->quantidade?>">
		</div>
		
		
		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="familia"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
</form>	
<? }elseif($comando == 'atendimento'){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">

		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="atendimento"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
		
</form>	
<? }elseif($comando == 'dependente'){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">

		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="dependente"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
		
</form>	
<? }elseif($comando == 'observacao'){
?>
<form class="uk-grid-small" uk-grid action="core.php" method="post">
		
		<div class="uk-width-1-1@s">
			<p class="uk-text-small uk-margin-remove">Observações:</p>
			<textarea class="uk-textarea" rows="5" name="observacao"><?=$xml->observacao?></textarea>
		</div>
		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Agente Social</p>
			<input type="text" class="auto_agente uk-input uk-form-small" name="agente_social" value="<?=$xml->agente_social?>">
		</div>		
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Data Criação</p>
			<input type="text" class="uk-input uk-form-small mask_data" name="data_criacao" value="<?=$xml->data_criacao?>">
		</div>	
		<div class="uk-width-1-3@s">
			<p class="uk-text-small uk-margin-remove">Data Atualização</p>
			<input type="text" class="uk-input uk-form-small mask_data" name="data_atualizacao" value="<?=$xml->data_atualizacao?>">
		</div>
		
		<div class="uk-width-3-4@s"></div>
		<div class="uk-width-1-4@s">
			<input type="hidden" name="acao" value="atualizar"/>
			<input type="hidden" name="pasta" value="<?=$pasta?>"/>
			<input type="hidden" name="comando" value="observacao"/>
			<input class="uk-button uk-button-secondary uk-width-1-1 loading" type="submit" value="SALVAR" />
		</div>
</form>	
<? }elseif($comando == 'anexo'){
?>
	<div class="test-upload uk-placeholder uk-text-center">
		<span uk-icon="icon: cloud-upload"></span>
		<span class="uk-text-middle">Arraste os arquivos para essa tela ou </span>
		<div uk-form-custom>
			<input type="file" multiple>
			<span class="uk-link">selecione um a um</span>
		</div>
	</div>

	<progress id="progressbar" class="uk-progress" value="0" max="100" hidden></progress>

	<script>

    (function ($) {

        var bar = $("#progressbar")[0];

        UIkit.upload('.test-upload', {

            url: '',
            multiple: true,

            beforeSend: function() { console.log('beforeSend', arguments); },
            beforeAll: function() { console.log('beforeAll', arguments); },
            load: function() { console.log('load', arguments); },
            error: function() { console.log('error', arguments); },
            complete: function() { console.log('complete', arguments); },

            loadStart: function (e) {
                console.log('loadStart', arguments);

                bar.removeAttribute('hidden');
                bar.max =  e.total;
                bar.value =  e.loaded;
            },

            progress: function (e) {
                console.log('progress', arguments);

                bar.max =  e.total;
                bar.value =  e.loaded;

            },

            loadEnd: function (e) {
                console.log('loadEnd', arguments);

                bar.max =  e.total;
                bar.value =  e.loaded;
            },

            completeAll: function () {
                console.log('completeAll', arguments);

                setTimeout(function () {
                    bar.setAttribute('hidden', 'hidden');
                }, 1000);

                alert('Upload Completed');
            }
        });

    })(jQuery);

</script>
<? } ?>

</div>
<?php
	include('footer.php');
?>