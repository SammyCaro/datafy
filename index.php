<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--ESTILOS-->
    <link rel="stylesheet" href="estilos/estilos.css" />

    <!--FUENTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@900&family=Roboto:wght@400;900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
      integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--FUENTES-->

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NHWJP796XM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NHWJP796XM');
</script>

    <title>Datafy</title>
  </head>
  <body>
    <header class="header">
      <!--  -->
      <div class="navegacionMobile">
        <div class="navegacionMobile__logo-hamburguer">
          <img src="img/Logo.png" alt="" class="navegacionMobile__logo" />
          <div class="navegacionMobile__hamburger-icon" id="icon">
            <div class="navegacionMobile__icon-1" id="a"></div>
            <div class="navegacionMobile__icon-2" id="b"></div>
            <div class="navegacionMobile__icon-3" id="c"></div>
            <div class="navegacionMobile__clear"></div>
          </div>
        </div>

        <nav class="navegacionMobile__nav" id="nav">
          <ul class="navegacionMobile__list">
            <li class="navegacionMobile__item">
              <a href="#nosotros" class="nav-item" >Nosotros</a>
            </li>
            <li class="navegacionMobile__item">
              <a href="#weDo" class="nav-item" >Qué hacemos</a>
            </li>
            <li class="navegacionMobile__item">
              <a href="#metodology" class="nav-item" >Metodologías de trabajo</a>
            </li>
            <li class="navegacionMobile__item">
              <a href="#case" class="nav-item" >Caso de éxito</a>
            </li>
            <li class="navegacionMobile__item">
              <a href="#contact" class="nav-item" >Contáctanos</a>
            </li>
          </ul>
        </nav>

        <div class="navegacionMobile__bg" id="blue"></div>
      </div>

      <div class="navegacionDesktop">
        <nav class="navegacionDesktop__nav" id="nav">
          <img src="img/Logo.png" alt="" class="navegacionDesktop__logo" />
          <ul class="navegacionDesktop__list">
            <li class="navegacionDesktop__item">
              <a href="#us" class="nav-item" onclick="clickSingleA(this)" >Nosotros</a>
            </li>
            <li class="navegacionDesktop__item">
              <a href="#weDo" class="nav-item" onclick="clickSingleA(this)">Qué hacemos</a>
            </li>
            <li class="navegacionDesktop__item">
              <a href="#metodologia" class="nav-item" onclick="clickSingleA(this)"
                >Metodologías de trabajo</a
              >
            </li>
            <li class="navegacionDesktop__item">
              <a href="#case" class="nav-item" onclick="clickSingleA(this)">Caso de éxito</a>
            </li>
            <li class="navegacionDesktop__item">
              <a href="#contacto" class="nav-item" onclick="clickSingleA(this)">Contáctanos</a>
            </li>
          </ul>
        </nav>
      </div>

      <section class="header__whyDatafyMobile">
        <h1 class="header__title">¿Por qué</h1>
        <img src="img/create.png" alt="headerImg" class="header__img" />
        <div class="header__datafyMobile">
          <p class="header__text">
            Construimos de forma exacta, los requerimientos de los clientes.
          </p>
          <a href="#mobileContact"><button class="header__button">Contáctanos</button></a>
        </div>
      </section>

      <section class="header__whyDatafyDesktop">
        <div class="header__imgContainer">
          <img src="img/create.png" alt="headerImg" />
        </div>
       
        <div class="header__desktopDatafy">
          <!-- <img src="img/background-header.png" class="header__headerBackground" alt="header background"> -->
          <h1 class="header__desktopTitle">¿Por qué</h1>
          <p class="header__desktopText">
            Construimos de forma exacta, los requerimientos de los clientes.
          </p>
          <a href="#contactForm"><button class="header__button">Contáctanos</button></a>
        </div>
      </section>
    </header>

    <main class="main">
      <!--  -->
      <section class="main__aboutUsMobile" id="nosotros">
        <img
          src="img/mobilebg.png"
          alt="mobile background"
          class="main__mobileBg"
        />
        <div class="main__aboustUsInfo">
          <h2 class="main__aboutUsTitle">Nosotros</h2>
          <img
            src="img/programming.png"
            class="main__aboutUsImage"
            alt="programming image"
          />

          <p class="main__aboutUsText">
            Somos una empresa que se enfoca en el objetivo, entregando
            resultados, independiente de las circunstancias.
          </p>
          <p class="main__aboutUsText">
            Contamos con experiencia desarrollando software a medida para
            empresas importantes de la industria, con excelentes resultados.
          </p>
        </div>
      </section>

      <section class="main__aboutUsDesktop" id="us">
        <!--  -->
        <img
          src="img/background-desktop.png"
          alt="desktop background"
          class="main__aboutUsDesktopBg"
        />
        <div class="main__aboutUsInfo">
          <div class="main__aboutUsInfoContainer">
            <h2 class="main__aboutUsTitle">Nosotros</h2>
            <p class="main__aboutUsText">
              Somos una empresa que se enfoca en el objetivo, entregando
              resultados, independiente de las circunstancias.
            </p>
            <p class="main__aboutUsText">
              Contamos con experiencia desarrollando software a medida para
              empresas importantes de la industria, con excelentes resultados.
            </p>
          </div>

          <img src="img/programming.png" alt="programming image" />
        </div>

        <!--  -->
      </section>
      <!--  -->

      <section class="main__experience">
        <div class="main__experienceContainer">
          <img
            src="iconos/innovadores.png"
            alt="experience icon"
            class="main__experienceIcon"
          />
          <p class="main__IconText">Experiencia</p>
        </div>

        <div class="main__experienceContainer">
          <img
            src="iconos/Confiable.png"
            alt="trustfull icon"
            class="main__experienceIcon"
          />
          <p class="main__IconText">Confiables</p>
        </div>

        <div class="main__experienceContainer">
          <img
            src="iconos/experiencia.png"
            alt="innovation icon"
            class="main__experienceIcon"
          />
          <p class="main__IconText">Innovadores</p>
        </div>
      </section>
