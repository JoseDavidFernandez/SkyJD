// Obtener la ciudad introducida desde la página de index
    var ciudadIntroducida = sessionStorage.getItem('destino');

// Array de ciudades
    var ciudades = ["Barcelona", "London", "Lisboa", "New York", "Amsterdam", "Madrid"];

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

            var iconoCell = document.createElement('td');
            iconoCell.textContent = "->";

            var ciudad2Cell = document.createElement('td');
            ciudad2Cell.textContent = ciudades[i];

            var precioCell = document.createElement('td');
            precioCell.textContent = precioAleatorio + ' €';

            // Agregar las celdas a la fila
            fila.appendChild(ciudad1Cell);
            fila.appendChild(iconoCell);
            fila.appendChild(ciudad2Cell);
            fila.appendChild(precioCell);

            // Agregar la fila a la tabla
            table.appendChild(fila);
        }
    }