<?php
include ('function.php');

if($_POST['acao']=="cadastro"){
	
	// Nome da Pasta
	$nome_pasta = time();
	
	// Criar Pasta em Raiz
	mkdir("root/".$nome_pasta."/");

	// Criar Pasta de DOCS
	mkdir("root/".$nome_pasta."/docs/");
	
	//Copiar Cadastro XML
	copy("cadastro.xml", "root/".$nome_pasta."/cadastro.xml");
	
	fopen("root/".$nome_pasta."/".amigavel($_POST['responsavel']).".nome", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['cpf']).".cpf", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['rg']).".rg", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['carteira_trabalho_pis']).".pis", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['data_nascimento']).".nasc", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['end']).".end", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['end_numero']).".num", "a");

	fopen("root/".$nome_pasta."/".amigavel($_POST['end_bairro']).".bairro", "a");
	
	fopen("root/".$nome_pasta."/".amigavel("0000 0000 0000 0000").".cod", "a");
	
	/* alimentar dados do XML*/
	
	$xml = simplexml_load_file("root/".$nome_pasta."/cadastro.xml");
	
	$xml->cod = '0000 0000 0000 0000'; // gerar XXXX.XXXX.XXXX.XXXX
	
	$xml->responsavel = $_POST['responsavel'];
	
	$xml->rg->numero = $_POST['rg']; 
	$xml->rg->orgao_emissor = $_POST['rg_orgao_emissor']; 
	$xml->rg->data_emissao = $_POST['rg_data_emissao']; 
	$xml->rg->uf = $_POST['rg_uf'];
	
	$xml->carteira_trabalho->numero = $_POST['carteira_trabalho']; 
	$xml->carteira_trabalho->serie = $_POST['carteira_trabalho_serie']; 
	$xml->carteira_trabalho->pis = $_POST['carteira_trabalho_pis'];
	
	$xml->cpf = $_POST['cpf'];
	
	$xml->nascimento = $_POST['data_nascimento'];	
	$xml->telefone = $_POST['telefone'];	
	$xml->renda = $_POST['renda'];	
	$xml->escolaridade = $_POST['escolaridade'];	
	$xml->profissao = $_POST['profissao'];
	
	$xml->moradia->endereco = $_POST['end'];
	$xml->moradia->numero = $_POST['end_numero'];
	$xml->moradia->bairro = $_POST['end_bairro'];
	
	$xml->data_criacao = date('d/m/Y');
	
	$xml->saveXML("root/".$nome_pasta."/cadastro.xml");
	
	
	?> 
	<script type="text/javascript">
			location.href = 'atualizar.php?atualizar=<?php echo $nome_pasta?>'
	</script>
	<?php	
}

