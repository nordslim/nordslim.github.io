<!DOCTYPE html>
<html long="en">
<head>
  <meta charset = "UTF-8"
        name = "viewport"
        content = "width = device-width,
                   user-scalable = no,
                   initial-scale = 1.0,
                   maximum-scale = 1.0,
                   minimum-scale = 1.0"
        http-equiv = "X-UA-Compatible"
        content = "ie = edge">

  <title>VLASTAR - Контакты</title>

  <style>
     #layer1,#layer2, #layer3, #layer4 {
        position: relative; /* Относительное позиционирование */
     } 
     #layer3 {
        font-size: 50px; /* Размер шрифта в пикселах */
         color: #000080; /* Синий цвет текста */
     }
     #layer2 {
       top: -55px; /* Сдвигаем текст вверх */
       left: 5px; /* Сдвигаем текст вправо */
       color: #ffa500; /* Оранжевый цвет текста */
       font-size:70px;  /* Размер шрифта в пикселах */
     }
     #layer4 {
       top: 90px; /* Сдвигаем текст вверх */
       left: 5px; /* Сдвигаем текст вправо */
       /*color: #ffa500; /* Оранжевый цвет текста */
       /*font-size:70px;  /* Размер шрифта в пикселах */
     } 

     #layer1 { z-index: 4; }
     #layer4 { z-index: 1; }
  </style>





  <link rel = "stylesheet" 
        href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity = "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin = "anonymous">


  <link href = "css/style.css"
        rel  = "stylesheet"
        type = "text/css">

  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>




</head>



<body style="
             background-position: 0px 77px; 
             background-attachment: fixed; /* фоновый рисунок не прокручивается*/
             background-image: url('#');
             background-repeat: no-repeat;
             background-size: 100%; /* Современные браузеры */
        /*   -moz-background-size: 100%; /* Firefox 3.6+ */
        /*   -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
        /*   -o-background-size: 100%; /* Opera 9.6+ */
    ">



 <header id="layer1">
   <?php include "header.php"; ?>
   <?php include "menu.php"; ?>
 </header>
 



 
<div id="layer4">
   <?php include "text-contacts.php"; ?>
</div>
 
 


<footer id="layer4"> 
    <?php include "footer.php"; ?>
</footer>



</body>

</html>
