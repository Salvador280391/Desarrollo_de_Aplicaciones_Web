function validarFormulario(){

    $('.alert').remove();

    var comentario = { };
    comentario['propertyKey'] = 'value';

    if(comentario =="" || comentario ==null){
        console.log('comentario vacio');
        cambiarColor(comentario);

        mostrarAlerta("Campo obligatorio");
        return false;
    }
    
}

function cambiarColor(dato){
    $('#'+ dato).css({
        border = "1px solid #dd5144"
    });
}

function mostrarAlerta(texto){
    $('comentario').before('<div class="alert">Error:</div>');
}