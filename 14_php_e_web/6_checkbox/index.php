    <?php

    if(isset($_POST['ingredientes'])) {
        $ingredientes = $_POST['ingredientes'];

        print_r($ingredientes);
    }

    ?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    <form action="index.php" method="POST">
        <div>
            <input type="checkbox" name="ingredientes[]" value="tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="abobora"> Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="feijao"> Feijão
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="batata"> Batata
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="pepino"> Pepino
        </div>
        <div>
            <input type="checkbox" name="ingredientes[]" value="cebola"> Cebola
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
    </body>
    </html>