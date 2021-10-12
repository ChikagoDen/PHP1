
   <?php 
        $h1=array("Главная страница");
        $title=array("Главная страница");
        $time=date("Y"); 
        //  require_once('index1.html');
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>

    <h1> 
        <?php 
            foreach ($h1 as $str)
            echo $str." "; 
        ?>
    </h1>
  
    <ul class="menu">
        <li><a href="catalog.html">Каталог</a></li>
        <li><a href="contact.html">Контакты</a></li>
        <!-- <li></li> -->
    </ul>
    <hr>
   
    <h1>Магазин <b>&laquo;ВСЕЛЕНАЯ TV&raquo;</b> </h1>
    
    <p>Добро пожаловать в&nbsp;наш замечательный магазин &laquo;ВСЕЛЕНАЯ&nbsp;TV&raquo; с 
        самыми низкими ценами и&nbsp;самым высоким качеством.
    </p>
    <hr>
    <p class=""> &laquo;Все права защищены &copy;&nbsp;<?php echo $time;?>&raquo; </p>
   

    <?php
    $a=114;
    $b=2;
    echo "5. *Используя только две переменные,
     поменяйте их значение местами. 
     Например, если a = 114, b = 2, надо, чтобы получилось:
      b = 114, a = 2. 
      Дополнительные переменные использовать нельзя.";?><br>
    <?php echo "Было";?> <br>
    <?php echo "a=".$a;?><br>
    <?php echo "b=".$b;?> <br>
    <?php echo " a = a + b     $a = $a + $b ;"?> <br>
    <?php echo " b = b - a     $b = $b - $a ;"?> <br>
    <?php echo " b = -b        $b = -$b ;"?> <br>
    <?php echo " a = a - b     $a = $a - $b ;"?> <br>
    <?php echo "Стало";?> <br>
    <?php  echo "a=".$a;?> <br>
    <?php echo "b=".$b; ?><br> 
   </body>
</html>
