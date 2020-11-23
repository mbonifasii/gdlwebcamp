(function () {
  "use strict";

  let regalo = document.getElementById("regalo");

  document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("mapa")) {
      var map = L.map("mapa").setView([14.581258, -90.528202], 16);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker([14.581258, -90.528202])
        .addTo(map)
        .bindPopup("GBLWebCamp 2020 voletos ya disponibles")
        .openPopup()
        .bindTooltip("Un tooltip")
        .openTooltip();
    }
    //Campos datos usuario
    let nombre = document.getElementById("nombre");
    let apellido = document.getElementById("apellido");
    let email = document.getElementById("email");

    //Campos pases
    let pase_dia = document.getElementById("pase_dia");
    let pase_dosdias = document.getElementById("pase_dosdias");
    let pase_completo = document.getElementById("pase_completo");

    //Botones y los divs
    var calcular = document.getElementById("calcular");
    let errorDiv = document.getElementById("error");
    let botonRegistro = document.getElementById("btnRegistro");
    let listaProductos = document.getElementById("lista-productos");
    let suma = document.getElementById("suma-total");

    //Extras
    let camisas = document.getElementById("camisa_evento");
    let etiquetas = document.getElementById("etiquetas");

    botonRegistro.disabled = true;

    if (document.getElementById("calcular")) {
      calcular.addEventListener("click", calcularMontos);
      pase_dia.addEventListener("blur", mostrarDias);
      pase_dosdias.addEventListener("blur", mostrarDias);
      pase_completo.addEventListener("blur", mostrarDias);

      nombre.addEventListener("blur", validarCampos);
      apellido.addEventListener("blur", validarCampos);
      email.addEventListener("blur", validarCampos);
      email.addEventListener("blur", valirdarMail);

      function validarCampos() {
        if (this.value === "") {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Este campo es obligatorio";
          this.style.border = "1px solid red";
          errorDiv.style.border = "1px solid red";
          errorDiv.style.fontWeight = "bold";
        } else {
          errorDiv.style.display = "none";
          this.style.borderBottom = "3px solid #fe4818";
        }
      }

      function valirdarMail() {
        if (this.value.indexOf("@") > -1) {
          errorDiv.style.display = "none";
          this.style.border = "none";
          this.style.borderBottom = "3px solid #fe4818";
        } else {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Debe tener al menos una @";
          this.style.border = "1px solid red";
          errorDiv.style.border = "1px solid red";
          errorDiv.style.fontWeight = "bold";
        }
      }

      function calcularMontos(event) {
        event.preventDefault();

        if (regalo.value === "") {
          alert("Debes elegir un regalo");
          regalo.focus();
        } else {
          let boletosDia = parseInt(pase_dia.value, 10) || 0,
            boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
            boletoCompleto = parseInt(pase_completo.value, 10) || 0,
            cantCamisas = parseInt(camisas.value, 10) || 0,
            cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

          let totalPagar =
            boletosDia * 30 +
            boletosDosDias * 45 +
            boletoCompleto * 50 +
            cantCamisas * 10 * 0.93 +
            cantEtiquetas * 2;

          let listadoProductos = [];

          if (boletosDia >= 1) {
            listadoProductos.push(boletosDia + " Pase(s) por un dia");
          }

          if (boletosDosDias >= 1) {
            listadoProductos.push(boletosDosDias + " Pase(s) por  2 dias");
          }
          if (boletoCompleto >= 1) {
            listadoProductos.push(boletoCompleto + " Pase(s) completo(s)");
          }

          if (cantCamisas >= 1) {
            listadoProductos.push(cantCamisas + " camisa(s)");
          }
          if (cantEtiquetas >= 1) {
            listadoProductos.push(cantEtiquetas + " etiqueta(s)");
          }

          listaProductos.style.display = "block";
          listaProductos.innerHTML = " ";

          for (let i = 0; i < listadoProductos.length; i++) {
            listaProductos.innerHTML += listadoProductos[i] + "<br/>";
          }

          suma.innerHTML = "$" + totalPagar.toFixed(2);
          botonRegistro.disabled = false;
          document.getElementById("total_pedido").value = totalPagar;
        }
      }

      function mostrarDias() {
        let boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
          boletoCompleto = parseInt(pase_completo.value, 10) || 0,
          cantCamisas = parseInt(camisas.value, 10) || 0;

        let diasElegidos = [];

        if (boletosDia > 0) {
          diasElegidos.push("viernes");
        }
        if (boletosDosDias > 0) {
          diasElegidos.push("viernes", "sabado");
        }
        if (boletoCompleto > 0) {
          diasElegidos.push("viernes", "sabado", "domingo");
        }

        for (let i = 0; i < diasElegidos.length; i++) {
          document.getElementById(diasElegidos[i]).style.display = "block";
        }
      }
    }
  }); //DOM CONTENT LOADED
})();

$(function () {
  //lettering
  $(".nombre-sitio").lettering();

  //Agregar clase a menu
  $(
    'body.conferencia .navegacion-principal a:contains("Conferencia")'
  ).addClass("activo");
  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass(
    "activo"
  );
  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass(
    "activo"
  );

  //Menu fijo
  let windowsHeight = $(window).height();
  let barraAltura = $(".barra").innerHeight();
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll > windowsHeight) {
      $(".barra").addClass("fixed");
      $("body").css({ "margin-top": barraAltura + "px" });
    } else {
      $(".barra").removeClass("fixed");
      $("body").css({ "margin-top": "0px" });
    }
  });

  //Menu responsivo
  $(".menu-movil").on("click", function () {
    $(".navegacion-principal").slideToggle();
  });

  $("div.ocultar").hide();

  //Programa de conferencias
  $(".programa-evento .info-curso:first").show();
  $(".menu-programa a:first").addClass("activo");

  $(".menu-programa a").on("click", function () {
    $(".menu-programa a").removeClass("activo");
    $(this).addClass("activo");
    $(".ocultar").hide();
    let enlace = $(this).attr("href");
    $(enlace).fadeIn(1000);

    return false;
  });

  //Animaciones para los numeros
  $(".resumen-evento li:nth-child(1) p").animateNumber({ number: 6 }, 1200);
  $(".resumen-evento li:nth-child(2) p").animateNumber({ number: 15 }, 1200);
  $(".resumen-evento li:nth-child(3) p").animateNumber({ number: 3 }, 1500);
  $(".resumen-evento li:nth-child(4) p").animateNumber({ number: 9 }, 1500);

  //Cuenta regresiva
  $(".cuenta-regresiva").countdown("2020/12/31 09:00:00", function (event) {
    $("#dias").html(event.strftime("%D"));
    $("#horas").html(event.strftime("%H"));
    $("#minutos").html(event.strftime("%M"));
    $("#segundos").html(event.strftime("%S"));
  });
});
