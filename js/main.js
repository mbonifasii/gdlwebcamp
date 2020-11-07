(function(){
    'use strict';

    let regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded', function(){

        var map = L.map('mapa').setView([14.581258, -90.528202], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([14.581258, -90.528202]).addTo(map)
            .bindPopup('GBLWebCamp 2020 voletos ya disponibles')
            .openPopup()
            .bindTooltip('Un tooltip')
            .openTooltip();
        
        //Campos datos usuario
        let nombre = document.getElementById('nombre');
        let apellido = document.getElementById('apellido');
        let email = document.getElementById('email');

        //Campos pases
        let pase_dia = document.getElementById('pase_dia');
        let pase_dosdias = document.getElementById('pase_dosdias');
        let pase_completo = document.getElementById('pase_completo');

        //Botones y los divs
        let calcular = document.getElementById('calcular');
        let errorDiv = document.getElementById('error');
        let botonRegistro = document.getElementById('btnRegistro');
        let listaProductos = document.getElementById('lista-productos');
        let suma = document.getElementById('suma-total');

        //Extras
        let camisas = document.getElementById('camisa_evento');
        let etiquetas = document.getElementById('etiquetas');

        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', valirdarMail);

        function validarCampos(){
            if(this.value === ''){
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Este campo es obligatorio';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
                errorDiv.style.fontWeight = "bold"
            }else {
                errorDiv.style.display = 'none';
                this.style.borderBottom = '3px solid #fe4818';
            }
        }

        function valirdarMail(){
            if(this.value.indexOf('@') > -1){
                errorDiv.style.display = 'none';
                this.style.border = 'none';
                this.style.borderBottom = '3px solid #fe4818';
            }else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'Debe tener al menos una @';
                this.style.border = '1px solid red';
                errorDiv.style.border = '1px solid red';
                errorDiv.style.fontWeight = "bold"
            }
        }

        function calcularMontos(event){
            event.preventDefault();
            
            if(regalo.value === ''){
                alert('Debes elegir un regalo');
                regalo.focus();
            }else {
                let boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
                    boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                    cantCamisas = parseInt(camisas.value, 10) || 0,
                    cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                let totalPagar = (boletosDia * 30) + (boletosDosDias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2); 
                
                let listadoProductos = [];

                if(boletosDia >= 1 ){
                    listadoProductos.push(boletosDia + ' Pase(s) por un dia');
                }

                if(boletosDosDias >= 1){
                    listadoProductos.push(boletosDosDias + ' Pase(s) por  2 dias');
                }
                if(boletoCompleto >= 1){
                    listadoProductos.push(boletoCompleto + ' Pase(s) completo(s)');
                }

                if(cantCamisas >= 1){
                    listadoProductos.push(cantCamisas + ' camisa(s)');
                }
                if(cantEtiquetas >= 1){
                    listadoProductos.push(cantEtiquetas + ' etiqueta(s)');
                }

                listaProductos.style.display = "block";
                listaProductos.innerHTML = ' ';
                
                for(let i = 0; i < listadoProductos.length; i++){
                    listaProductos.innerHTML += listadoProductos[i] + '<br/>';

                }

                suma.innerHTML = "$" + totalPagar.toFixed(2);
            }
        }

        function mostrarDias(){
            let boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletosDosDias = parseInt(pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                cantCamisas = parseInt(camisas.value, 10) || 0;

            let diasElegidos = [];

            if(boletosDia > 0){
                diasElegidos.push('viernes');
            }
            if(boletosDosDias > 0) {
                diasElegidos.push('viernes', 'sabado');
            }
            if(boletoCompleto > 0){
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for(let i = 0; i < diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display = 'block';
            }
        }

    });//DOM CONTENT LOADED
})();