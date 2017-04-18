$( document ).ready(function() {


    $("#filtroCuentas").change(function(){
        if($(this).val() === 'Todos'){
            $(".Aprobada").addClass("animated slideInRight");
            $(".Solicitada").addClass("animated slideInRight");
            $(".Cancelada").addClass("animated slideInRight");
            setTimeout(function () {
                $(".Aprobada").removeClass("animated slideInRight");
                $(".Solicitada").removeClass("animated slideInRight");
                $(".Cancelada").removeClass("animated slideInRight");
                $(".Aprobada").css("display","");
                $(".Solicitada").css("display","");
                $(".Cancelada").css("display","");
            },1000);    
        }
        if($(this).val() === 'Aprobada'){
            $(".Aprobada").addClass("animated slideInRight");
            $(".Solicitada").addClass("animated slideOutRight");
            $(".Cancelada").addClass("animated slideOutRight");
            setTimeout(function () {
                $(".Aprobada").removeClass("animated slideInRight");
                $(".Solicitada").removeClass("animated slideOutRight");
                $(".Cancelada").removeClass("animated slideOutRight");
                $(".Aprobada").css("display","");
                $(".Solicitada").css("display","none");
                $(".Cancelada").css("display","none");
            },1000); 
        }

        if($(this).val() === 'Solicitada'){
            $(".Aprobada").addClass("animated slideOutRight");
            $(".Solicitada").addClass("animated slideInRight");
            $(".Cancelada").addClass("animated slideOutRight");
            setTimeout(function () {
                $(".Aprobada").removeClass("animated slideOutRight");
                $(".Solicitada").removeClass("animated slideInRight");
                $(".Cancelada").removeClass("animated slideOutRight");
                $(".Aprobada").css("display","none");
                $(".Solicitada").css("display","");
                $(".Cancelada").css("display","none");
            },1000); 
            
        }

        if($(this).val() === 'Cancelada'){
            $(".Aprobada").addClass("animated slideOutRight");
            $(".Solicitada").addClass("animated slideOutRight");
            $(".Cancelada").addClass("animated slideInRight");
            setTimeout(function () {
                $(".Aprobada").removeClass("animated slideOutRight");
                $(".Solicitada").removeClass("animated slideOutRight");
                $(".Cancelada").removeClass("animated slideInRight");
                $(".Aprobada").css("display","none");
                $(".Solicitada").css("display","none");
                $(".Cancelada").css("display","");
            },1000); 
            
 
        }
    });
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

    $(".flash-hover").hover(
            function(){$(this).addClass('animated flash');},
            function(){$(this).removeClass('animated flash');}
        );
    $(".jello-hover").hover(
            function(){$(this).addClass('animated jello');},
            function(){$(this).removeClass('animated jello');}
        );
    $(".div-link").click(function(){
        window.location = $(this).attr("url");
    });
    $("#loginactivator").click(function(){
        $("#login-dp").addClass('animated fadeIn');
    });


    $('button[name="TransaccionSubmit"]').on('click', function(e) {
      var $form = $(this).closest('form');
      e.preventDefault();
      $('#myModal').modal({
          backdrop: 'static',
          keyboard: false
        })
        .one('click', '#confirmar', function(e) {
          $form.trigger('submit');
        });
    });

    $("#formTransferir").submit(function() {
        var destino = $("#destino").val();
        var monto = $("#monto").val();
        if(isNaN(destino)){
            $(".alert").remove();
            $("#destino-input-group").append("<div class='alert alert-danger animated bounceIn' alert='alert'>Solo se permiten numeros</div>");
            return false;
        }else if(isNaN(monto)){
            $(".alert").remove();
            $("#monto-input-group").append("<div class='alert alert-danger animated bounceIn' alert='alert'>Solo se permiten numeros</div>");
            return false;
        }else{
            return true;
        }
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

