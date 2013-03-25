$(document).ready(function(){
	$("#recuadro1").css("float","none");
	$("#recuadro1").css("margin","auto");
	$("#recuadro1").css("width","90%");
});

function InsertarDatos(){
		
		var idformato   =$('#idformato').attr('value');
		var idservicio  =$('#idservicio').attr('value');
		var idlocalidad =$('#idlocalidad').attr('value');
		var idmaterial  =$('#idmaterial').attr('value');
		var cantidad    =$('#cantidad').attr('value');
		
		$.ajax({
			url: 'asignar_material_nuevo.php',
			type: "POST",
			data: "submit=&formato="+formato+"&servicio="+servicio+"&localidad="+localidad+"&idmaterial="+idmaterial+"&cantidad="+cantidad,
			success: function(datos){
				ConsultaMAsignados();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
}

function ConsultaMAsignados(){
    $.ajax({
        url: 'asignar_material_consultar.php',
        cache: false,
        type: "GET",
        success: function(datos){
            $("#tabla").html(datos);
        }
    });
}

function EliminarMAsignados(id){
    var msg = confirm("Desea eliminar este dato?")
    if ( msg ) {
        $.ajax({
            url: 'asignar_material_eliminar.php',
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

function ActualizarMAsignados(){
    
	var idformato   =$('#idformato').attr('value');
	var idservicio  =$('#idservicio').attr('value');
	var idmaterial  =$('#idmaterial').attr('value');
	var idlocalidad =$('#idlocalidad').attr('value');
	
    var cantidad= $('#cantidad').attr('value');
    $.ajax({
        url: 'asignar_material_actualizar.php',
        type: "POST",
        data: "submit=&cantidad="+cantidad,
        success: function(datos){
            alert(datos);
            ConsultaMAsignados();
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