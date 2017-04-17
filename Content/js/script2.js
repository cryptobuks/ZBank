$( document ).ready(function() {

    $(".tada-hover").hover(
    		function(){$(this).addClass('animated tada');},
    		function(){$(this).removeClass('animated tada');}
    	);
    $(".pulse-hover").hover(
    		function(){$(this).addClass('animated pulse');},
    		function(){$(this).removeClass('animated pulse');}
    	);
    $(".rubber-hover").hover(
    	function(){$(this).addClass('animated rubberBand');},
    	function(){$(this).removeClass('animated rubberBand');}
    );

    $("#loginactivator").click(function(){
        $("#login-dp").addClass('animated fadeIn');
    });
    $("#formRegistro").submit(function() {
        var cedula = $("#cedula").val();
        var telefono = $("#telefono").val();
        if(isNaN(cedula)){
            $(".alert").remove();
            $("#cedula-input-group").append("<div class='alert alert-danger animated bounceIn' alert='alert'>Solo se permiten numeros</div>");
            return false;
        }else if(cedula.length != 11){
            $(".alert").remove();
            $("#cedula-input-group").append("<div class='alert alert-danger animated bounceIn' alert='alert'>Se necesitan 11 digitos</div>");
            return false;
        }else if(isNaN(telefono)){
            $(".alert").remove();
            $("#tel-input-group").append("<div class='alert alert-danger animated bounceIn' alert='alert'>Solo se permiten numeros</div>");
            return false;
        }else{
            return true;
        }
    });
});

