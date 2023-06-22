//OBTENER MES Y AÑO TABLA SEARCH:
    // Obtener la referencia al elemento span donde se mostrará la fecha
    var offersSpanDate = document.getElementById('offersSpanDate');

    // Obtener la fecha actual
    var fechaActual = new Date();

    // Obtener el mes y el año actual
    var mesActual = fechaActual.toLocaleString('default', { month: 'long' });
    var añoActual = fechaActual.getFullYear();

    // Establecer el mes y el año actual en el elemento span
    offersSpanDate.textContent = mesActual + ' de ' + añoActual;



//OBTENER VALOR FORMULARIO
    // Obtener el valor almacenado del almacenamiento local
    var destino = sessionStorage.getItem('destino');

    // Obtener la colección de elementos con la clase 'ciudad'
    var elementosCiudad = document.getElementsByClassName('ciudad');

    // Iterar sobre la colección y asignar el valor a cada elemento
    for (var i = 0; i < elementosCiudad.length; i++) {
        elementosCiudad[i].textContent = destino;
    }


//CREACION TABLA CON CIUDADES+PRECIO
    // Obtener la ciudad introducida desde la página de index
        var ciudadIntroducida = sessionStorage.getItem('destino');

    // Array de ciudades
        var ciudades = ["Barcelona", "London", "Lisboa", "New York", "Amsterdam", "Madrid", "Milán"];

    // Obtener la tabla
        var table = document.querySelector('table');

        // Recorrer el array de ciudades
        for (var i = 0; i < ciudades.length; i++) {
            // Verificar si la ciudad introducida coincide con alguna ciudad en el array
            if (ciudadIntroducida !== ciudades[i]) {
                // Generar un número aleatorio entre 1 y 100 para el precio
                var precioAleatorio = Math.floor(Math.random() * 100) + 1;

                // Crear la fila y las celdas
                var fila = document.createElement('tr');

                var ciudad1Cell = document.createElement('td');
                ciudad1Cell.textContent = ciudadIntroducida;
                ciudad1Cell.classList.add('ciudad-origen');

                var iconoCell = document.createElement('td');
                iconoCell.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>';
                iconoCell.classList.add('icon');

                var ciudad2Cell = document.createElement('td');
                ciudad2Cell.textContent = ciudades[i];
                ciudad2Cell.classList.add('ciudad-destino');

                var precioCell = document.createElement('td');
                precioCell.textContent = precioAleatorio + ' €';
                precioCell.classList.add('precio');

                // Agregar las celdas a la fila
                fila.appendChild(ciudad1Cell);
                fila.appendChild(iconoCell);
                fila.appendChild(ciudad2Cell);
                fila.appendChild(precioCell);

                // Agregar la fila a la tabla
                table.appendChild(fila);
            }
        }