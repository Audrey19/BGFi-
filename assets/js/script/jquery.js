
$('div.box, div.domain').click(function(){
    if($('div.box, div.domain').hasClass("current")){
        $('div.box, div.domain').removeClass("current");
        $('div.sub-domain').removeClass("current");
    }
    var nomDom =  $(this).data('domaine');
    $("."+ nomDom).toggleClass("current");
    $("div.domain."+ nomDom).next().toggleClass("current");
});

$('a[href*=\\#]').on('click', function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
});