<!--  -->
<!--  -->
<!--  -->
<div class="warpper" id="weDo">
  <input class="radio" id="one" name="group" type="radio" checked>
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">
  <input class="radio" id="four" name="group" type="radio">
  <div class="tabs">
      <label class="tab" id="one-tab" for="one">Software a medida</label>
      <label class="tab" id="two-tab" for="two">Automatización</label>
      <label class="tab" id="three-tab" for="three">Integración</label>
      <label class="tab" id="four-tab" for="four">Soporte</label>
  </div>
  <div class="panels">
    <div class="panel" id="one-panel">
      <img src="img/medida.svg" class="panel__img" alt="Software a medida">
      <div class="panel__infoContainer">
        <div class="panel-title">Software a medida</div>
        <p>Es un software personalizado diseñado desde cero para un usuario o entidad en particular. Se adapta a las necesidad y lógicas propias del negocio, siendo un desarrollo más flexible y seguro. Posee características únicas que apuntan al aumento de la productividad del negocio. </p>
      </div>
    </div>
    <div class="panel" id="two-panel">
      <img src="img/automatizacion.svg" class="panel__img" alt="Software a medida">
      <div class="panel__infoContainer">
        <div class="panel-title">Automatización</div>
        <p>Uso de tecología para realizar tareas casi sin la intervención humana. Acelera la infraestructura y productividad mediante procesos programables que ahorran tiempo. Se puede implemetar en cualquier sector en el que se lleve a cabo tareas repetitivas, en el que los datos provengan de diferentes fuentes y para recolectarlos de manera manual sería muy costoso y tomaría mucho tiempo, disminuyendo la productividad y estando más vulnerables a los errores. </p>
      </div>
    </div>
    <div class="panel" id="three-panel">
      <img src="img/design.svg" class="panel__img" alt="Software a medida">
      <div class="panel__infoContainer">
        <div class="panel-title">Integración</div>
        <p>Es un proceso de anexión de sistemas informáticos, aplicaciones o softwares para que funcionen como un solo sistema, conectando sistemas externos con el sistema a desarrollar, con el fin de lograr un aumento en la productividad, eficiencia y agilidad, para que así usuarios no tengan que buscar en diferentes fuentes los datos.</p>
      </div>
    </div>
    <div class="panel" id="four-panel">
      <img src="img/programmer.svg" class="panel__img" alt="Software a medida">
      <div class="panel__infoContainer">
        <div class="panel-title">Soporte</div>
        <p>Es una gama de servicios de asistencia que puede ser tanto de software como de hardware. Se brinda ayuda en caso de errores en software, hardware o dudas en general que posea el usuario, es decir, solventar los problemas técnicos en el manejo de software y/o hardware empleando diferentes herramientas o soluciones para los problemas informáticos.</p>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!--  -->
