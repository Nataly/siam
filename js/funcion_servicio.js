$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var idtiposervicio=$('#$idtiposervicio').attr('value');
		var nombre=$('#nombre').attr('value');
		var descripcion=$('#descripcion').attr('value');
		
		
		$.ajax({
			url: 'servicio_nuevo.php',
			type: "POST",
			data: "submit=&idtiposervicio"+idtiposervicio+"&nombre="+nombre+"&descripcion="+descripcion,
			success: function(datos){
				ConsultaServicios();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}


function ConsultaServicios(){
    $.ajax({
        url: 'servicio_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarServicio(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'servicio_eliminar.php',
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

function ActualizarServicio(){
    	var id = $('#id').attr('value');
       	var idtiposervicio=$('#$idtiposervicio').attr('value');
		var nombre=$('#nombre').attr('value');
		var descripcion=$('#descripcion').attr('value');
    $.ajax({
        url: 'servicio_actualizar.php',
        type: "POST",
        data: "submit=&idtiposervicio"+idtiposervicio+"&nombre="+nombre+"&descripcion="+descripcion,
        success: function(datos){
            alert(datos);
            ConsultaServicios();
            $("#formulario").hide();
            $("#tabla").show();
        }
    });
    return 
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