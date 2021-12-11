var textsHome = ["un contrôle technique ? <img class='img-fluid home-img-car-inspection' src='./img/icone/car.png'>", 
"un déplacement de véhicule ? <img class='img-fluid home-img-car-travel' src='./img/icone/riding-car.png'>", 
"une sortie de fourrière ? <img class='img-fluid home-img-tow-truck' src='./img/icone/tow-truck.png'>"];

function rotateHomeText() {
    var ct = $("#text-home-rotate").data("text") || 0;
    $("#text-home-rotate")
        .data("text", ct == textsHome.length -1 ? 0 : ct + 1)
        .html(textsHome[ct])
        .slideDown()
        .delay(2000)
        .slideUp(200, rotateHomeText);
  }
  $(rotateHomeText);