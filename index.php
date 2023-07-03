<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  <!--=============== BOXICONS ===============-->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title> Portfolio website </title>
</head>

<body>
  <?php
  $db = mysqli_connect("localhost", "root", "", "portfolio");
  $query = " SELECT * from blogs ";
  $query2 = " SELECT * from projects ";
  $query3 = " SELECT * from categories ";
  $result = mysqli_query($db, $query);
  $result2 = mysqli_query($db, $query2);
  $result3 = mysqli_query($db, $query3);

  if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $content = $_POST["message"];
    $db = mysqli_connect("localhost", "root", "", "portfolio");
    // Get all the submitted data from the form
    $sql = "INSERT INTO contacts (name, email, subject,message) VALUES ('$name', '$email', '$subject','$content')";
    // Execute query
    mysqli_query($db, $sql);
    // require_once "contact-view.php";
  }

  ?>
  <!--=============== HEADER ===============-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">Hi 👋</a>

      <div class="nav__menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#home" class="nav__link active-link">
              <i class="bx bx-home-alt"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#about" class="nav__link">
              <i class="bx bx-user"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#skills" class="nav__link">
              <i class="bx bx-book"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#work" class="nav__link">
              <i class="bx bx-briefcase-alt-2"></i>
            </a>
          </li>

          <li class="nav__item">
            <a href="#contact" class="nav__link">
              <i class="bx bx-message-square-detail"></i>
            </a>
          </li>
        </ul>
      </div>

      <!-- THEME CHANGE BUTTON  -->
      <i class="bx bx-moon change-theme" id="theme-button"></i>
    </nav>
  </header>

  <!--=============== MAIN ===============-->
  <main class="main">
    <!--=============== HOME ===============-->
    <section class="home section" id="home">
      <div class="home__container container grid">
        <div class="home__data">
          <span class="home__greeting">I'm</span>
          <h1 class="home__name">Stacy Nafula</h1>
          <h3 class="home__education">Full Stack Developer</h3>

          <div class="home__buttons">
            <a download="" href="assets/pdf/Kevin-Cv.pdf" class="button button--ghost">
              Download CV
            </a>
            <!-- <a href="#about" class="button">About me</a> -->
          </div>
        </div>

        <div class="home__handle">
          <img src="assets/img/user.jpg" alt="perfill" class="home__img" />
        </div>

        <div class="home__social">
          <a href="https://www.linkedin.com/" class="home__social-link" target='_blank'>
            <i class="bx bxl-linkedin-square"></i>
          </a>
          <a href="https://github.com/javokhirabdullakhonov" class="home__social-link" target='_blank'>
            <i class="bx bxl-github"></i>
          </a>
          <a href="https://instagram.com/javokhirweb7" class="home__social-link" target='_blank'>
            <i class="bx bxl-instagram"></i>
          </a>
        </div>

        <a href="#about" class="home__scroll">
          <i class="bx bx-mouse home__scroll-icon"></i>
          <span class="home__scroll-name">Scroll Down</span>
        </a>
      </div>
    </section>

    <!--=============== ABOUT ===============-->
    <section class="about section" id="about">
      <span class="section__subtitle">My intro</span>
      <h2 class="section__title">About me</h2>

      <div class="about__container container grid">
        <img src="assets/img/user.jpg" alt="about img" class="about__img" />

        <div class="about__data">
          <div class="about__info">
            <div class="about__box">
              <i class="bx bx-award about__icon"></i>
              <h3 class="about__title">Experience</h3>
              <span class="about__subtitle">1 + Years Working</span>
            </div>

            <div class="about__box">
              <i class="bx bx-briefcase-alt about__icon"></i>
              <h3 class="about__title">Completed</h3>
              <span class="about__subtitle">4 + Projects</span>
            </div>

            <div class="about__box">
              <i class="bx bx-support about__icon"></i>
              <h3 class="about__title">Support</h3>
              <span class="about__subtitle">Online 24/7</span>
            </div>
          </div>

          <p class="about__description">
            Frontend developer, I create web pages with UI / UX user
            interface, I have years of experience and many clients are happy
            with the projects carried out.
          </p>
          <!-- <a href="#contact" class="button">Contact me</a> -->
        </div>
      </div>
    </section>

    <!--=============== SKILLS ===============-->
    <section class="skills section" id="skills">
      <span class="section__subtitle">My abilities</span>
      <h2 class="section__title">My experience</h2>

      <div class="skills__container container grid">
        <div class="skills__content">
          <h3 class="skills__title">Frontend Developer</h3>

          <div class="skills__box">
            <div class="skills__group">
              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">HTML</h3>
                  <span class="skills__level">Basic</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">CSS</h3>
                  <span class="skills__level">Advanced</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">JavaScript</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>
            </div>

            <div class="skills__group">
              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">Bootstrap</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">Git</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">React</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="skills__content">
          <h3 class="skills__title">Backend Developer</h3>

          <div class="skills__box">
            <div class="skills__group">
              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">PHP</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">Node Js</h3>
                  <span class="skills__level">Basic</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">Python</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>
            </div>

            <div class="skills__group">
              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">MySQL</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>

              <div class="skills__data">
                <i class="bx bxs-badge-check"></i>

                <div>
                  <h3 class="skills__name">Firebase</h3>
                  <span class="skills__level">Intermediate</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--=============== BLOGS ===============-->
    <section class="services section">
      <span class="section__subtitle">Insights</span>
      <h2 class="section__title">Recent Blogs</h2>

      <div class="blogs__container container grid">
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>

            <div class="blogs__card">
              <img src="./backend/uploads/<?php echo $row['image']; ?>" alt="work 1" class="work__img" />

              <h4 class="blogs__title">
                <?php echo $row['title']; ?><br />

              </h4>

              <span class="blogs__button">
                Read more <i class="bx bx-right-arrow-alt blogs__icon"></i>
              </span>

              <div class="blogs__modal">
                <div class="blogs__modal-content">
                  <i class="bx bx-x blogs__modal-close"></i>

                  <h3 class="blogs__modal-title"><?php echo $row['description']; ?></h3>
                  <p class="blogs__modal-description">
                    <?php echo $row['content']; ?>
                  </p>

                  <h3 class="blogs__modal-title"><?php echo $row['date']; ?></h3>
                </div>
              </div>
            </div>
        <?php }
        }
        ?>

      </div>
    </section>

    <!--=============== WORK ===============-->
    <section class="work section" id="work">
      <span class="section__subtitle">My Portfolio</span>
      <h2 class="section__title">Recent Works</h2>

      <div class="work__filter">
        <span class="work__item active-work" data-filter="all">All</span>

      </div>

      <div class="work__container container grid">
        <?php
        if ($result2->num_rows > 0) {
          while ($row = $result2->fetch_assoc()) {
        ?>

            <div class="work__card mix <?php echo $row['category_id']; ?>">
              <img src="./backend/portfolio/<?php echo $row['image']; ?>" alt="work 1" class="work__img" />

              <h3 class="work__title"><?php echo $row['name']; ?></h3>

              <a href="<?php echo $row['url']; ?>" target="_blank" class="work__button">
                Demo <i class="bx bx-right-arrow-alt work__icon"></i>
              </a>
            </div>
        <?php }
        }
        ?>


      </div>
    </section>

    <!--=============== TESTIMONIALS ===============-->
    <section class="testimonial section">
      <span class="section__subtitle">What Happy Clients Say</span>
      <h2 class="section__title">Testimonials</h2>

      <div class="testimonial__container container swiper">
        <div class="swiper-wrapper">
          <div class="testimonial__card swiper-slide">
            <img src="assets/img/testimonial1.png" alt="" class="testimonial__img" />

            <h3 class="testimonial__name">Jhon Doe</h3>
            <p class="testimonial__description">
              A really good job, all aspects of the project were followed step
              by step and with good results.
            </p>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!--=============== CONTACT ===============-->
    <section class="contact section" id="contact">
      <span class="section__subtitle">Get in touch</span>
      <h2 class="section__title">Contact me</h2>

      <div class="contact__container container grid">
        <div class="contact__content">
          <h3 class="contact__title">Talk to me</h3>

          <div class="contact__info">
            <div class="contact__card">
              <i class="bx bx-mail-send contact__card-icon"></i>
              <h3 class="contact__card-title">Email</h3>
              <span class="contact__card-data">user@gmail.com</span>

              <a href="mailto:johndoe@gmail.com" target="_blank" class="contact__button">
                Email me
                <i class="bx bx-right-arrow-alt contact__button-icon"></i>
              </a>

            </div>

            <div class="contact__card">
              <i class="bx bxl-messenger contact__card-icon"></i>
              <h3 class="contact__card-title">Messenger</h3>
              <span class="contact__card-data">user</span>

              <a href="https://m.me/" target="_blank" class="contact__button">
                Write me
                <i class="bx bx-right-arrow-alt contact__button-icon"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="contact__content">
          <h3 class="contact__title">Say Hello</h3>

          <form class="contact__form" method="POST" action="">
            <div class="contact__form-div">
              <label for="" class="contact__form-tag">Name</label>
              <input type="text" name="name" class="contact__form-input" placeholder="Enter your name">
            </div>
            <div class="contact__form-div">
              <label for="" class="contact__form-tag">Subject</label>
              <input type="text" name="subject" class="contact__form-input" placeholder="Enter the subject">
            </div>

            <div class="contact__form-div">
              <label for="" class="contact__form-tag">Email</label>
              <input type="email" name="email" class="contact__form-input" placeholder="Enter your email">
            </div>


            <div class="contact__form-div contact__form-area">
              <label for="" class="contact__form-tag">Message</label>
              <textarea name="message" class="contact__form-input" cols="30" rows="10" placeholder="Write a message"></textarea>
            </div>

            <button class="button" type="submit" name="send">Send Message</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!--=============== FOOTER ===============-->
  <footer class="footer">
    <div class="footer__container container">

      <ul class="footer__list">
        <li>
          <a href="#about" class="footer__link">About</a>
        </li>

        <li>
          <a href="#work" class="footer__link">Projects</a>
        </li>

        <li>
          <a href="#testimonial" class="footer__link">Testimonial</a>
        </li>
      </ul>

      <ul class="footer__social">
        <a href="https://www.facebook.com/" class="footer__social-link">
          <i class="bx bxl-facebook"></i>
        </a>
        <a href="https://twitter.com/" class="footer__social-link">
          <i class="bx bxl-twitter"></i>
        </a>
        <a href="https://t.me/" class="footer__social-link">
          <i class="bx bxl-instagram"></i>
        </a>
      </ul>


      <span class="footer__copy">
        &#169, kevdevcodes. All rights reserved
      </span>

    </div>
  </footer>


  <!--=============== SCROLLREVEAL ===============-->
  <script src="assets/js/scrollreveal.min.js"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!--=============== MIXITUP FILTER ===============-->
  <script src="assets/js/mixitup.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>