<!--  -->
      

      <section class="metodology__mobile" id="metodology">
        <!--  -->
        <h1 class="metodology__title">Metodología</h1>
        <!--  -->
        <div class="metodology__metodologiesContainer">
          <div class="metodology__metodologies">
            <!--  -->
            <div class="metodology__container">
              <img
                src="iconos/interview.png"
                alt="interview icon"
                class="metodology__icon"
              />
              <h2 class="metodology__subTitle">
                Levantamiento de requerimientos
              </h2>
            </div>
            <p class="metodology__text">
              Etapa donde se escucha al cliente y se analiza lo que está
              solicitando.
            </p>
            <!--  -->
          </div>
          <div class="metodology__metodologies">
            <!--  -->
            <div class="metodology__container">
              <img
                src="iconos/alcance.png"
                alt="alcance icon"
                class="metodology__icon"
              />
              <h2 class="metodology__subTitle">
                Acuerdo de alcance del proyecto
              </h2>
            </div>
            <p class="metodology__text">
              Se estipulan cuáles serán los entregables del proyecto.
            </p>
            <!--  -->
          </div>
          <div class="metodology__metodologies">
            <!--  -->
            <div class="metodology__container">
              <img
                src="iconos/desarrollo.png"
                alt="desarrollo icon"
                class="metodology__icon"
              />
              <h2 class="metodology__subTitle">Desarrollo</h2>
            </div>
            <p class="metodology__text">
              Se muestran avances periódicos al cliente con el fin de hacer
              iteraciones cortas con el área de negocio y mejorar el producto.
            </p>
            <!--  -->
          </div>
          <div class="metodology__metodologies">
            <!--  -->
            <div class="metodology__container">
              <img
                src="iconos/cierre.png"
                alt="cierre icon"
                class="metodology__icon"
              />
              <h2 class="metodology__subTitle">Cierre</h2>
            </div>
            <p class="metodology__text">
              Se cierra el proyecto y se abre la etapa de mejora continua.
            </p>
            <!--  -->
          </div>
          <div class="metodology__metodologies">
            <!--  -->
            <div class="metodology__container">
              <img
                src="iconos/mejora continua.png"
                alt="mejora icon"
                class="metodology__icon"
              />
              <h2 class="metodology__subTitle">Mejora continua</h2>
            </div>
            <p class="metodology__text">
              Se incorporan mejoras al proyecto, producto de la exploración del
              mismo por parte de los usuarios finales.
            </p>
            <!--  -->
          </div>
        </div>
      </section>
      <!--  -->
      <!--  -->
      <!--  -->
      <section class="metodology__desktop" id="metodologia">
        <h1 class="metodology__title">Metodología</h1>
      
          <div class="metodology__container">
            <h2 class="metodology__subTitle">
              Levantamiento de requerimientos
            </h2>
            <p class="metodology__text">
              Etapa donde se escucha al cliente y se analiza lo que está
              solicitando.
            </p>

            <img
            src="iconos/interview.png"
            alt="interview icon"
            class="metodology__icon1"
            />
          </div>

          <div class="metodology__container">
            <h2 class="metodology__subTitle">
              Acuerdo de alcance del proyecto
            </h2>

            <p class="metodology__text">
              Se estipulan cuáles serán los entregables del proyecto.
            </p>

            <img
            src="iconos/alcance.png"
            alt="alcance icon"
            class="metodology__icon2"
            />
          </div>

          <div class="metodology__container">
            <h2 class="metodology__subTitle">Desarrollo</h2>

            <p class="metodology__text">
              Se muestran avances periódicos al cliente con el fin de hacer
              iteraciones cortas con el área de negocio y mejorar el producto.
            </p>

            <img
            src="iconos/desarrollo.png"
            alt="desarrollo icon"
            class="metodology__icon3"
          />
          </div>

          <div class="metodology__container">
            <h2 class="metodology__subTitle">Cierre</h2>

            <p class="metodology__text">
              Se cierra el proyecto y se abre la etapa de mejora continua.
            </p>

            <img
              src="iconos/cierre.png"
              alt="desarrollo icon"
              class="metodology__icon4"
            />
          </div>
          
          <div class="metodology__container">
            <h2 class="metodology__subTitle">Mejora continua</h2>

            <p class="metodology__text">
              Se incorporan mejoras al proyecto, producto de la exploración
              del mismo por parte de los usuarios finales.
            </p>

            <img
            src="iconos/mejora continua.png"
            alt="mejora icon"
            class="metodology__icon5"
          />
          </div>
  
      </section>
      <!--  -->

      <section class="ccu" id="case">
        <!--  -->
        <div class="ccu__titleContainer">
          <h2 class="ccu__title">Caso de Éxito</h2>
          <img class="ccu__logo" src="img/logo ccu.png" alt="ccu logo" />
        </div>

        <div class="ccu__mobileContainer">
          <div class="ccu__subTitleContainer">
            <img
              src="iconos/problema.png"
              alt="problema icon"
              class="ccu__icon"
            />
            <h2 class="ccu__subTitle">Problema</h2>
          </div>
          <p class="ccu__text">
            El área de planificación de demanda de Ccu, tomaba mucho tiempo en
            la recolección de data, ya que eran muchas las fuentes que debían
            consultar, provocando un estancamiento en la producción.
          </p>
        </div>

        <div class="ccu__mobileContainer">
          <div class="ccu__subTitleContainer">
            <img
              src="iconos/solucion.png"
              alt="solucion icon"
              class="ccu__icon"
            />
            <h2 class="ccu__subTitle">Solución</h2>
          </div>
          <p class="ccu__text">
            Datafy ha creado una aplicación que toma todas las distintas fuentes
            de datos y las unifica en un solo lugar, automatizando cualquier
            proceso que tenga relación con la recolección y ciclo de vida de
            estos, como visualización de datos, cálculos y cualquier envío de
            información.
          </p>
        </div>

        <div class="ccu__mobileContainer">
          <div class="ccu__subTitleContainer">
            <img
              src="iconos/resultado.png"
              alt="resultados icon"
              class="ccu__icon"
            />
            <h2 class="ccu__subTitle">Resultados</h2>
          </div>
          <p class="ccu__text">
            Se ven reflejados principalmente en una planificación de demanda más
            rápida, logrando que los tiempos de entrega se reduzcan de manera
            significativa y permitiendo a los usuarios hacer su trabajo de una
            forma más productiva.
          </p>
        </div>
        <!--  -->

        <div class="ccu__desktopContainer">
          <img
            src="iconos/problema.png"
            alt="problema icon"
            class="ccu__desktopIcon"
          />
          <div class="ccu__desktopSubTitleContainer">
            <h2 class="ccu__desktopSubTitle">Problema</h2>
            <p class="ccu__desktopText">
              El área de planificación de demanda de Ccu, tomaba mucho tiempo en
              la recolección de data, ya que eran muchas las fuentes que debían
              consultar, provocando un estancamiento en la producción.
            </p>
          </div>
        </div>

        <div class="ccu__desktopContainer">
          <img
            src="iconos/solucion.png"
            alt="solucion icon"
            class="ccu__desktopIcon"
          />
          <div class="ccu__desktopSubTitleContainer">
            <h2 class="ccu__desktopSubTitle">Solución</h2>
            <p class="ccu__desktopText">
              Datafy ha creado una aplicación que toma todas las distintas
              fuentes de datos y las unifica en un solo lugar, automatizando
              cualquier proceso que tenga relación con la recolección y ciclo de
              vida de estos, como visualización de datos, cálculos y cualquier
              envío de información.
            </p>
          </div>
        </div>

        <div class="ccu__desktopContainer">
          <img
            src="iconos/resultado.png"
            alt="resultados icon"
            class="ccu__desktopIcon"
          />
          <div class="ccu__desktopSubTitleContainer">
            <h2 class="ccu__desktopSubTitle">Resultados</h2>
            <p class="ccu__desktopText">
              Se ven reflejados principalmente en una planificación de demanda
              más rápida, logrando que los tiempos de entrega se reduzcan de
              manera significativa y permitiendo a los usuarios hacer su trabajo
              de una forma más productiva.
            </p>
          </div>
        </div>
        <!--  -->
      </section>
    </main>

    <footer class="footerMobile" id="contact">
      <h1 class="footer__MobileTitle">Cuéntanos tu</h1>
      <form
        action="./validation.php"
        method="post"
        class="footer__mobileForm"
        autocomplete="off"
        id="mobileContact"
      >
      <?php if(isset($_GET['success'])) { echo "<h3 class='message'>¡Muchas gracias! Nos pondremos en contacto a la brevedad.</h3>"; }?>
      <?php if(isset($_GET['error'])) { echo "<h3 class='error'>El formato de email no es válido</h3>"; }?>
        <input
          type="text"
          class="footer__mobileFormInput"
          placeholder="Nombre"
          name="nombre"
          required
          id="inputForm"
        />
        <input
          type="text"
          class="footer__mobileFormInput"
          placeholder="Email"
          name="email"
          required
        />
        <textarea
          id=""
          cols="30"
          rows="10"
          class="footer__mobileFormText"
          placeholder="Mensaje"
          name="mensaje"
          required
        ></textarea>
        <input type="submit" value="Enviar" class="footer__mobileSubmit" />
      </form>

      <div class="footer__whatsapp">
        <p class="footer__text">Contáctanos por Whatsapp</p>
        <a
          href="https://api.whatsapp.com/send?phone=56989835530"
          target="_blank"
        >
          <i class="fab fa-whatsapp"></i
        ></a>
      </div>
    </footer>

    <footer class="footer" id="contacto">
      <div class="footer__container">
        <div class="footer__titleContainer">
          <h1 class="footer__title">Cuéntanos tu</h1>
          <img src="img/sent-message.png" alt="" class="footer__img" />
        </div>

        <form
          action="./validation.php"
          method="post"
          class="footer__form"
          autocomplete="off"
          id="contactForm"
        >
        <?php if(isset($_GET['success'])) { echo "<h3 class='message'>¡Muchas gracias! Nos pondremos en contacto a la brevedad.</h3>"; }?>
        <?php if(isset($_GET['error'])) { echo "<h3 class='error'>El formato de email no es válido</h3>"; }?>
          <input
            type="text"
            class="footer__formInput"
            placeholder="Nombre"
            name="nombre"
            required
            id="inputForm"
          />
          <input
            type="text"
            class="footer__formInput"
            placeholder="Email"
            name="email"
            required
          />
          <textarea
            name="mensaje"
            id=""
            cols="30"
            rows="10"
            class="footer__formText"
            placeholder="Mensaje"
            required
          ></textarea>
          <input
            type="submit"
            value="Enviar"
            id="button"
            class="footer__submit"
          />
        </form>
      </div>

      <div class="footer__whatsapp">
        <p class="footer__text">Contáctanos por Whatsapp</p>
        <a
          href="https://api.whatsapp.com/send?phone=56989835530"
          target="_blank"
        >
          <i class="fab fa-whatsapp"></i
        ></a>
      </div>
    </footer>
  </body>

  <script type="text/javascript" src="js/main.js"></script>
  <script
    data-require="jquery@*"
    data-semver="2.2.0"
    src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"
  ></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</html>