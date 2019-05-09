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

