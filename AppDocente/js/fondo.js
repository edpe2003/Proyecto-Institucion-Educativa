function seleccionarFondo(fondo) {
  event.preventDefault();
  $.ajax({
      type: "post",
      data: {
          "fondo": fondo
      },
      url: "controller/fondoChat.php",
      success: function () { 
          window.location.href = "home.php";
      }
  }) 
}