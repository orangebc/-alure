$(document).ready(function() {
  /*-------------------Abrir------------------------------*/
    $("#boton_menu_open").click(function () {
        $('#scroll_menu').slideDown('up');
        $('#boton_menu_close').show();
        $('#boton_menu_open').hide();
    });

  /*-------------------Cerrar------------------------------*/	
    $("#boton_menu_close").click(function () {
        $('#scroll_menu').slideUp('up');
        $('#boton_menu_close').hide();
        $('#boton_menu_open').show();
    });		  

    $("#toggled").click(function(){
        $("#dropdown").toggle("slideDown");
    });

    // Custom hover Plantas Arquitectonicas
    $(".displayImage").click(function(){
        $(".displayed").hide();
        $('#' + $(this).attr('data-img')).show();
    });
	 
});