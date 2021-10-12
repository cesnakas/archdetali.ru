/* Add here all your JS customizations */
$(document).ready(function(){
    // $('.side-menu li div').on('click', function (){
    //     $(this).parent().toggleClass('active');
    // });

    $('.sclick-slider ul').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        rows:2,
        slidesPerRow: 1,
        infinite: false,
        prevArrow: '<a class="slick-arrow slick-prev-c" href="#"></a>',
        nextArrow: '<a class="slick-arrow slick-next-c" href="#"></a>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 569,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.tag_main .tag').on('click', function (e) {
        e.preventDefault();
        var id = $(this).attr('href').replace('#', '');
        $('.tag_main .tag').removeClass('active');
        $(this).addClass('active');
        console.log(id);

        if(id == 'all') {
            $('.services-item-wrapper .services-item').show();
        }else {
            $('.services-item-wrapper .services-item').hide();
            $('.services-item-wrapper .services-item.'+id).show();
        }

    })

    $("body").on('click', '[href*="#"]', function(e){
        var fixed_offset = 0;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    $('.calc-form, .questions-form').on('submit', function(e) {
        e.preventDefault();
        $('.message-form').html(' ');
        var data = $(this).serializeArray();

        $(this).css('display','none');
        $('.message-form').html('');
        $('.message-form').html('<span>Спасибо! В ближаший час мы с Вами свяжемся!</span>');
           if($(this).hasClass('questions-form')){
               $('.questions-form').parent().html('<span style="color: #fff;">Спасибо! В ближаший час мы с Вами свяжемся!</span>');
           }
        $('.message-form').show(350);
        $('.input-call1').val("");




        $.ajax({
            url: '/ajax/form.php',
            type: "POST",
            data: data,
            dataType: 'json',
            success: function(data) {
            console.log('res',data);

            }

        });
    });

});