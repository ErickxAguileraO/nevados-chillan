$(document).ready(function(){
  $('.popup-rs').click(function(event) {
    var width  = screen.width/2,
        height = screen.height/2,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    window.open(url, this.title, opts);
    return false;
  });
});