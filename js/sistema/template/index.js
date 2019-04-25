$(document).ready(function() {
    $('#idioma li a ,#idioma2 li a').click(function() {

        var id = $(this).attr('id');
        $.ajax({
            url: '/inicio',
            type: 'post',
            data: {
                'id': id
            },
            success: function() {
                location.reload(true);
            }
        })
    });

}); // This is just a sample script. Paste your real code (javascript or HTML) here.

$(document).ready(function() {
    $('.partners-responsive').slick({
        dots: false,
        infinite: false,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 880,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 670,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
		}, {
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });
});