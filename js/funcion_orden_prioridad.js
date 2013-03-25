$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var nombre=$('#nombre').attr('value');
		
		$.ajax({
			url: 'orden_nuevo.php',
			type: "POST",
			data: "submit=&nombre="+nombre,
			success: function(datos){
				ConsultaOrdenes();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaOrdenes(){
    $.ajax({
        url: 'orden_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarOrden(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'orden_eliminar.php',
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

function ActualizarOrden(){
    var id = $('#id').attr('value');
    var nombre= $('#nombre').attr('value');

    $.ajax({
        url: 'orden_actualizar.php',
        type: "POST",
        data: "submit=&nombre="+nombre,
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