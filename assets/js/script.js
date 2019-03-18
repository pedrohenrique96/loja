$(function(){

	if(typeof maxslider != 'undefined') {
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: maxslider,
			values: [ $('#slider0').val(), $('#slider1').val() ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "R$" + ui.values[ 0 ] + " - R$" + ui.values[ 1 ] );
			},
			change: function( event, ui ) {
				$('#slider'+ui.handleIndex).val(ui.value);
				$('.filterarea form').submit();
			}
		});
	}

	$( "#amount" ).val( "R$" + $( "#slider-range" ).slider( "values", 0 ) + " - R$" + $( "#slider-range" ).slider( "values", 1 ) );
	

	$('.filterarea').find('input').on('change', function(){
		$('.filterarea form').submit();
	});

	$('.addtocartform button').click(function(e){
		e.preventDefault();
                var preco = parseInt($('.price').val());
               
		let qt = parseInt($('.addtocart_qt').val());
		let action = $(this).attr('data-action');

		if(action == 'decrease') {
			if(qt-1 >= 1) {
                            qt--;
                        var qtd = qt * preco;
			 $('.original_price').html(qtd);
			}
		}
		else if(action == 'increase') {
			qt = qt + 1;
                        
                        var qtd = qt * preco;
			 $('.original_price').html(qtd);
		}

		$('.addtocart_qt').val(qt);
		$('input[name=qt_product]').val(qt);

	});

	$('.photo_item').click(function(){
		let url = $(this).find('img').attr('src');
		$('.mainphoto').find('img').attr('src', url);
	});
});


/* Validador de CEP*/

$(document).ready(function() {

	function limpa_formulário_cep() {
		// Limpa valores do formulário de cep.
		$("#rua").val("");
		$("#bairro").val("");
		$("#cidade").val("");
		$("#estado").val("");		
	}
	
	//Quando o campo cep perde o foco.
	$("#cep").blur(function() {

		//Nova variável "cep" somente com dígitos.
		var cep = $(this).val().replace(/\D/g, '');

		//Verifica se campo cep possui valor informado.
		if (cep != "") {

			//Expressão regular para validar o CEP.
			var validacep = /^[0-9]{8}$/;

			//Valida o formato do CEP.
			if(validacep.test(cep)) {

				//Preenche os campos com "..." enquanto consulta webservice.
				$("#rua").val("...");
				$("#bairro").val("...");
				$("#cidade").val("...");
				$("#estado").val("...");				

				//Consulta o webservice viacep.com.br/
				$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

					if (!("erro" in dados)) {
						//Atualiza os campos com os valores da consulta.
						$("input[name=rua]").val(dados.logradouro);
						$("input[name=bairro]").val(dados.bairro);
						$("input[name=cidade]").val(dados.localidade);
						$("input[name=estado]").val(dados.uf);
						
					} //end if.
					else {
						//CEP pesquisado não foi encontrado.
						limpa_formulário_cep();
						alert("CEP não encontrado.");
					}
				});
			} //end if.
			else {
				//cep é inválido.
				limpa_formulário_cep();
				alert("Formato de CEP inválido.");
			}
		} //end if.
		else {
			//cep sem valor, limpa formulário.
			limpa_formulário_cep();
		}
	});
});
