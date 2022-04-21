<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include './classes/class.consults.php'; ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Altrion - Web design</title>
    <link rel="icon" href="public/images/logo.png" />
    <!-- SEO -->

    <!-- End SEO-->

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="./public/css/alertify.css">
    <link rel="stylesheet" href="public/css/main.css" />
    <!-- End CSS Files -->
  </head>
  <body id="home" class="theme">
    <!-- Aside bar -->
    <aside class="aside display-column">
      <div class="aside__item">
        <a href="https://github.com/MarkOsBab/Altrion" target="_blank">
          <i class="fa-brands fa-github fa-2x icon"></i>
        </a>
      </div>
      <div class="aside__item">
        <a href="https://www.linkedin.com/in/AltrionSites" target="_blank">
          <i class="fa-brands fa-linkedin fa-2x icon"></i>
        </a>
      </div>
      <div class="aside__item">
        <a href="https://www.instagram.com/altri0n/" target="_blank">
          <i class="fa-brands fa-instagram fa-2x icon"></i>
        </a>
      </div>
      <div class="aside__item">
        <a href="https://www.facebook.com/Altri0n" target="_blank">
          <i class="fa-brands fa-facebook fa-2x icon"></i>
        </a>
      </div>
      <div class="aside__item">
        <div class="aside__switch">
          <div class="aside__item__switch">
            <label class="aside__item__switch__label" for="checkbox">
              <input
                type="checkbox"
                id="checkbox"
                class="aside__item__switch__input"
              />
              <div
                class="aside__item__switch--slider aside__item__switch--round"
              >
                <div class="aside__item__switch--icon">
                  <i class="fa-solid fa-sun" id="switch-icon"></i>
                </div>
              </div>
            </label>
          </div>
        </div>
      </div>
    </aside>
    <!-- End aside bar -->

    <!-- Header -->
    <header class="header">
      <div class="header__content container-box">
        <div class="display-row header__content__title__box">
          <h1 class="header__content--title">
            <span class="header__content__keys"
              ><i class="fa-solid fa-cubes header__icon"></i
            ></span>
            Sitios Altrion
          </h1>
        </div>
      </div>
    </header>
    <!-- End header -->

    <!-- Navbar -->
    <nav class="navbar navbar--color">
      <ul class="container-box navbar__box">
        <div class="navbar__box__item navbar-list">
          <li class="navbar-list__item">s
            <a class="navbar-item" href="#"
              ><i class="fa-solid fa-house"></i> Inicio</a
            >
          </li>
          <li class="navbar-list__item">
            <a class="navbar-item" href="#about"
              ><i class="fa-solid fa-users-gear"></i> Nosotros</a
            >
          </li>
          <li class="navbar-list__item">
            <a class="navbar-item" href="#services"
              ><i class="fa-solid fa-book"></i> Servicios</a
            >
          </li>
          <li class="navbar-list__item">
            <a class="navbar-item" href="#works"
              ><i class="fa-solid fa-code"></i> Trabajos</a
            >
          </li>
          <li class="navbar-list__item">
            <a class="navbar-item" href="#contact"
              ><i class="fa-solid fa-address-card"></i> Contacto</a
            >
          </li>
          <li class="navbar-list__item">
            <a class="navbar-item" href="#team"
              ><i class="fa-solid fa-laptop-code"></i> Equipo</a
            >
          </li>
        </div>
      </ul>
    </nav>
    <!-- End navbar -->

    <!-- Sections -->

    <!-- About section -->
    <section class="about" id="about">
      <div class="container-box about__box" id="about">
        <h2 class="about__title">En Altrion</h2>
        <p class="about__content">
          Tenemos la filosofía que, todo negocio debría estar en internet
        </p>

        <div class="container-box">
          <div class="about__grid">
            <div class="about__grid__box-content">
              <ul>
                <li class="circle__list">
                  <p>Contamos con experiencia con <b>e-commerce</b> sites.</p>
                </li>
                <li class="circle__list">
                  <p>Diseñamos lo que nuestros clientes necesiten.</p>
                </li>
                <li class="circle__list">
                  <p>
                    Trabajamos en equipo y de forma remota para una mayor
                    efectividad.
                  </p>
                </li>
                <li class="circle__list">
                  <p>
                    Creamos aplicaciones web fáciles de utilizar, efectivas y
                    rápidas para una mejor experiencia.
                  </p>
                </li>
              </ul>
            </div>
            <div class="about__grid__box">
              <picture class="about__grid__box__image">
                <img
                  src="public/images/about/about_gif.gif"
                  class="about__grid__box__image-image"
                  alt="Programming GIF"
                />
              </picture>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End about section -->

    <!-- Services section -->
    <section class="services" id="services">
      <div class="services__box">
        <h2 class="services__title">
          ¿Cómo aseguramos
          <span class="services__title__block">la calidad de nuestros </span
          ><span class="services__title__block">sitios?</span>
        </h2>
      </div>
      <div class="container-box">
        <div class="services__grid">
          <div class="services__item">
            <div class="services__item__content">
              <h2 class="services__item__content--title">Responsive</h2>
              <p class="services__item__content--description">
                - Tu sitio web adaptado a todos los dispositivos del mundo
                <i class="fa-solid fa-earth-americas"></i>
              </p>
            </div>
            <div class="services__item__picture">
              <img
                src="./public/images/services/responsive_img.png"
                alt="responsive-image"
                class="services__item__picture--image"
              />
            </div>
          </div>
          <div class="services__item">
            <div class="services__item__picture">
              <img
                src="./public/images/services/ux-ui_img.jpg"
                alt="uxui-image"
                class="services__item__picture--image"
              />
            </div>
            <div class="services__item__content">
              <h2 class="services__item__content--title">UX/UI</h2>
              <p class="services__item__content--description">
                - La mejor experiencia con el interfaz de tu web y el diseño más
                amigable para todos nuestros clientes
                <i class="fa-solid fa-users"></i>
              </p>
            </div>
          </div>
          <div class="services__item">
            <div class="services__item__content">
              <h2 class="services__item__content--title">SEO</h2>
              <p class="services__item__content--description">
                SEO es el procesamiento en buscadores, la optimización del sitio
                para que los motores de búsqueda como Google, Bing, Yahoo. Ask,
                Baidu muestren tu sitio primero. En resúmen es un conjunto de
                acciones que se orientan a mejorar el procesamiento de tu sitio
                web en la lista de resultados.<i
                  class="fa-solid fa-arrow-trend-up"
                ></i>
              </p>
            </div>
            <div class="services__item__picture">
              <img
                src="./public/images/services/seo_img.jpeg"
                alt="seo-image"
                class="services__item__picture--image"
              />
            </div>
          </div>
          <div class="services__item">
            <div class="services__item__picture">
              <img
                src="./public/images/services/hosting.gif"
                alt="hoting-image"
                class="services__item__picture--image"
              />
            </div>
            <div class="services__item__content">
              <h2 class="services__item__content--title">Hosting & Dominios</h2>
              <p class="services__item__content--description">
                - Tu sitio con el nombre de dominio que tu selecciones y la
                calidad que nuestros clientes merecen
              </p>
            </div>
          </div>
          <div class="services__item">
            <div class="services__item__content">
              <h2 class="services__item__content--title">Branding</h2>
              <p class="services__item__content--description">
                Tu sitio con el nombre de dominio que tu selecciones y la
                calidad que nuestros clientes merecen
              </p>
            </div>
            <div class="services__item__picture">
              <img
                src="./public/images/services/marketing.gif"
                alt="branding-image"
                class="services__item__picture--image"
              />
            </div>
          </div>
          <div class="services__item">
            <div class="services__item__picture">
              <img
                src="./public/images/services/dashboard.jpg"
                alt="dashboard-image"
                class="services__item__picture--image"
              />
            </div>
            <div class="services__item__content">
              <h2 class="services__item__content--title">
                Panel de administración
              </h2>
              <p class="services__item__content--description">
                - Ofrecemos un panel donde cada cliente podrá ver las
                estadísticas de su sitio en tiempo real
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End services section -->

    <!-- Our section -->
    <section class="works" id="works">
      <div class="works__box">
        <h2 class="works__title">Nuestros trabajos realizados</h2>
      </div>
      <div class="container-box">
        <div class="works__wrapper">
          <div class="works__wrapper__items">

          </div>
        </div>
      </div>
    </section>
    <!-- End Our section -->

    <!-- Contact section -->
    <section class="contact" id="contact">
      <h2 class="contact__title"><i class="fa-solid fa-id-card"></i> Ponete en contacto</h2>
      <div class="contact__wrapper">
        <form id="formContact">
          <div class="contact__wrapper__item">
            <input class="contact__wrapper__item__form" type="text" placeholder="E-mail" id="email" name="email">
            <input class="contact__wrapper__item__form" type="text" placeholder="Nombre" id="nombre" name="nombre">
          </div>
          <div class="contact__wrapper__item">
            <input class="contact__wrapper__item__form" type="text" placeholder="Razón de contacto" id="razon" name="razon">
          </div>
          <div class="contact__wrapper__item">
            <textarea class="contact__wrapper__item__form" name="message" placeholder="Mensaje..." id="mensaje" name="mensaje"></textarea>
          </div>
          <div class="contact__wrapper__item--center">
            <input type="hidden" name="cAccion" value="send" id="cAccion">
            <button type="submit" name="submit_contact" class="contact__wrapper__item__form--btn">Contáctanos</button>
          </div>
        </form>
      </div>
    </section>
    <!-- End contact section -->

    <!-- End sections -->

    <!-- Footer -->
    <footer class="footer">
      <div class="container-box">
        <div class="footer__wrapper">
          <div class="footer__wrapper__item">
            <h1>Preguntas frecuentes</h1>
            <ul class="footer__wrapper__list">
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor sit amet</a>
              </li>
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor sit amet</a>
              </li>
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor sit</a>
              </li>
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor</a>
              </li>
            </ul>
          </div>
          <div class="footer__wrapper__item">
            <h1>Titulo</h1>
            <ul class="footer__wrapper__list">
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor</a>
              </li>
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor</a>
              </li>
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor</a>
              </li>
              <li class="footer__wrapper__list__item">
                <a href="#">Lorem ipsum dolor</a>
              </li>
            </ul>
          </div>
          <div class="footer__wrapper__item">
            <div class="footer__wrapper__item__logo">
              <img class="footer__wrapper__item__logo--image" id="switch-image" src="./public/images/footer/Logo_Dark.png" alt="Altrion-logo">
              <h2>Made with &#128150; by Altrion</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__closing">
        <small>Todos los derechos reservados</small>
      </div>
    </footer>
    <!-- End footer -->

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
      src="https://kit.fontawesome.com/7c0364cedf.js"
      crossorigin="anonymous"
    ></script>
    <script src="public/js/alertify.js"></script>
    <script src="public/js/main.js"></script>
  </body>
</html>