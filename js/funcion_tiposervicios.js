$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var nombre=$('#nombre').attr('value');
		var descripcion=$('#descipcion').attr('value');
		var idorden=$('#idorden').attr('value');
		
		$.ajax({
			url: 'tiposervicios_nuevo.php',
			type: "POST",
			data: "submit=&nombre="+nombre+"&descripcion="+descripcion+"&idorden="+idorden,
			success: function(datos){
				ConsultaTiposervicios();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaTiposervicios(){
    $.ajax({
        url: 'tiposervicios_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarTiposervicios(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'tiposervicios_eliminar.php',
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

function ActualizarTiposervicios(){
    var id = $('#id').attr('value');
    var nombre= $('#nombre').attr('value');
    var descripcion= $('#descripcion').attr('value');
	var idorden=$('#idorden').attr('value');
    $.ajax({
        url: 'tiposervicios_actualizar.php',
        type: "POST",
        data: "submit=&nombre="+nombre+"&descripcion="+descripcion+"&idorden="+idorden,
        success: function(datos){
            alert(datos);
            ConsultaTiposervicios();
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