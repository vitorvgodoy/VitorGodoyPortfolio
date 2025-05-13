<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Vitor V. Godoy  | Software Developer</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="icon" href="favicon.ico" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
  <header class="header">
    <div class="header__content">
      <div class="header__logo-container">
        <div class="header__logo-img-cont">
          <img src="./assets/png/me2.png" alt="Ram Maheshwari Logo Image" class="header__logo-img" />
        </div>
        <span class="header__logo-sub">Vitor V. Godoy</span>
      </div>
      <div class="header__main">
        <ul class="header__links">
          <li class="header__link-wrapper">
            <a href="" class="header__link"> Home </a>
          </li>
          <li class="header__link-wrapper">
            <a href="#about" class="header__link">About </a>
          </li>
          <li class="header__link-wrapper">
            <a href="#projects" class="header__link">
              Projects
            </a>
          </li>
          <li class="header__link-wrapper">
            <a href="#contact" class="header__link"> Contact </a>
          </li>
        </ul>
        <div class="header__main-ham-menu-cont">
          <img src="./assets/svg/ham-menu.svg" alt="hamburger menu" class="header__main-ham-menu" />
          <img src="./assets/svg/ham-menu-close.svg" alt="hamburger menu close"
            class="header__main-ham-menu-close d-none" />
        </div>
      </div>
    </div>
    <div class="header__sm-menu">
      <div class="header__sm-menu-content">
        <ul class="header__sm-menu-links">
          <li class="header__sm-menu-link">
            <a href=""> Home </a>
          </li>

          <li class="header__sm-menu-link">
            <a href="#about"> About </a>
          </li>

          <li class="header__sm-menu-link">
            <a href="#projects"> Projects </a>
          </li>

          <li class="header__sm-menu-link">
            <a href="#contact"> Contact </a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <section class="home-hero">
    <div class="home-hero__content">
      <h1 class="heading-primary">Vitor V. Godoy</h1>
      <h2 class="heading-secondary">Freelancer Software Developer</h2>
      <div class="home-hero__info">

        <p class="text-primary">
          Smart code, fast delivery, and profitable results<br /> turning ideas into high-impact digital solutions
        </p>
      </div>
      <div class="home-hero__cta">
        <a href="./#projects" class="btn btn--bg">Projects</a>
      </div>
    </div>
    <div class="home-hero__socials">
      <div class="home-hero__social">
        <a href="https://www.linkedin.com/in/vitorvgodoy/" class="home-hero__social-icon-link">
          <img src="./assets/png/linkedin-ico.png" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <div class="home-hero__social">
        <a href="https://github.com/vitorvgodoy" class="home-hero__social-icon-link">
          <img src="./assets/png/github-ico.png" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <div class="home-hero__social">
        <a href="https://www.instagram.com/vitor.sql/" class="home-hero__social-icon-link home-hero__social-icon-link--bd-none">
          <img src="./assets/png/insta-ico.png" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <!-- 
      <div class="home-hero__social">
        <a href="#" class="home-hero__social-icon-link">
          <img src="./assets/png/twitter-ico.png" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      <div class="home-hero__social">
        <a href="#" class="home-hero__social-icon-link">
          <img src="./assets/png/yt-ico.png" alt="icon" class="home-hero__social-icon" />
        </a>
      </div>
      -->
    </div>
    <div class="home-hero__mouse-scroll-cont">
      <div class="mouse"></div>
    </div>
  </section>
  <section id="about" class="about sec-pad">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-med">
        <span class="heading-sec__main">About Me</span>
        <span class="heading-sec__sub">
          I’m a Fullstack Developer with 5 years of experience crafting high-performance web solutions
        </span>
      </h2>
      <div class="about__content">
        <div class="about__content-main">
          <h3 class="about__content-title">Get to know me!</h3>
          <div class="about__content-details">
            <p class="about__content-details-para">
              Hey!<br />
              It's
              <strong>Vitor Godoy</strong>
              and I'm a <strong> Fullstack Developer </strong>.<br />
              I've done
              <strong> remote </strong>
              projects for transportation, redirection, and ERP companies, and collaborated
              with talented people to create
              <strong>digital products </strong>
              for both business and consumer use.
            </p>
            <p class="about__content-details-para">
              Over the years, I’ve explored hundreds of web and mobile apps across industries—dissecting their UX,
              workflows, and what makes them tick. This obsession helps me build solutions that aren’t just functional,
              but intuitive and user-focused.<br />

              <strong>Let’s connect!</strong> I’m always up for discussing tech trends, product design, or how we can
              apply the best ideas to your project.
              contact me here.
            </p>
          </div>
          <a href="./#contact" class="btn btn--med btn--theme dynamicBgClr">Contact</a>
        </div>
        <div class="about__content-skills">

          <section class="skills-section">
            <h2>My Skills</h2>
            <div class="skills-grid">
              <!-- Row 1 -->
              <div class="skill-item skill-php"><i class="fab fa-php"></i> <span>PHP</span></div>
              <div class="skill-item skill-js"><i class="fab fa-js"></i> <span>JavaScript</span></div>
              <div class="skill-item skill-css"><i class="fab fa-css3-alt"></i> <span>CSS</span></div>

              <!-- Row 2 -->
              <div class="skill-item skill-html"><i class="fab fa-html5"></i> <span>HTML</span></div>
              <div class="skill-item skill-git"><i class="fab fa-git-alt"></i> <span>Git</span></div>
              <div class="skill-item skill-python"><i class="fab fa-python"></i> <span>Python</span></div>

              <!-- Row 3 -->
              <div class="skill-item skill-mysql"><i class="fas fa-database"></i> <span>MySQL</span></div>
              <div class="skill-item skill-sass"><i class="fab fa-sass"></i> <span>SASS</span></div>
              <div class="skill-item skill-bootstrap"><i class="fab fa-bootstrap"></i> <span>Bootstrap</span></div>

              <!-- Row 4 -->
              <div class="skill-item skill-laravel"><i class="fab fa-laravel"></i> <span>Laravel</span></div>
              <div class="skill-item skill-cakephp"><i class="fas fa-cake"></i> <span>CakePHP</span></div>
              <div class="skill-item skill-docker"><i class="fab fa-docker"></i> <span>Docker</span></div>

            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <section id="projects" class="projects sec-pad">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-bg">
        <span class="heading-sec__main">Projects</span>
        <span class="heading-sec__sub">
          From Problem-Solving Code to Scalable Product Solutions
        </span>
      </h2>

      <div class="projects__content">
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="./assets/jpeg/simpledot-mockup.png" alt="Software Screenshot" class="projects__row-img"
              loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">SimpleERP by SimpleDot</h3>
            <p class="projects__row-content-desc">
              Enterprise Resource Planning (ERP) system for small, medium and large-sized companies. <br /><br />
              • Participation in the development of the system.<br />
              • Development of new releases and modules.<br />
              • Implementing client-requested changes to the system.<br />
              • Bug identification and correction.<br />
              • Integrations, consumption, and development of APIs.<br />
              • Software maintenance.<br />
              • Querying, modifications, and optimization of database queries.
            </p>
            <a href="https://www.simpledot.com.br/site/index.html" class="btn btn--med btn--theme dynamicBgClr"
              target="_blank">GO</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="./assets/jpeg/nobel-mockup.png" alt="Software Screenshot" class="projects__row-img"
              loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Nobel Cargo Systems (NICS) </h3>
            <p class="projects__row-content-desc">

              Intermodal Transportation System.<br /><br />
              • System analysis service.<br />
              • Bug identification and correction.<br />
              • System update.<br />
              • Querying, modifications, and optimization of database queries.<br />
              • System restructuring.<br />
              • Relational database diagramming.<br />
              • Recoding.<br />
              • Querying and optimizing database queries.<br />
              • Bug identification and correction.<br />
              • System migration to a framework.
            </p>
            <a href="https://www.nobelcargo.com/" class="btn btn--med btn--theme dynamicBgClr" target="_blank">GO</a>
          </div>
        </div>
        <div class="projects__row">
          <div class="projects__row-img-cont">
            <img src="./assets/jpeg/golog-mockup.png" alt="Software Screenshot" class="projects__row-img"
              loading="lazy" />
          </div>
          <div class="projects__row-content">
            <h3 class="projects__row-content-title">Go Log Global</h3>
            <p class="projects__row-content-desc">

              Package Fowarding System.<br /><br />
              • Participation in development of the system.<br />
              • Implementing client-requested changes to the system.<br />
              • Bug identification and correction.<br />
              • Integrations, consumption, and development of APIs.<br />
              • Software maintenance.<br />
              • Querying, modifications, and optimization of database queries.
            </p>
            <a href="https://www.gologglobal.com/en" class="btn btn--med btn--theme dynamicBgClr" target="_blank">GO</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="contact sec-pad dynamicBg">
    <div class="main-container">
      <h2 class="heading heading-sec heading-sec__mb-med">
        <span class="heading-sec__main heading-sec__main--lt">Contact Me</span>
        <span class="heading-sec__sub heading-sec__sub--lt">
          Let’s Turn Your Vision Into Smart Solutions
        </span>
      </h2>
      <div class="contact__form-container">
        <form action="#" class="contact__form">
          <div class="contact__form-field">
            <label class="contact__form-label" for="name">Name</label>
            <input required placeholder="Enter Your Name" type="text" class="contact__form-input" name="name"
              id="name" />
          </div>
          <div class="contact__form-field">
            <label class="contact__form-label" for="email">Email</label>
            <input required placeholder="Enter Your Email" type="text" class="contact__form-input" name="email"
              id="email" />
          </div>
          <div class="contact__form-field">
            <label class="contact__form-label" for="message">Message</label>
            <textarea required cols="30" rows="10" class="contact__form-input" placeholder="Enter Your Message"
              name="message" id="message"></textarea>
          </div>
          <button type="submit" class="btn btn--theme contact__btn">
            Submit
          </button>
        </form>
      </div>
    </div>
  </section>
  <footer class="main-footer">
    <div class="main-container">
      <div class="main-footer__upper">
        <div class="main-footer__row main-footer__row-1">
          <h2 class="heading heading-sm main-footer__heading-sm">
            <span>Social</span>
          </h2>
          <div class="main-footer__social-cont">
            <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/vitorvgodoy/">
              <img class="main-footer__icon" src="./assets/png/linkedin-ico.png" alt="icon" />
            </a>
            <a target="_blank" rel="noreferrer" href="https://github.com/vitorvgodoy">
              <img class="main-footer__icon" src="./assets/png/github-ico.png" alt="icon" />
            </a>
            <a target="_blank" rel="noreferrer" href="https://www.instagram.com/vitor.sql/">
              <img class="main-footer__icon main-footer__icon--mr-none" src="./assets/png/insta-ico.png" alt="icon" />
            </a>
           <!-- 
            <a target="_blank" rel="noreferrer" href="#">
              <img class="main-footer__icon" src="./assets/png/twitter-ico.png" alt="icon" />
            </a>
            <a target="_blank" rel="noreferrer" href="#">
              <img class="main-footer__icon" src="./assets/png/yt-ico.png" alt="icon" />
            </a>
            -->
          </div>
        </div>
        <div class="main-footer__row main-footer__row-2">
          <h4 class="heading heading-sm text-lt">Vitor V. Godoy</h4>
          <p class="main-footer__short-desc">
            Smart code, fast delivery, and profitable results<br /> turning ideas into high-impact digital solutions
          </p>
        </div>
      </div>

      <div class="main-footer__lower">
        &copy; Copyright 2025. Made by
        <a rel="noreferrer" target="_blank" href="https://vitorvgodoy.com">Vitor V. Godoy</a>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>