$(init);

function init() {
    var lan = $('#menu a').eq(0).attr('href').split('=')[1];
    $.ajax({url:'php/getCatalogo.php', data:{lang: lan}, dataType:'JSON', type:'POST', success:function(aJSON) {
        var datos = eval(aJSON);
        for (dato of datos) {
            var nome = dato.nombre;
            var ruta = "imgs/" + nome.split(" ")[0].toLowerCase() + ".jpg";
            var imaxe = $('<img>').attr({
              'src': ruta,
              'alt': nome.toLowerCase()
            });
            var titulo = $('<h1></h1>').text(nome.toUpperCase());
            var div = $('<div class="hexagono"></div>').append($('<div></div>').append(imaxe).append(titulo));
            $('#categories').append(div);
            $.ajax({url:'php/getSubcatalogo.php', data:{id:dato.idCatalogo, lang: lan}, dataType:'JSON', type:'POST', async: false, success:function(aJSON) {
                var datos = eval(aJSON);
                var p = $('<p></p>');
                for (cat of datos) {
                    var nome = cat.nombre;
                    p.append(nome + '<br/>');
                }
                $('.hexagono:last div').append(p);
            }});
        }
    }});
}
