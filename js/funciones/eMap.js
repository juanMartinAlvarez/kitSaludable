/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// emap es una función de jquery que utiliza ajax para mandar información de un lado a otro /

function eMap(){
    $.ajax({
        // En data puedes utilizar un objeto JSON, un array o un query string
        data: {"access" : arguments[0]},
        
        //cambiar a type: POST si es necesario
        type: "GET",
        
        //formato de datos que se espera en la respuesta
        dataType: "json",
        
        //url a la que se enviará la solicitud Ajax
        url: "http://localhost:8080/Kitsaludable/index.html/webresources/generic"
    })
    
            .done(function( data, textStatus, jqXHR ) {
               $("#contenedor").html(data.reply);
               if(console && console.log ) {
                   console.log( "La solicitud se ha completado correctamente wachin!! ");
               }
    })
    
            .fail(function( jqXHR, textStatus, errorThrown ) {
                if ( console && console.log ) {
                    console.log( "La solicitud a fallado: " + textStatus);
                }
    })
}