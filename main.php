<?php 

include 'logic.php';

if (check()) {
  header("Location: index.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <title>iCourses</title>
  </head>
  <body>
    <nav class="nav">
      <div class="container">
        <div class="navbar">
          <div class="header__burger burger">
            <span class="burger__line burger__line_first"></span>
            <span class="burger__line burger__line_third"></span>
          </div>
          <div class="navbar_content">
            <div class="header__nav-close">
              <span class="header__nav-close-line"></span>
              <span class="header__nav-close-line"></span>
            </div>
            <div class="select-box">
              <div class="options-container">
                <div class="option">
                  <a href="#!">UI/UX Дизайн</a>
                </div>
                <div class="option">
                  <a href="#!">Web Разработка</a>
                </div>
                <div class="option">
                  <a href="#!">Мобильная Разработка</a>
                </div>
                <div class="option">
                  <a href="#!">SMM</a>
                </div>
                <div class="option">
                  <a href="#!">Дизайн</a>
                </div>
              </div>
              <div class="selected">Курсы</div>
            </div>
            <!--ADAPTIVE-NAVBAR-ABOUT START-->
            <div class="adaptive_about-us">
              <a href="#!" class="adaptive_about">O нас</a>
              <a class="adaptive_bell" href="#!"><i class="far fa-bell"></i></a>  
            </div>
            <!--ADAPTIVE-NAVBAR-ABOUT END-->
            <div class="navbar_content-search">
              <div class="navbar_content-search-wrap">
                <div class="search">
                  <input type="text" class="searchTerm" placeholder="Поиск" />
                  <button type="submit" class="searchButton">
                    <img src="./img/search.svg" alt="search" />
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar_title">
            <a class="navbar_title-link" href="#!"><span class="navbar_span-title">i</span>Courses</a>
          </div>
          <div class="navbar_register">
            <a class="navbar_register-sign-up" href="#!">Войти</a>
            <a class="navbar_register-registration" href="#!">Присоединиться</a>
            <a class="navbar_exit-btn" href="#!"><img src="./img/exitBtn.svg" alt=""></a>
          </div>
        </div>
      </div>
    </nav>
    <section class="navbar_register">
      <div class="register_effect">
        <div class="register_window-container">
          <ul class="register_tabs">
            <li class="register_active">
              <a href="#!">Войти</a>
            </li>
            <li>
              <a href="#!">Регистрация</a>
            </li>
          </ul>
        </div>
        <div class="register_container">
          <form class="register_panel active" data-index="0" action="logic.php" method="POST">
            <label class="register_labelname" for="email">EMAIL</label>
            <input class="register_inputname" type="email" placeholder="Email" name="email">
            <label class="signup_labelname" for="fullname">PASSWORD</label>
            <input class="signup_inputname" type="password" placeholder="Password" name="pass">
            <input class="register_btn" type="submit" value="Войти" name="sign"/>
            <a class="register_linktext" href="#!">By signing up to create an account I accept iCourses’ Terms of Use and Privacy Policy</a>
          </form>
          <form class="register_panel" data-index="1" action="logic.php" method="POST">
              <label class="register_labelname" for="fullname">FULL NAME</label>
              <input class="register_inputname" type="text" placeholder="Full Name" name="name">
              <label class="register_labelname" for="email">EMAIL</label>
              <input class="register_inputname" type="email" placeholder="Email" name="email">
              <label class="register_labelname" for="fullname">PASSWORD <span>(Between 8-72 characters)</span></label>
              <input class="register_inputname" type="password" placeholder="Password" name="pass">
              <input class="register_btn" type="submit" value="Регистрироваться" name="register"/>
              <a class="register_linktext" href="#!">By signing up to create an account I accept iCourses’ Terms of Use and Privacy Policy</a>
          </form>
        </div>
    </div>
    </section>
    <header class="header">
      <div class="container">
        <div class="header_content">
          <div class="header_left">
            <h1>Онлайн курсы <br> в одном месте</h1>
            <p>Развивайте свою карьеру. Получите доступ <br> к нашим высококачественным онлайн-курсам</p>
            <div class="header_register_registration-border">
              <a class="header_register_registration" href="#!">Присоединиться</a>
            </div>
          </div>
          <div class="header_right">
            <img src="./img/header_bq.png" alt="">
          </div>
        </div>
      </div>
    </header>
    <script src="js/main.js"></script>
  </body>
</html>
