<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Herbalife Tena</title>
    <link rel="icon" href="images/iconoCl.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header"> 

        <div class="menu container"> 
            <a href=""class="logo"> <img src="images/LogoH.png" alt="" </a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.svg" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
                
            </nav>
            <div class="socials-1">
                <a href="https://www.instagram.com/marianasanchez1122/" target="_blank"><img src="images/r1.svg" alt="" ></a>
                <a href="https://mail.google.com/mail/u/0/?hl=es#search/marianasanchezolloa759%40gmail.com?compose=DmwnWrRqhsTnHPqNjpNzQzggwCSXnFVdgdMjLlSMsNrqlSDlxqbksQmvzgmmjKJNZrkLHdfsZfZv" target="_blank"><img src="images/r2.svg" alt="" ></a>
                <a href="https://www.facebook.com/profile.php?id=100075684985059" target="_blank"><img src="images/r3.svg" alt="" ></a>
            </div>
        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Club Herbalife Tena</h1>
                <p>
                    Los batidos que ofrecemos están especialmente formulados para 
                    brindarte todos los nutrientes necesarios para una dieta equilibrada. 
                    Con su contenido de proteínas, vitaminas, minerales y antioxidantes, experimentarás 
                    una sensación de energía y vitalidad en cada sorbo.
                </p>
                <a href="https://wa.me/message/AEFSQ5YKQXCQK1 " target="_blank" class="btn-1">informacion</a>
            </div>
            <div class="header-img">
                <img src="images/producto.png" alt="">
            </div>
            
        </div>
    </header>


    <section class="about">
        <div class="about-content container">
            <img class="ab1" src="images/ab1.png" alt="">
            <div class="about-img">
                <img src="images/glass.png" alt="">
            </div> 
            <div class="about-txt">
                <h2>Sobre el batido fórmula 1 </h2>
                <p>
                    Este delicioso batido está especialmente formulado para contribuir 
                    a una alimentación nutritiva y es bajo en grasa. Contiene un buen 
                    equilibrio de proteínas y otros nutrientes para ayudar a satisfacer 
                    su apetito y proporcionar energía. Además, contiene fibra, 21 
                    vitaminas y minerales, incluyendo las vitaminas antioxidantes C y E. 
                    Tiene 100 calorías y 1 gramo de grasa por porción. Cuando se mezcla 
                    con una taza (240ml) de leche descremada, aporta 180 calorias.
                </p>
                <a href="https://wa.me/message/AEFSQ5YKQXCQK1" target="_blank" class="btn-2">informacion</a>
            </div>
        </div>
    </section>

    <section class="information">
        <div class="information-content container">
            <img class="in1" src="images/ab1.png" alt="">
            <img class="in2" src="images/ab1.png" alt="">
            <h2>Informacion nutricional</h2>
            <p>
                Los batidos Fórmula 1 de Herbalife son una opción de comida deliciosa, nutritiva y 
                saludable los productos Herbalife nos ayudan para mantener un control de peso efectivo. 
                Reemplace una o dos comidas al día con un batido Fórmula 1 de Herbalife y observe cómo controla 
                esos kilos mientras se siente mejor cada día mucho mejor.

            </p>
        </div>
    </section>

    <main class="contact container">
        <div class="contact-table">
            <span>Ingredientes</span>
            <h3>Nutrimentos</h3>
            <table class="ingredients">
                <tr>
                    <th></th>
                    <th>Valor %</th>
                    <th>Valor gr.</th>
                </tr>
                <tr>
                    <td>Grasas Totales</td>
                    <td>2%</td>
                    <td>1 gr.</td>
                </tr>

                <tr>
                    <td>Sodio</td>
                    <td>5%</td>
                    <td>125 gr.</td>
                </tr>

                <tr>
                    <td>Fibra Dietaria</td>
                    <td>16%</td>
                    <td>4 gr.</td>
                </tr>

                <tr>
                    <td>Proteina</td>
                    <td>18%</td>
                    <td>9 gr.</td>
                </tr>

            </table>
        </div>

        <div class="fore-content">
            <h2>Te interesa ser distribuidor independiente ingresa tus datos y me comunicare contigo</h2>
            <form action="https://formsubmit.co/fba600b6922bdb54c2b16316b8e03fbe " method="POST" >
                <input class="campo" type="text" name="name" placeholder="Nombre">
                <input class="campo" type="email" name="email" placeholder="Correo">
                <input class="btn-2" type="submit" value="enviar">
                <input type="hidden" name="_next" value="https://clubherbalifetena.netlify.app">
                <input type="hidden" name="_capcha" value="false">
            </form>
        </div>

    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <div class="link-img">
                    <img src="images/LogoH.png" alt="">
                    <div class="socials-2">
                        <a href="https://www.instagram.com/marianasanchez1122/" target="_blank"><img src="images/r1.svg" alt="" ></a>
                        <a href="https://mail.google.com/mail/u/0/?hl=es#search/marianasanchezolloa759%40gmail.com?compose=DmwnWrRqhsTnHPqNjpNzQzggwCSXnFVdgdMjLlSMsNrqlSDlxqbksQmvzgmmjKJNZrkLHdfsZfZv" target="_blank"><img src="images/r2.svg" alt="" ></a>
                        <a href="https://www.facebook.com/profile.php?id=100075684985059" target="_blank"><img src="images/r3.svg" alt="" ></a>
                    </div>

                    <div class="link">
                        <h3>Medios de comunicación</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100075684985059" target="_blank">Facebook</a></li>
                            <li><a href="https://www.instagram.com/marianasanchez1122/" target="_blank">Instagram</a></li>
                            <li><a href="https://mail.google.com/mail/u/0/?hl=es#search/marianasanchezolloa759%40gmail.com?compose=DmwnWrRqhsTnHPqNjpNzQzggwCSXnFVdgdMjLlSMsNrqlSDlxqbksQmvzgmmjKJNZrkLHdfsZfZv" target="_blank">Correo</a></li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="footer-copy">
                <p>Club Herbalife Tena &copy; 2024</p>
                <p>&copy; Carlos Ulloa</p>
            </div>
        </div>
    </footer>
</body>
</html>
