$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var idcentro=$('#idcentro').attr('value');
		var idedificio=$('#idedificio').attr('value');
		var idpiso=$('#idpiso').attr('value');
		var nombre=$('#nombre').attr('value');
		
			
		$.ajax({
			url: 'localidades_nuevo.php',
			type: "POST",
			data: "submit=&idcentro="+idcentro+"&idedificio="+idedificio+"&idpiso="+idpiso+"&nombre="+nombre,
			success: function(datos){
				ConsultaLocalidades();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}


function ConsultaLocalidades(){
    $.ajax({
        url: 'localidades_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarLocalidades(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'localidades_eliminar.php',
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

function ActualizarLocalidades(){
    var id =$('#id').attr('value');
   	var idcentro=$('#idcentro').attr('value');
	var idedificio=$('#idedificio').attr('value');
	var idpiso=$('#idpiso').attr('value');
	var nombre=$('#nombre').attr('value');
    $.ajax({
        url: 'localidades_actualizar.php',
        type: "POST",
        data: "submit=&idcentro="+idcentro+"&idedificio="+idedificio+"&idpiso="+idpiso+"&nombre="+nombre,
        success: function(datos){
            alert(datos);
            ConsultaLocalidades();
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