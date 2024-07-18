<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3pagina.css">
    <link rel="icon" type="image/png" href="img/icon.ico">
    <script src="scripts.js" defer></script>
    <!-- Link de iconos -->
    <script src="https://kit.fontawesome.com/f368768ce7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <title>DIAZ</title>
</head>
<header>
    <header>
        <div class="centrarimg">
            <div class="frase">
                Bienvenido a Pollería Díaz <br> 
            </div>
            <div class="frased">
                ¡Disfruta de la mejor comida de la región!<br>
                En Pollería Díaz nos orgullece ofrecerte pollos<br>
                a la brasa fresco y delicioso, preparado con nuestras<br>
                recetas tradicionales<br>
            </div>
        </div>
        <nav>
            <ul class="menuenlace">
                <li><a href="#delivery" style="font-size: 2em;">Delivery</a></li>
                <li><a href="#menu" style="font-size: 2em;">Menú</a></li>               
                <li><a href="https://www.google.com/maps/place/Poller%C3%ADa+D%C3%ADaz/@-12.0422013,-77.2584482,10z/data=!4m10!1m2!2m1!1spolleria+diaz!3m6!1s0x9105b9eb264aea4d:0x9fb384fcb06465d9!8m2!3d-12.211055!4d-76.9451992!15sCg1wb2xsZXJpYSBkaWF6Wg8iDXBvbGxlcmlhIGRpYXqSARJjaGlja2VuX3Jlc3RhdXJhbnTgAQA!16s%2Fg%2F11rylgd692?entry=ttu" style="font-size: 2em;">Ubicación</a></li>
                <li><a href="#contacto" style="font-size: 2em;">Contacto</a></li>
                <li><img src="img/POLLO LOGO.png" alt="imagen"></li>
            </ul>
        </nav>
    </header>
    <main> <h1>Bienvenido a Pollería Diaz</h1>
        <section id="inicio">
            
            <p>¡Disfruta de la mejor comida de la región! En Pollería Diaz nos enorgullece ofrecerte pollo a la brasa fresco y delicioso, preparado con nuestras recetas tradicionales.</p>
        </section>
        <div id="modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="cerrarModal()">&times;</span>
    <h2>Confirmar Compra</h2>
    <p>Estás a punto de comprar:</p>
    <p id="producto-seleccionado"></p>
    <button onclick="confirmarCompra()">Confirmar</button>
  </div>
</div>

<section id="menu">
    <h2>Nuestro Menú</h2><br>
    <div class="menucatalogo">
        <div class="producto">
            <h3>Pollo a la Brasa Tradicional</h3><br><br>
            <img src="https://polleriaslagranja.com/wp-content/uploads/2022/10/La-Granja-Real-Food-Chicken-1-Pollo-a-la-Brasa.png" alt="plato1" width="300" class="tamañopollo">
            <p class="precio">S/. 69.90</p>
            <button class="btn comprar" onclick="abrirModal('Pollo a la Brasa Tradicional')">Comprar</button>
        </div>
        <div class="producto">
            <h3>Pollo Familiar</h3><br><br>
            <img src="https://polleriaslagranja.com/wp-content/uploads/2022/10/La-Granja-Real-Food-Chicken-Promo-Delivery-1.png" alt="plato2" width="300" class="tamañopollo">
            <p class="precio">S/. 22.00</p>
            <button class="btn comprar" onclick="abrirModal('Pollo Familiar')">Comprar</button>
        </div>
        <div class="producto">
            <h3>Pollo a la Brasa 1/2</h3><br><br>
            <img src="https://polleriaslagranja.com/wp-content/uploads/2022/10/La-Granja-Real-Food-Chicken-1.2-Pollo-a-la-Brasa.png" alt="plato3" width="300" class="tamañopollo">
            <p class="precio">S/. 28.00</p>
            <button class="btn comprar" onclick="abrirModal('Pollo a la Brasa 1/2')">Comprar</button>
        </div>
        <div class="producto">
            <h3>Pollo a la Brasa 1/4</h3><br><br>
            <img src="https://polleriaslagranja.com/wp-content/uploads/2022/10/La-Granja-Real-Food-Chicken-1.4-de-Pollo-a-la-Brasa.png" alt="plato6" width="300" class="tamañopollo">
            <p class="precio">S/. 30.00</p>
            <button class="btn comprar" onclick="abrirModal('Pollo a la Brasa 1/4')">Comprar</button>
        </div>
        <div class="producto">
            <h3>Mostrito Peruano Taipan 1/2</h3><br><br>
            <img src="https://tofuu.getjusto.com/orioneat-prod/LTJet7HdkcpY7oKtR-5V8A7987.jpg" alt="plato4" width="300" class="tamañopollo">
            <p class="precio">S/. 18.00</p>
            <button class="btn comprar" onclick="abrirModal('Mostrito Peruano Taipan 1/2')">Comprar</button>
        </div>
        <div class="producto">
            <h3>Mostrito Clasico 1/4</h3><br><br>
            <img src="https://www.comedera.com/wp-content/uploads/2023/05/mostrito-peruano.jpg" alt="plato5" width="300" class="tamañopollo">
            <p class="precio">S/. 20.00</p>
            <button class="btn comprar" onclick="abrirModal('Mostrito Clasico 1/4')">Comprar</button>
        </div>
    </div>