if($_POST['acao']=="atualizar"){
	
	$comando = $_POST['comando'];
	$pasta = $_POST['pasta'];
	
	$xml = simplexml_load_file("root/".$pasta."/cadastro.xml");
	
	if($comando == 'responsavel'){
		
		$xml->responsavel = $_POST['responsavel'];		
		apagar_ext("./root/".$pasta."/*.nome");		
		fopen("root/".$pasta."/".amigavel($_POST['responsavel']).".nome", "a");
		
		$xml->cod = $_POST['cod'];
		apagar_ext("./root/".$pasta."/*.cod");		
		fopen("root/".$pasta."/".amigavel($_POST['cod']).".cod", "a");		
		
		$xml->rg->numero = $_POST['rg'];		
		apagar_ext("./root/".$pasta."/*.rg");		
		fopen("root/".$pasta."/".amigavel($_POST['rg']).".rg", "a");
		
		$xml->rg->orgao_emissor = $_POST['rg_orgao_emissor']; 
		$xml->rg->data_emissao = $_POST['rg_data_emissao']; 
		$xml->rg->uf = $_POST['rg_uf'];
		
		$xml->carteira_trabalho->numero = $_POST['carteira_trabalho']; 
		$xml->carteira_trabalho->serie = $_POST['carteira_trabalho_serie']; 
		$xml->carteira_trabalho->pis = $_POST['carteira_trabalho_pis'];
		apagar_ext("./root/".$pasta."/*.pis");		
		fopen("root/".$pasta."/".amigavel($_POST['carteira_trabalho_pis']).".pis", "a");		
		
		$xml->cpf = $_POST['cpf'];
		apagar_ext("./root/".$pasta."/*.cpf");		
		fopen("root/".$pasta."/".amigavel($_POST['cpf']).".cpf", "a");
		
		$xml->nascimento = $_POST['data_nascimento'];
		apagar_ext("./root/".$pasta."/*.nasc");		
		fopen("root/".$pasta."/".amigavel($_POST['data_nascimento']).".nasc", "a");
		
		$xml->telefone = $_POST['telefone'];
		$xml->renda = $_POST['renda'];	
		$xml->escolaridade = $_POST['escolaridade'];
		$xml->profissao = $_POST['profissao'];
				
	}
	if($comando == 'moradia'){

		$xml->moradia->endereco = $_POST['end'];		
		apagar_ext("./root/".$pasta."/*.end");		
		fopen("root/".$pasta."/".amigavel($_POST['end']).".end", "a");
		
		$xml->moradia->numero = $_POST['end_numero'];
		apagar_ext("./root/".$pasta."/*.num");		
		fopen("root/".$pasta."/".amigavel($_POST['end_numero']).".num", "a");
		
		$xml->moradia->bairro = $_POST['end_bairro'];
		apagar_ext("./root/".$pasta."/*.bairro");		
		fopen("root/".$pasta."/".amigavel($_POST['end_bairro']).".bairro", "a");
		
		$xml->moradia->ponto_referencia = $_POST['end_ponto_referencia'];
		$xml->moradia->tipo_residencia = $_POST['tipo_residencia'];
		$xml->moradia->situacao_moradia = $_POST['situacao_moradia'];
		$xml->moradia->numero_comodo = $_POST['numero_comodo'];
		$xml->moradia->banheiro = $_POST['banheiro'];
		$xml->moradia->quantos_vivem = $_POST['quantos_vivem'];
		$xml->moradia->tempo_comunidade = $_POST['tempo_comunidade'];
		$xml->moradia->municipio = $_POST['sit_municipio'];
		$xml->moradia->abastecimento_agua = $_POST['abastecimento_agua'];
		$xml->moradia->energia_eletrica = $_POST['energia_eletrica'];
		$xml->moradia->esgoto_sanitario = $_POST['esgoto_sanitario'];
		
	}
	if($comando == 'beneficio'){
		
		$xml->beneficio->bolsa_familia->cond = $_POST['beneficio_bolsa_familia_cond'];
		$xml->beneficio->bolsa_familia->valor = $_POST['beneficio_bolsa_familia_valor'];
		$xml->beneficio->cad_unico->cond = $_POST['beneficio_cad_unico_cond'];
		$xml->beneficio->fome_zero->cond = $_POST['beneficio_fome_zero_cond'];
		$xml->beneficio->bpc->cond = $_POST['beneficio_bpc_cond'];
		$xml->beneficio->bpc->quantidade = $_POST['beneficio_bpc_quantidade'];
		$xml->beneficio->aposentado->cond = $_POST['beneficio_aposentado_cond'];
		$xml->beneficio->aposentado->quantidade = $_POST['beneficio_aposentado_quantidade'];

	}
	if($comando == 'familia'){
		
		$xml->familia->municipio_procedente = $_POST['familia_municipio_procedente'];
		$xml->familia->uf_procedente = $_POST['familia_uf_procedente'];
		$xml->familia->gestante->cond = $_POST['familia_gestante_cond'];
		$xml->familia->gestante->acompanhamento = $_POST['familia_gestante_acompanhamento'];
		$xml->familia->hipertenso->cond = $_POST['familia_hipertenso_cond'];
		$xml->familia->hipertenso->acompanhamento = $_POST['familia_hipertenso_acompanhamento'];
		$xml->familia->diabetico->cond = $_POST['familia_diabetico_cond'];
		$xml->familia->diabetico->acompanhamento = $_POST['familia_diabetico_acompanhamento'];
		$xml->familia->esf->cond = $_POST['familia_esf_cond'];
		$xml->familia->deficiente->cond = $_POST['familia_deficiente_cond'];
		$xml->familia->deficiente->quantidade = $_POST['familia_deficiente_quantidade'];
		
	}
	if($comando == 'observacao'){
		
		$xml->observacao = $_POST['observacao'];
		
		$xml->agente_social = $_POST['agente_social'];
		apagar_ext("./root/".$pasta."/*.agente");		
		fopen("root/".$pasta."/".amigavel($_POST['agente_social']).".agente", "a");
		
		$xml->data_criacao = $_POST['data_criacao'];
		
	}
	
	$xml->data_atualizacao = date('d/m/Y');
	
	$xml->saveXML("root/".$pasta."/cadastro.xml");
	

		
	?>
		<script>
			location.href = 'atualizar.php?atualizar=<?php echo $pasta?>&comando=<?=$comando?>&alerta'
		</script>
	<?php	
	
}
?>