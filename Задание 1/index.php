
 <?php 
        $h1=array("Главная страница");
        $title=array("Главная страница");
        $time=date("Y"); 
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        foreach ($title as $str_title)
    echo $str_title." ";
    ?></title>
</head>
<body>

    <h1> 
        <?php 
            foreach ($h1 as $str_h1)
            echo $str_h1." "; 
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
   
<br><br><br><br>
<h3>Задание 5</h3>
    <?php
    $a=114;
    $b=2;
    echo "5. *Используя только две переменные,
     поменяйте их значение местами. 
     Например, если a = 114, b = 2, надо, чтобы получилось:
      b = 114, a = 2. 
      Дополнительные переменные использовать нельзя.";?><br>
    <?php
        echo " 
            Было        <br>
            a= {$a}     <br>
            b={$b}      <br>";
        $a = $a + $b ;
        $b = -($b - $a);
        echo "
            a = a + b ={$a} <br>
            b = -(b - a) ={$b} <br>";
        $a = $a - $b;
        echo "
            a = a - b = {$a} <br>
            Стало  <br>
            a=".$a."<br>
            b=".$b."<br>"
    ?>
     <?php echo "
        <br>
        БИТЫ 
        <br>
        Было        <br>
        a= {$a}     <br>
        b={$b}      <br>";
         $a=($a^$b);
         $b=($a^$b);  // НЕ ПОНЯЛ КАК ТАК ПОЛУЧИЛОСЬ))
         $a=($a^$b);
    ?> 
    <br>
    <?php echo
       "Стало  <br>
        a=".$a."<br>
        b=".$b."<br>"
     ?>
   </body>
</html>
