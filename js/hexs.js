$(init);

function init() {
    $.ajax({url:'../php/getMateriais.php', success:function(aJSON) {
        var datos = eval(aJSON);
        for (i of datos) {
            var imaxe = datos[i].nombre;
            var div = $('<div class="hexagono"><div></div></div>').append(imaxe);
            $('#categories').append(div);
            console.log(datos[i]);
        }
    }});
}
