$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
	    var idformato=$('#idformato').attr('value');
		var idservicio=$('#idservicio').attr('value');
		var idlocalidad=$('#idlocalidad').attr('value');
		var descripcion=$('#descripcion').attr('value');
		var justificacion=$('#justificacione').attr('value');
		var estatus=$('#estatus').attr('value');
		var Hfecha_in=$('#Hfecha_in').attr('value');
		var Hobservacion=$('#Hobservacion').attr('value');
	
		
		$.ajax({
			url: '_planilla/item_nuevo.php',
			type: "POST",
			data: "submit=&idformato="+idformato+"&idservicio="+idservicio+"&idcentro="+idcentro+"&descripcion="+descripcion+"&justificacion="+justificacion+"&estatus="+estatus+"&Hfecha_in="+Hfecha_in+"&Hobservacion="+Hobservacion,
			success: function(datos){
				
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function InsertarDatos2(){
	    var idformato=$('#idformato').attr('value');
		var idservicio=$('#idservicio').attr('value');
		var idlocalidad=$('#idlocalidad').attr('value');
		var descripcion=$('#descripcion').attr('value');
		var justificacion=$('#justificacione').attr('value');
		var estatus=$('#estatus').attr('value');
		var Hfecha_in=$('#Hfecha_in').attr('value');
		var Hhora=$('#Hhora').attr('value');
		var Hobservacion=$('#Hobservacion').attr('value');
	
		
		$.ajax({
			url: '_asiganacion/estatus_asignar.php',
			type: "POST",
			data: "submit=&idformato="+idformato+"&idservicio="+idservicio+"&idcentro="+idcentro+"&descripcion="+descripcion+"&justificacion="+justificacion+"&estatus="+estatus+"&Hfecha_in="+Hfecha_in+"&Hhora="+Hhora+"&Hobservacion="+Hobservacion,
			success: function(datos){
				
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function InsertarPlanilla(){

	    var idformato=$('#idformato').attr('value');
		var jefe_tipn=$('#jefe_tipn').attr('value');
		var jefe_nacio=$('#jefe_nacio').attr('value');
		var jefe_cedula=$('#jefe_cedula').attr('value');
		var jefe_centro=$('#jefe_centro').attr('value');
		var jefe_fechaCentro=$('#jefe_fechaCentro').attr('value');
		var formato_fecha=$('#formato_fecha').attr('value');
		var jefe_fechain=$('#jefe_fechain').attr('value');
	
		
		$.ajax({
			url: '_planilla/planilla_nuevo.php',
			type: "POST",
			data: "submit=&idformato="+idformato+"&jefe_tipn="+jefe_tipn+"&jefe_nacio="+jefe_nacio+"&jefe_cedula="+jefe_cedula+"&jefe_centro="+jefe_centro+"&jefe_fechaCentro="+jefe_fechaCentro+"&formato_fecha="+formato_fecha+"&jefe_fechain="+jefe_fechain,
			success: function(datos){
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaCriterios(){
    $.ajax({
        url: 'criterio_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarItem(id,id2,id3,id4){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: '_planilla/item_eliminar.php',
            type: "GET",
            data: "id="+id+"id2"+id2+"id3"+id3+"id4"+id4,
            success: function(datos){
                alert(datos);
                $("#fila-"+id).remove();
            }
        });
    }
    return false;
}

function EliminarPlanilla(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: '_planilla/planilla_eliminar.php',
            type: "GET",
            data: "id="+id,
            success: function(datos){
                alert(datos);
                $("#fila-"+id).remove();
            }
        });
    }
    return false;
}

function ActualizarCriterios(){
    var id = $('#id').attr('value');
    var nombre= $('#nombre').attr('value');
    var descripcion= $('#descripcion').attr('value');
    $.ajax({
        url: 'criterio_actualizar.php',
        type: "POST",
        data: "submit=&nombre="+nombre+"&descripcion="+descripcion,
        success: function(datos){
            alert(datos);
            ConsultaCriterios();
            $("#formulario").hide();
            $("#tabla").show();
        }
    });
    return false;
}

function Cancelar(){
    $("#formulario").hide();
    $("#tabla").show();
    return false;
}

function redirigir(pag){
    document.location.href=pag;
}

function recargar(id){
    alert(id);
    location.reload();	
}