</section>
<!-- MODAL -->
<div id="modal" class="modal">
    <div class="modal-contenido">
        <span class="cerrar" onclick="cerrarModal()">&times;</span>
        <img id="modal-img" src="" alt="Imagen del producto" width="300">
        <h2 id="modal-titulo"></h2>
        <p id="modal-precio"></p>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" value="1" min="1">
        <br>
        <label for="metodo-pago">Método de pago:</label>
        <select id="metodo-pago" name="metodo-pago">
            <option value="efectivo">Efectivo</option>
            <option value="tarjeta">Tarjeta de crédito/débito</option>
        </select>
        <br>
        <button class="btn comprar" onclick="confirmarCompra()">Confirmar Compra</button>
    </div>
</div>
<br>
            <p>Aquí encontrarás una selección de nuestros platos más populares:</p>
            <br>
            <ul>
                <li>-Pollo a la brasa</li>
                <li>-Mostritos</li>
                <li>-Ensaladas frescas</li>
                <li>-Bebidas</li>
            </ul>
        </section>
    </main>
      <!-- ............................................................ -->

      <footer>
        <div class="footer-container">
            <div class="footer-section">
                <section id ="contacto"></id>
                <h3>SERVICIOS</h3> 
                <p><strong>Dirección:</strong></p>
                     📍Av. Velasco Sector 2 GP 23 MZ "F" LT  22 Villa el Salvador<BR>
                     📍AV. MICAELA VASTIDAS 1666 - RUTA B  Villa el Salvador</p>
                <p><strong>DELIVERY & TAKE OUT</strong></p>
                <p>Lunes a Domingos 11:30 a.m. a 10:00 p.m.</p>
                <p><strong>PIDE LLAMANDO AL: <BR>901505855 - 921004541<br>
                <a href="https://www.facebook.com/PollosYParrillasDiaz/" target="_blank">
                <i class="fa-brands fa-facebook"></i>
            </a>
                     </strong></p>
            </div>
               
            <div class="footer-section">

            <h3>NOSOTROS</h3>       
            <p><a href="public/postulacion.php">¡Postula aquí!</a></p>
            <p><a href="public/historia.html">Nuestra Historia</a></p>
            <p><a href="https://www.google.com/maps/place/Poller%C3%ADa+D%C3%ADaz/@-12.0422013,-77.2584482,10z/data=!4m10!1m2!2m1!1spolleria+diaz!3m6!1s0x9105b9eb264aea4d:0x9fb384fcb06465d9!8m2!3d-12.211055!4d-76.9451992!15sCg1wb2xsZXJpYSBkaWF6Wg8iDXBvbGxlcmlhIGRpYXqSARJjaGlja2VuX3Jlc3RhdXJhbnTgAQA!16s%2Fg%2F11rylgd692?entry=ttu">Locales</a></p>
            
        </div>
            <div class="footer-section">

                <h3>MÉTODO DE PAGO</h3>
                <img src="img/bcp.png" alt="bcp" class="bcp">
                <img src="img/yape.png" alt="yape">
                <p>Tarjetas de crédito,débito y Yape online</p>
            </div>
            <div class="footer-section">

            <h3>MAS</h3>
                <p>S.A.C. - 20606663227</p>
                <p>Política de Privacidad</p>
                <p>Protocolo Pet Friendly</p>
                <p>Libro de Reclamaciones</p>
                <p>Atención al Cliente</p>
                <p>Tel. 921-004-541</p>

                <a href="public/libro.php">
        <img src="img/libronegro.png" alt="Libro de Reclamaciones" class="libro">
    </a>
                </div>
            </div>
        </div>
   
    <div class="footer-bottom">
            <p class="derechos">@POLLERIA DIAZ'S 2024 todos los derechos reservados</p>
        </div>
        </footer>
        <script src="js/paginajava.js"></script>
</body>
</html>