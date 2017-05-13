$(document).ready(function(){
 
 $('.mask_data').mask('00/00/0000');
  $('.mask_tempo').mask('00:00:00');
  $('.mask_cep').mask('00000-000');
  $('.mask_cpf').mask('000.000.000-00');

			  /* orgao_emissor */
				var orgao_emissor = {
				url: "../orgao_emissor.json",
				getValue: "value",
					list: {
						match: {
						enabled: true
						}
					}	
				};
				$(".auto_orgao_emissor").easyAutocomplete(orgao_emissor);
	
  /* estados */    
	var estados = {
	url: "../estado.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_estado").easyAutocomplete(estados);
	
  /* municipio */    
	var municipio = {
	url: "../municipio.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_municipio").easyAutocomplete(municipio);
	
				/* escolaridade */  
				var escolaridade = {
				url: "../escolaridade.json",
				getValue: "value",
					list: {
						match: {
						enabled: true
						}
					}	
				};
				$(".auto_escolaridade").easyAutocomplete(escolaridade);

	/* profissao */  
  	var profissao = {
	url: "../profissao.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_profissao").easyAutocomplete(profissao);
	
				/* endereco */  
				var endereco = {
				url: "../endereco.json",
				getValue: "value",
					list: {
						match: {
						enabled: true
						}
					}	
				};
				$(".auto_endereco").easyAutocomplete(endereco);
	
	/* bairro */  
  	var bairro = {
	url: "../bairro.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_bairro").easyAutocomplete(bairro);	
	
				/* tipo de habitacao */  
				var tipo_habitacao = {
				url: "../tipo_habitacao.json",
				getValue: "value",
					list: {
						match: {
						enabled: true
						}
					}	
				};
				$(".auto_tipo_residencia").easyAutocomplete(tipo_habitacao);
	
	/* situacao da moradia */  
	var situacao_moradia = {
	url: "../situacao_moradia.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_situacao_moradia").easyAutocomplete(situacao_moradia);
	
				/* Condição SIM OU NAO */  
				var condicao = {
				url: "../condicao.json",
				getValue: "value",
					list: {
						match: {
						enabled: true
						}
					}	
				};
				$(".auto_condicao").easyAutocomplete(condicao);
	
	/* Abastecimento de agua */  
	var abastecimento_agua = {
	url: "../abastecimento_agua.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_abastecimento_agua").easyAutocomplete(abastecimento_agua);
	
				/* Energia eletrica */  
				var energia_eletrica = {
				url: "../energia_eletrica.json",
				getValue: "value",
					list: {
						match: {
						enabled: true
						}
					}	
				};
				$(".auto_energia_eletrica").easyAutocomplete(energia_eletrica);
				
	
	/* Energia eletrica */  
	var esgoto_sanitario = {
	url: "../esgoto_sanitario.json",
	getValue: "value",
		list: {
			match: {
			enabled: true
			}
		}	
	};
	$(".auto_esgoto_sanitario").easyAutocomplete(esgoto_sanitario);
	
		/* Agente Social */  
		var agente = {
		url: "../agente.json",
		getValue: "value",
			list: {
				match: {
				enabled: true
				}
			}	
		};
		$(".auto_agente").easyAutocomplete(agente);
				
	

});
