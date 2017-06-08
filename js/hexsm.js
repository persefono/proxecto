$(init);

function init() {
    var lan = $('#menu a').eq(0).attr('href').split('=')[1];
    $.ajax({url:'php/getMateriais.php', data:{lang: lan}, dataType:'JSON', type:'POST', success:function(aJSON) {
        var datos = eval(aJSON);
        for (dato of datos) {
            var nome = dato.nombre;
            var ruta = "imgs/" + nome.toLowerCase() + ".jpg";
            var alte = "Madera de " + nome.toLowerCase();
            var imaxe = $('<img>').attr({
              'src': ruta,
              'alt': alte
            });
            var titulo = $('<h1></h1>').text(nome.toUpperCase());
            var div = $('<div class="hexagono"></div>').append($('<div></div>').append(imaxe).append(titulo));
            $('#categories').append(div);
            $.ajax({url:'php/getSubmateriais.php', data:{id:dato.idMadera, lang: lan}, dataType:'JSON', type:'POST', async: false, success:function(aJSON) {
                var datos = eval(aJSON);
                var p = $('<p></p>');
                for (mad of datos) {
                    var nome = mad.nombre;
                    if(dato.nombre.toLowerCase() == "tropicais" || dato.nombre.toLowerCase() == "tropicales") {
                        p.addClass('columnas');
                    }
                    p.append(nome + '<br/>');
                }
                $('.hexagono:last div').append(p);
            }});
        }
    }});
}
