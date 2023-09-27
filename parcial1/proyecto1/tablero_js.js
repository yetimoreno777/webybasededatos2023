$(document).ready(function(){
  $("#boton").hide();
  var i = 1, god = 1, aux = 0, puntos = 0;
  var vuelta = true;
  var seleccion = 0;
  console.log(21%7);
/********************************************************************/
  $("#boton").click(function(){
    $("#boton").hide();
    var x = setInterval(function(){
      console.log(i);
      $("#" + i).css("border", "8px solid yellow");
      i++, god++;
      vuelta = false;
      if(i == 28){
        $("#27").css("border", "1px solid black");
      }
      if(i == 29){
        $("#28").css("border", "1px solid black");
        i = 1;
      }
      var w = Math.floor(Math.random()*29+1)
      if(god == 87){
        aux = god + w;
      }
      if(god == aux){
        $("#puntos").html("Creditos:" + puntos);
        $("#boton").show();
        clearInterval(x, y);
        si_cae_en();
        aux = 0, god = 1, w = 0;
        vuelta = true;
        $("#"+ (i-1)).css("border", "10px solid red");
        if(puntos < 1) {
          $("#boton").hide();
          $("#puntos").html("que pardillo, perdiste");
          vuelta = false;
        }
      }
      var y = setInterval(function(){
        z = Math.floor(Math.random()*29+1)
        $("#" + (i-2)).css("border", "1px solid black");
      }, 70);
    }, 70);
  });
/********************************************************************/
  $(document).keydown(function (event) {
    if (vuelta === true) {
      $("#boton").show();
      console.clear();
  
      if (event.keyCode >= 49 && event.keyCode <= 55) {
        var imagenIndex = event.keyCode - 49;
        seleccion = imagenIndex;
        var imagenNombre = String.fromCharCode(97 + imagenIndex);
        console.log("a:" + seleccion);
        $("#img").attr("src", "imagenes/" + imagenNombre + ".jpg");
        $("#img").attr("src", "imagenes/" + imagenNombre + ".jpg");
      }
    }
  });
/********************************************************************/
  function si_cae_en() {
    i--;
    console.log("casilla que callo:"+ i);
    var casillasEspeciales = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28];
    if (casillasEspeciales.includes(i)) {
      if (i % 7 === 0) {
        puntos += 4;
        console.log("sumo 4 puntos");
      } else if (i % 7 === 1 || i % 7 === 3 || i % 7 === 5) {
        puntos++;
        console.log("sumo 1 punto");
      } else if (i % 7 === 2) {
        puntos += 5;
        console.log("sumo 5 puntos");
      } else if (i % 7 === 4) {
        puntos += 7;
        console.log("sumo 7 puntos");
      }
    } else {
      puntos--;
    }
  }
});

