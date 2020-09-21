let $ = require('jquery');
$(document).ready(function(){
    $.ajax(
        {
            url: 'http://localhost:8000/Casa/php-ajax-dischi/src/server-ajax.php',
            method: 'GET',
            success: function(risposta){
                getData(risposta)
            },
            error: function(){
                    alert("errore");
            }
        }
        
    )
});


function getData(data){
    var source = $("#template").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < data.length; i++) {
        var item = {
            'titolo': data[i].title,
            'autore': data[i].author,
            'anno': data[i].year,
            'cover': data[i].poster
        };
        var html = template(item);
        $('.container').append(html);
    };
}