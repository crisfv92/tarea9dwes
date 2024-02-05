<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DWES: Tarea 9</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                text-align: left;
            }
            h1 {
                color: yellow;
                background-color: blue;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
        </script>
    </head>
    <body>
        <h1> Los nombres de las versiones de Pokemon: </h1>
        <?php
            //Se realiza la peticion a la api que nos devuelve el JSON con la información de los posts
            $pokemon_json = file_get_contents('https://pokeapi.co/api/v2/pokemon/ditto');
             // Se decodifica el fichero JSON y se convierte a objeto
             $pokemon_obj = json_decode($pokemon_json);
        ?>
       <p><cite>
        <?php
            //array !! 
            foreach ($pokemon_obj->game_indices as $index) {
                echo '<li>' . $index->version->name . '<br>';
            }
        ?>
        </cite></p>
    </body>
</html>

