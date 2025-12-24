<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


    <link rel="stylesheet" href="public/src/css/bank.css" />
    <title>Bankist | When Banking meets Minimalist</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">

          <img src="public/assets/bankLogo.png"
          class="nav__logo"
          id="bankLogo.png"
        />

        <ul class="nav__links">
          <li class="nav__item">
            <a class="nav__link" href="#section--1">Features</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#section--2">Operations</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#section--3">Testimonials</a>
          </li>
          <li class="nav__item">
            <a class="nav__link nav__link--btn btn--show-modal" href="#"
              >Open account</a
            >
          </li>
        </ul>
      </nav>

      <div class="header__title">
        <h1>
          When
         banking
          meets<br />
          <span >minimalist</span>
        </h1>
        <h4>A simpler banking experience for a simpler life.</h4>
        <button class="btn--text btn--scroll-to">Learn more &DownArrow;</button>
        <img
              src="/public/assets/wemix.jpeg"
          class="header__img"
          alt="bank items"
        />
      </div>
    </header>

    <section class="section" id="section--1">
      <div class="section__title">
        <h2 class="section__description">Features</h2>
        <h3 class="section__header">
          Everything you need in a modern bank and more.
        </h3>
      </div>

      <div class="features">
        <img
          src="public/assets/debit2.png"
          alt="Computer"
          class="features__img lazy-img"
        />
        <div class="features__feature">
          <div class="features__icon">
<i class="fas fa-arrow-trend-up"></i>
          </div>
          <h5 class="features__header">100% digital bank</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde alias
            sint quos? Accusantium a fugiat porro reiciendis saepe quibusdam
            debitis ducimus.
          </p>
        </div>

        <div class="features__feature">
          <div class="features__icon">
  <i class="fas fa-credit-card"></i>
          </div>
          <h5 class="features__header">Watch your money grow</h5>
          <p>
            Nesciunt quos autem dolorum voluptates cum dolores dicta fuga
            inventore ab? Nulla incidunt eius numquam sequi iste pariatur
            quibusdam!
          </p>
        </div>
        <img
               src="public/assets/debit3.png"
   
          alt="Plant"
          class="features__img lazy-img"
        />

        <img
             src="public/assets/debit1.png"

          alt="Credit card"
          class="features__img lazy-img"
        />
        <div class="features__feature">
          <div class="features__icon">
