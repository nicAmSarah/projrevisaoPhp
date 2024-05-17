<?php 
    include ( __dir__  . '/../vendor/autoload.php');
    Use App\model\ToDo;
    $todo1 = new ToDo(1, ' Aprendendo PHP');
    print_r($todo1->title);
