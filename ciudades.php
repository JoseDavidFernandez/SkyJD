<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>SkyJD | Ofertas de vuelos </title>
    <!--        CSS                  -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header-index">
        <div class="header-index-content">
            <h1 id="title"><a href="index.html">SkyJD</a></h1>
            <div class="login-profile">
                <div class="profile">    
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    // Obtener la ciudad enviada por el formulario
    $ciudad = $_GET['destino'];  ?>

    <div class="box-search-offers">
        <h2 id="titleSearchOffers">Destino seleccionado</h2>
        <section class="search-offers-place">
            <span><?php echo $ciudad; ?></span>
            <span>-</span>
            <span>Cualquier lugar</span>
        </section>
        <section class="search-offers-date">
            <span id="offersSpanDate">Junio de 2023</span>
            <span>1 adulto</span>
        </section>
    </div>
    <div class="box-offers">
        <p id="boxOffersText">Son precios estimados más bajos que hemos encontrado</p>
        <div class="box-offers-city" id="Barcelona">
            <h3><?php echo $ciudad; ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
            <h3>Barcelona (BCN)</h3>
            <div id="randomNumber">12€</div>
        </div>
        <div class="box-offers-city">
            <h3><?php echo $ciudad; ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
            <h3>London (LDN)</h3>
            <div id="randomNumber">234€</div>
        </div>
        <div class="box-offers-city">
            <h3><?php echo $ciudad; ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
            <h3>Lisboa (LIS)</h3>
            <div id="randomNumber">56€</div>
        </div>
        <div class="box-offers-city">
            <h3><?php echo $ciudad; ?></h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg>
            <h3>New York (NY)</h3>
            <div id="randomNumber">500€</div>
        </div>
    </div>
    <?php
    //Prueba 1
    echo 'El nombre de la ciudad que queremos saber los vuelos es: '.$ciudad;
    ?>
    <p><a href="index.html">Volver al buscador</a></p>

</body>
</html>
