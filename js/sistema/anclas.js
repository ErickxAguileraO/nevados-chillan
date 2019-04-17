$(document).ready(function () {
    var url = window.location.href; 
    var value = '#';
    var hash = url.indexOf(value);
    var anchor = url.substring(hash + value.length, url.length);

    setTimeout(function () {
        window.location.hash = "#" + anchor;
        //alert('delay');
    }, 3000);

});

