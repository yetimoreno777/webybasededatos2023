$(document).ready(function () {
    $("#boton1").on("click", function(){
        console.log("si jala");
        $("#texto1").html("texto perron");
    });

    $("#texto1").hover(function (){
            $(this).css("background-color", "blue");
        }, function (){
            $(this).css("background-color", "white");
            console.log("waos");
        }
    );

    $("#boton2").click(function(e){
        console.log("si jalax2");
        $("#imagen1").fadeToggle();
    });
});