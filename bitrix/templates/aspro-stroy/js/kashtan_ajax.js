$(document).ready(function(){
/*ajax �������� �����*/
//start the ajax
  $('.callbackform').on('submit', function(e) {
    e.preventDefault();
    $('.message-form').html(' ');
    var data = $(this).serializeArray();
	
	$('.callbackform').css('display','none');
	  $('.message-form').html('');
	  $('.message-form').html('<span>�������! � �������� ��� �� � ���� ��������!</span>');
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

});//����� ���������