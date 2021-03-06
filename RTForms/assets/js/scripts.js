
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */    
    $.backstretch("assets/img/backgrounds/skyline-early-2.1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form validation
    */
    $('.registration-form input[type="text"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.registration-form').on('submit', function(e) {
        var error = false;
    	$(this).find('input[type="text"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
		        error = true;
		    }
    		else {
    		    $(this).removeClass('input-error');
    		}
    	});
 
    	if (!error) {
			e.preventDefault();			
			doPost($(this));
		}
    });

    $('#btn_document').on('click', function(e) {
        $('#page_login, #page_case, #page_choice').toggleClass('hidden', true);
        $('#page_document').removeClass('hidden').addClass('show');
    });

    $('#btn_case').on('click', function (e) {
        $('#page_login, #page_document, #page_choice').toggleClass('hidden', true);
        $('#page_case').removeClass('hidden').addClass('show');
    });
    
    /*
     Tooltip
    */
    $('[data-toggle="tooltip"]').tooltip();

    // Login page
    $('#page_login').removeClass('hidden').addClass('show');
	
	// Utility Functions
	function moveNext(id){
		if (id == 'form_login' || id == 'form_signup' || id == 'form_case' || id == 'form_document') {
			$('#page_login, #page_case, #page_document').toggleClass('hidden', true);
			$('#page_choice').removeClass('hidden').addClass('show');
		}
	}
	
	function doPost(form){
		url = form.attr( "action" );
		data = form.serialize();
		console.log(url + '*' + data);
		$.ajax({
			url: url,
			type: 'POST',
			data: data,
			success: function(data, textStatus, xhr) {
				console.log('responseDATA' + data);
				//show success alert
				moveNext(form.attr('id'));
				$('.alert-success span').text('You have been registered successfully.');					
				$('.alert-success').removeClass('hidden');
			},
			error: function(xhr, textStatus, errorThrown) {
				alert('bad');
			}	
		});			
	}	
});
