<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera Immagine</title>
</head>
<body>
    
    <?php 
        function generaUrlImmagine($lenght, $height){
            $link="https://picsum.photos/";
            $link=$link.$lenght."/".$height;
            return $link;
        }
        echo "<img src='".generaUrlImmagine(800, 400)."' alt='ciao'>";


    
    ?>
</body>