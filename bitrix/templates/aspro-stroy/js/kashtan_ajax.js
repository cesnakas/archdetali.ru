$(document).ready(function(){
/*ajax отправки формы*/
//start the ajax
  $('.callbackform').on('submit', function(e) {
    e.preventDefault();
    $('.message-form').html(' ');
    var data = $(this).serializeArray();
	
	$('.callbackform').css('display','none');
	  $('.message-form').html('');
	  $('.message-form').html('<span>Спасибо! В ближаший час мы с Вами свяжемся!</span>');
	  $('.message-form').show(350);
	  $('.input-call1').val("");
	
	
	

    $.ajax({
    	url: '/ajax/callback_kashtan/process1.php',
        type: "POST",
        data: data,
        dataType: 'json',
        success: function(data) {
			
			  
			
			
          
		    }
			
		 	
    });
	
	
	
	
});

});//конец документа