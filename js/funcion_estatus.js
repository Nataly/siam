$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var nombre=$('#nombre').attr('value');
		var descripcion=$('#descipcion').attr('value');
		
		$.ajax({
			url: 'estatus_nuevo.php',
			type: "POST",
			data: "submit=&nombre="+nombre+"&descripcion="+descripcion,
			success: function(datos){
				ConsultaEstatus();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaEstatus(){
    $.ajax({
        url: 'estatus_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarEstatus(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'estatus_eliminar.php',
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

function ActualizarEstatus(){
    var id = $('#id').attr('value');
    var nombre= $('#nombre').attr('value');
    var descripcion= $('#descripcion').attr('value');
    $.ajax({
        url: 'estatus_actualizar.php',
        type: "POST",
        data: "submit=&nombre="+nombre+"&descripcion="+descripcion,
        success: function(datos){
            alert(datos);
            ConsultaEstatus();
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