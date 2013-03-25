$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		var cedula=$('#cedula').attr('value');
		var nombre=$('#nombre').attr('value');
		var nomusuario=$('#nomusuario').attr('value');
		var password=$('#password').attr('value');
		var nacionalidad=$('#nacionalidad').attr('value');		
		
		$.ajax({
			url: 'usuario_nuevo.php',
			type: "POST",
			data: "submit=&cedula="+cedula+"&nombre="+nombre+"&nomusuario="+nomusuario+"&password="+password+"&nacionalidad="+nacionalidad,
			success: function(datos){
				ConsultaUsuarios();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaUsuarios(){
    $.ajax({
        url: 'usuario_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarUsuario(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'usuario_eliminar.php',
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

function ActualizarUsuario(){
    var id = $('#id').attr('value');
    var cedula=$('#cedula').attr('value');
	var nombre=$('#nombre').attr('value');
	var nomusuario=$('#nomusuario').attr('value');
	var password=$('#password').attr('value');
	var nacionalidad=$('#nacionalidad').attr('value');	
    $.ajax({
        url: 'usuario_actualizar.php',
        type: "POST",
        data: "submit=&cedula="+cedula+"&nombre="+nombre+"&nomusuario="+nomusuario+"&password="+password+"&nacionalidad="+nacionalidad,
        success: function(datos){
            alert(datos);
            ConsultaUsuarios();
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