/* Add here all your JS customizations */
$(document).ready(function(){
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

        if(id == 'all') {
            $('.js-tags_main .items>div').show();
        }else {
            $('.js-tags_main .items>div').hide();
            $('.js-tags_main .items .'+id).show();
        }

    })
});