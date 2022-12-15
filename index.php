<?php 

include 'logic.php';

if (!check()) {
  header("Location: main.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iCourses</title>
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  />
</head>
<body>
        <!--NAVBAR START-->
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
                        <a href="uxcourses.html">UI/UX Дизайн</a>
                      </div>
                      <div class="option">
                        <a href="webcourses.html">Web Разработка</a>
                      </div>
                      <div class="option">
                        <a href="mobilecourses.html">Мобильная Разработка</a>
                      </div>
                      <div class="option">
                        <a href="smmcourses.html">SMM</a>
                      </div>
                      <div class="option">
                        <a href="designcourses.html">Дизайн</a>
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
                  <a class="navbar_register-about" href="logout.php">Выйти</a>
                  <a class="navbar_bell" href="#!"><i class="far fa-bell"></i></a>  
                  <div class="navbar_user">
                    <div class="navbar_user-container">
                      <div class="user_option">
                        <a href="user.html"> <img src="./img/userprofileicon.svg" alt="profile"> Профиль</a>
                      </div>
                      <div class="user_option">
                        <a href="courses.html"> <img src="./img/usercoursicon.svg" alt="course" style="margin-right: 15px;"> Мои курсы</a>
                      </div>
                      <div class="user_option">
                        <a href="user.html"> <img src="./img/userdiplomicon.svg" alt="diplom"> Достижения</a>
                      </div>
                      <div class="user_option">
                        <a href="user.html"> <img src="./img/usercloudicon.svg" alt="cloud"> Загрузки</a>
                      </div>
                      <div class="user_option">
                        <a href="#!"> <img src="./img/userexiticon.svg" alt="exit"> Выйти</a>
                      </div>
                    </div>
                    <div class="nabvar_user-name"><img src="./img/username.png" alt="username"><p><?php echo $_COOKIE['email']; ?></p></div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <!--NAVBAR END-->

    <!--HEADER START-->
      <header class="header">
      <div class="container">
        <div class="header_content">
          <div class="header_left">
            <h1>Онлайн курсы <br> в одном месте</h1>
            <p>Развивайте свою карьеру. Получите доступ <br> к нашим высококачественным онлайн-курсам</p>
            <div class="header_register_registration-border">
              <a class="header_register_registration" href="courses.html">К курсам</a>
            </div>
          </div>
          <div class="header_right">
            <img src="./img/header_bq2.png" alt="">
          </div>
        </div>
      </div>
      </header>
        <script src="js/profile.js"></script>
</body>
</html>