jQuery(document).ready(function() {

    jQuery('.logo-row .top-callback .callback span').click(function(){
            yaCounter38563615.reachGoal('click');
            gtag('config', 'UA-82090798-12',{'page_path': '/click'})
            console.log('click');
            setTimeout(otrzv, 500);
    });
      
    function otrzv(){  
       jQuery('form[name="aspro_stroy_callback"] .btn').on( "click", function() {
                if (jQuery('form[name="aspro_stroy_callback"] #FIO').val()!='' || jQuery('form[name="aspro_stroy_callback"] #PHONE').val()!='') {
                    yaCounter38563615.reachGoal('otrzv');
                    gtag('config', 'UA-82090798-12',{'page_path': '/otrzv'})
                    console.log('otrzv');
                }    
            });
    }

    jQuery('.form1-submit input[type="submit"]').click(function(){
        if (jQuery('.form1 input[name="PHONE"]').val()!='') {
            yaCounter38563615.reachGoal('otpr');
            gtag('config', 'UA-82090798-12',{'page_path': '/otpr'})
            console.log('otpr');
        }
    });
   
    jQuery('.big-contact-form.callbackform input[type="submit"]').click(function(){
         if (jQuery('.big-contact-form.callbackform input[name="PHONE"]').val()!='') {
            yaCounter38563615.reachGoal('konsylt');
            gtag('config', 'UA-82090798-12',{'page_path': '/konsylt'})
            console.log('konsylt');
        }
    });

    jQuery('.call_phone_4').click(function(){
            yaCounter38563615.reachGoal('clic-tel');
            gtag('config', 'UA-82090798-12',{'page_path': '/clic-tel'})
            console.log('clic-tel');
    });

});
