$(document).ready(function(){


    $('button[route]').on('click', function(){

        if($(this).attr('route') != undefined ){

            routeto($(this).attr('route'));
        }

    });

});


function routeto($route){
    window.location.href = $route;
}

