$(document).ready(function (){
    $("#boton1").click(function(e){
        alert("Evento click boton 1");
    });

    $("#div1").on("dblclick", function(){
        alert("Evento doble click");
    });

    $("#input1").focus(function(e){
        console.log("Método focus al dar click en el imput");
    });

    $("#texto1").hover(function(){
        $("#texto1").css("background-color","red");
    },function(){
        $("#texto1").css("background-color","white");
    });

    $("#input2").keydown(function(e){
        console.log("key down");
        $("#input2").css("background-color","lightblue");
    });
});