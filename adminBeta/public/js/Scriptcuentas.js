$(document).ready(function(){
       
       /*Bloqueo de input text*/
       $("#zonaCli").attr('disabled','disabled');
       $("#nUsr").attr('disabled','disabled');
       $("#aUsr").attr('disabled','disabled');
       $("#txtDir").attr('disabled','disabled');
       //$("#contCli").attr('disabled','disabled');
       $("#nodoCli").attr('disabled','disabled');
       $("#rutaCli").attr('disabled','disabled');
       $("#zonaCli").attr('disabled','disabled');
  
       /*ocultar alert*/
	    $('#alert-i').hide();
       $('#alert-d').hide();


     /*inicio guardar TT*/

     $('#btn-saveOT').click(function(e){
        
            /*Previene el refres de la pagina*/
             e.preventDefault();            

             /*captura del formulario*/   
            var form = $(this).parents('form');
           

            //Reenplaso por comodin codigo traido desde el form
            var urls = form.attr('action');   
            var metodo = form.attr('method');
            
            var obj = {id: 1, name: "Some name", color: '#444444' };
            var serialized = JSON.stringify(obj);
            console.log(serialized);
            console.log($("#zonaCli").val().serialized);
            $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: metodo,
                    url: urls,
                    dataType: "json",
                    data: {'id_tipoot' : 1, 'id_cuenta' : 3, 'otsiebel': "", 'comentario': "cj", 'fechaprog': "2018-03-16 09:18:56",
                           'jornada' : "AM", 'comentariounidad' : "comentario", 'estado' : 0, 'id_unidad': 1, 'id_otstado' : 1},
                    success: function(result){
                          $('#alert-d2').html("Transaccion exitosa");
                          console.log("Data Save:"+result.message);
                    },
                    error: function(result){
                        $('#alert-d2').html("Transaccion erronea");
                         console.log("Error"+result.message);
                    }
             });

            
          
           
          
      });
          
  



















       /* incio btn buscar*/
	  
     $('#btn-buscar').click(function(e){
        
            /*Previene el refres de la pagina*/
             e.preventDefault();
             
             /*Limpieza de los imput*/
             $("#nUsr").val(" ");
             $("#aUsr").val(" ");
             $("#txtDir").val(" ");
             $("#contCli").val(" ");
             $("#nodoCli").val(" ");
             $("#rutaCli").val(" ");
             $("#zonaCli").val(" ");

             /*captura del formulario*/   
            var form = $(this).parents('form');
            
            //console.log($("#iCod").val());

            //Reenplaso por comodin codigo traido desde el form
          var url = form.attr('action').replace(':COD',$("#iCod").val());   
          
          $.post(url, form.serialize(), function(result){
                
                 /*asingnacion de valores*/
                 $('#alert-d').hide();
                 $('#alert-i').show();
            	  $('#alert-i').html(result.message);
                 $("#nUsr").val(result.nombre);
                 $("#aUsr").val(result.apellido);
                 $("#txtDir").val(result.direccion);
                 $("#contCli").val(result.contactos);
                 $("#nodoCli").val(result.nodo);
                 $("#rutaCli").val(result.ruta);
                 $("#zonaCli").val(result.zona);
                

            }).fail(function(e){
                   /*error*/
                    $('#alert-i').hide();
                    $('#alert-d').show();
                    $('#alert-d').html("!!Error!!, Dato ingresado invalido 'o' revise su conexiòn a internet.");
            		});
	        
			});

    
});