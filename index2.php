<?php
    include ('settings.php'); // или include_once
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            foreach ($title as $str_title)
             echo $str_title." ";
        ?>
    </title>
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
   </body>
</html>
