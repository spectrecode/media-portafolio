$(document).ready(function(){
    var he_menu = $(window).height();

    $("header").css("height",he_menu);

    $('.ancla').click(function(e){
        e.preventDefault();
        $('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
    });

    $("#btn-menu").click(function(){
    	$("header").addClass("active").removeClass("close");
        $(".menu-flotante").hide();
    });

    $("#btn-menu2").click(function(){
        $("header").addClass("close").removeClass("active");
        $(".menu-flotante").show();
    });
    $("#search-input").keypress(function(event){
      valor = $(this).val();
      newValor = valor.replace(" ","+");
      if (event.which == 13) {
         $(location).attr('href', 'http://www.mediaimpact.pe/buscar.php?termino='+newValor);
      }
    });
});
$(window).resize(function(){
 	var he_menu = $(window).height();

    $("header").css("height",he_menu);
});