<i class="fas fa-sack-dollar"></i>

          </div>
          <h5 class="features__header">Free debit card included</h5>
          <p>
            Quasi, fugit in cumque cupiditate reprehenderit debitis animi enim
            eveniet consequatur odit quam quos possimus assumenda dicta fuga
            inventore ab.
          </p>
        </div>
      </div>
    </section>

    <section class="section" id="section--2">
      <div class="section__title">
        <h2 class="section__description">Operations</h2>
        <h3 class="section__header">
          Everything as simple as possible, but no simpler.
        </h3>
      </div>

      <div class="operations">
        <div class="operations__tab-container">
          <button
            class="btn operations__tab operations__tab--1 operations__tab--active"
            data-tab="1"
          >
            <span>01</span>Instant Transfers
          </button>
          <button class="btn operations__tab operations__tab--2" data-tab="2">
            <span>02</span>Instant Loans
          </button>
          <button class="btn operations__tab operations__tab--3" data-tab="3">
            <span>03</span>Instant Closing
          </button>
        </div>
        <div
          class="operations__content operations__content--1 operations__content--active"
        >
          <div class="operations__icon operations__icon--1">

          </div>
          <h5 class="operations__header">
            Tranfser money to anyone, instantly! No fees, no BS.
          </h5>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
          </p>
        </div>

        <div class="operations__content operations__content--2">
          <div class="operations__icon operations__icon--2">

          </div>
          <h5 class="operations__header">
            Buy a home or make your dreams come true, with instant loans.
          </h5>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
        </div>
        <div class="operations__content operations__content--3">
          <div class="operations__icon operations__icon--3">
            <svg>
           
            </svg>
          </div>
          <h5 class="operations__header">
            No longer need your account? No problem! Close it instantly.
          </h5>
          <p>
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
          </p>
        </div>
      </div>
    </section>

    <section class="section" id="section--3">
      <div class="section__title section__title--testimonials">
        <h2 class="section__description">Not sure yet?</h2>
        <h3 class="section__header">
          Millions of Bankists are already making their lifes simpler.
        </h3>
      </div>

      <div class="slider">
        <div class="slide">
          <div class="testimonial">
            <h5 class="testimonial__header">Best financial decision ever!</h5>
            <blockquote class="testimonial__text">
            Evolbank has completely changed the way I manage my finances. I feel safe knowing that every transaction is protected with top‑level security. The transparency and reliability give me peace of mind, and I finally trust online banking without hesitation.
            </blockquote>
            <address class="testimonial__author">
              <img src="https://definicion.de/wp-content/uploads/2020/12/Dolar-1.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">Aarav Lynn</h6>
              <p class="testimonial__location">San Francisco, USA</p>
            </address>
          </div>
        </div>

        <div class="slide">
          <div class="testimonial">
            <h5 class="testimonial__header">
              The last step to becoming a complete minimalist
            </h5>
            <blockquote class="testimonial__text">
              I love how easy it is to use Evolbank. From paying bills to transferring money, everything happens in seconds. The interface is simple, intuitive, and works perfectly on my phone. It saves me time every single day.
            </blockquote>
            <address class="testimonial__author">
              <img src="https://definicion.de/wp-content/uploads/2020/12/Dolar-1.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">Miyah Miles</h6>
              <p class="testimonial__location">London, UK</p>
            </address>
          </div>
        </div>

        <div class="slide">
          <div class="testimonial">
            <h5 class="testimonial__header">
              Finally free from old-school banks
            </h5>
            <blockquote class="testimonial__text">
             Evolbank isn’t just a bank—it feels like a financial partner. The smart tools help me track spending and set savings goals, and the customer support team is always responsive. It’s modern banking done right
            </blockquote>
            <address class="testimonial__author">
              <img src="https://definicion.de/wp-content/uploads/2020/12/Dolar-1.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">Francisco Gomes</h6>
              <p class="testimonial__location">Lisbon, Portugal</p>
            </address>
          </div>
        </div>

        <button class="slider__btn slider__btn--left">&larr;</button>
        <button class="slider__btn slider__btn--right">&rarr;</button>
        <div class="dots"></div>
      </div>
    </section>

    <section class="section section--sign-up">
      <div class="section__title">
        <h3 class="section__header">
          The best day to join Bankist was one year ago. The second best is
          today!
        </h3>
      </div>
      <button class="btn_openAcc btn--show-modal">Open your free account today!</button>
    </section>

    <footer class="footer">
      <ul class="footer__nav">
        <li class="footer__item">
          <a class="footer__link" href="#">About</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Pricing</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Terms of Use</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Privacy Policy</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Careers</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Blog</a>
        </li>
        <li class="footer__item">
          <a class="footer__link" href="#">Contact Us</a>
        </li>
      </ul>
      <img src="https://definicion.de/wp-content/uploads/2020/12/Dolar-1.jpg" alt="Logo" class="footer__logo" />
      <p class="footer__copyright">
        &copy; Copyright by
        <a
          class="footer__link twitter-link"
          target="_blank"
          href="https://twitter.com/jonasschmedtman"
          >Jonas Schmedtmann</a
        >. Use for learning or your portfolio. Don't use to teach. Don't claim
        as your own product.
      </p>
    </footer>

<div class="modal hidden">
  <button class="btn--close-modal">&times;</button>
  <div class="modal__content">
    <h2 class="modal__header">
      Open your bank account <br />
      in just <span class="highlight">5 minutes</span>
    </h2>

    <form method="POST" action="../backend/control/register.php" class="modal__form">
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your firstName">
      </div>

      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your lastname">
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your  password">
      </div>

      <button type="submit" class="btn-primary">
        Next step ➜
      </button>
    </form>

    <p class="login-text">Already have an account?</p>
    <a href="router.php?page=bankLogin" class="btn-secondary">
      Ingresar
    </a>
  </div>
</div>
<div class="overlay hidden"></div>


    <script src="public/src/js/bank.js" type="module"></script>
  </body>
</html>
