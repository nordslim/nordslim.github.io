<!-- менюшка ККК -->

<section style="     /*height: 15px;*/
            position: fixed;
            top: 17px;
            left: 0px;
            width: 100%;            
            border: none;         /**5px solid black;**/
            background: none ;
            box-shadow: 0px 20px 18px rgba(0,0,0,0.25);">

<!--
navbar-light
-->
<nav class="navbar navbar-expand-lg bg-light"
     style="background: white;
            top: 12px;
            max-height: 46px;
            font: 75% Palatino Linotype;">      <!--  правая граница после последней кнопки - -->

  <a style="color: #0A67A3" class="navbar-brand" href="1_logo.php">Vlastar<span style="color: #717171"> Christian Ministry</span>
       <img src="images/росток2_0.png">
       </a>

  <button class="navbar-toggler"
          href="1_logo.php"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Меню</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
         <a class="btn btn-outline-secondary" href='index.php' >Главная
            <span class="sr-only">(current)</span>
         </a>
      </li>

      <li class="n"></li>
      <li class="nav-item dropdown">
        <a class="btn btn-outline-success"
           href="#" id="navbarDropdown"
           role="button"
           data-toggle="dropdown"
           aria-haspopup="true"
           aria-expanded="false">Наша Миссия
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href='2_mission.php'>Распространение Евангелия</a>
             <div class="dropdown-divider"></div>
          <a class="dropdown-item" href='2_mission.php'>Детский лагерь</a>
             <div class="dropdown-divider"></div>
          <a class="dropdown-item" href='2_mission.php'>Дела милосердия</a>
        </div>
      </li>
<!-- " -->
      <li class="nav-item dropdown">
        <a class="btn btn-outline-danger"        
           href="#" id="navbarDropdown"
           role="button"
           data-toggle="dropdown"
           aria-haspopup="true"
           aria-expanded="false">Фото галерея</a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href='3_foto.php'>Общее</a>
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href='3_foto.php'>Лагерь</a>
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href='3_foto.php'>Другое ...</a>
           </div>
      </li>

      <li class="n"></li>
      <li class="nav-item dropdown">
        <a class="btn btn-outline-success"
           href="#" id="navbarDropdown"
           role="button"
           data-toggle="dropdown"
           aria-haspopup="true"
           aria-expanded="false">Информация
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href='4_info.php'>Наши Спонсоры/Друзья</a>
             <div class="dropdown-divider"></div>
          <a class="dropdown-item" href='4_info.php'>Наши Проекты</a>
             <div class="dropdown-divider"></div>
          <a class="dropdown-item" href='4_info.php'>Наши Сотрудники</a>
             <div class="dropdown-divider"></div>
          <a class="dropdown-item" href='4_info.php'>Отчеты</a>
        </div>
      </li>

<!--
 tabindex="-1" aria-disabled="true"
-->
      <li class="nav-item">
        <a class="btn btn-outline-warning" href='5_mail_to.php'>Обратная связь</a></li>

      <li class="nav-item">
        <a class="btn btn-outline-dark" href='6_contacts.php'>Контакты</a>
      </li>

    </ul>

  </div>
</nav>

</section>

<!--
    <style>
      #navbar ul{
        display: none;
        background-color: #f90;
        position: absolute;
        top: 100%;
      }
      #navbar li:hover ul { display: block; }
      #navbar, #navbar ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      #navbar {
        height: 30px;
        background-color: #666;
        padding-left: 25px;
        min-width: 470px;
      }
      #navbar li {
        float: left;
        position: relative;
        height: 100%;
      }
      #navbar li a {
        display: block;
        padding: 6px;
        width: 100px;
        color: #fff;
        text-decoration: none;
        text-align: left;
      }
      #navbar ul li { float: none; }
      #navbar li:hover { background-color: #f90; }
      #navbar ul li:hover { background-color: #666; }
    </style>
 
  
    <ul id="navbar">
      <li><a href="#">Главная</a></li>
      <li><a href="#">Новости</a></li>
      <li><a href="#">Контакты</a>
        <ul>
          <li><a href="#">Адрес</a></li>
          <li><a href="#">Телефон</a></li>
          <li><a href="#">Email</a></li>
        </ul>
      </li>
      <li><a href="#">О нас</a></li>
    </ul>
-->





<!-- Менюшка простая

<p>Это наше меню</p>

<p><?php
  if   ($master == "Главная") { echo "<p>Главная</p>"; }
  else { echo "<p><a href='index.php'>Главная</a></p>"; }
?></p>

<p><?php
  if   ($master == "Наша Миссия") { echo "<p>Наша Миссия</p>"; }
  else { echo "<p><a href='2_mission.php'>Наша Миссия</a></p>"; }
?></p>

<p><?php
  if   ($master == "Фото галерея") { echo "<p>Фото галерея</p>"; }
  else { echo "<p><a href='3_foto.php'>Фото галерея</a></p>"; }
?></p>

<p><?php
  if   ($master == "Информация") { echo "<p>Информация</p>"; }
  else { echo "<p><a href='4_info.php'>Информация</a></p>"; }
?></p>

Менюшка простая--> 
