$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var nombre=$('#nombre').attr('value');
		var descripcion=$('#descipcion').attr('value');
		
		$.ajax({
			url: 'piso_nuevo.php',
			type: "POST",
			data: "submit=&nombre="+nombre+"&descripcion="+descripcion,
			success: function(datos){
				ConsultaPisos();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaPisos(){
    $.ajax({
        url: 'piso_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarPiso(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'piso_eliminar.php',
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

function ActualizarPiso(){
    var id = $('#id').attr('value');
    var nombre= $('#nombre').attr('value');
    var descripcion= $('#descripcion').attr('value');
    $.ajax({
        url: 'piso_actualizar.php',
        type: "POST",
        data: "submit=&nombre="+nombre+"&descripcion="+descripcion,
        success: function(datos){
            alert(datos);
            ConsultaPisos();
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