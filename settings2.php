<?php 
    $h1="Главная страница"; 
    $title="Главная страница";
    $time=date("Y");
    $content=file_get_contents("site.html");
    $content=str_replace("{{h1}}",$h1,$content);
    $content=str_replace("{{title}}",$title,$content);
    $content=str_replace("{{time}}",$time,$content);
    echo $content;