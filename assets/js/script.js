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