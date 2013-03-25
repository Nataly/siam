$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var nombre=$('#nombre').attr('value');
		var cantidad=$('#cantidad').attr('value');
		var unidad=$('#unidad').attr('value');
		
		
		$.ajax({
			url: 'material_nuevo.php',
			type: "POST",
			data: "submit=&nombre="+nombre+"&cantidad="+cantidad+"&unidad"+unidad,
			success: function(datos){
				ConsultaMateriales();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}


function ConsultaMateriales(){
    $.ajax({
        url: 'material_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarMaterial(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'material_eliminar.php',
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

function ActualizarMaterial(){
    	var id = $('#id').attr('value');
		var nombre=$('#nombre').attr('value');
		var cantidad=$('#cantidad').attr('value');
    $.ajax({
        url: 'material_actualizar.php',
        type: "POST",
        data: "submit=&nombre="+nombre+"&cantidad"+cantidad,
        success: function(datos){
            alert(datos);
            ConsultaMateriales();
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