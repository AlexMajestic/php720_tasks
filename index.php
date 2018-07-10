<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Задачи 720com</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php
                for($i=1;$i<=12;$i++):
                $current_link = "http://localhost/tasks/".$i.".php";
                $heads = get_headers($current_link);
                $add_style = NULL;
                if($heads[0]=="HTTP/1.1 200 OK"){$add_style = "style='background-color:#32CD32;'";}
            ?>
                <a class="task_link" href="/tasks/<?=$i?>.php" <?=$add_style?> >Упражнение <?=$i?></a>
            <?php endfor; ?>
        </div>
    </body>
</html>