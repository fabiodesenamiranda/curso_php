<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do Carro" >
        </div>
        <div>
            <input type="text" name="preço" placeholder="Preco do Carro">
        </div>
        
        <div>
            <input type="submit" value="Enviar">
        </div>
        <div>
        <input type="checkbox" name="Opcionais[]" value="Teto Solar">Teto Solar
        </div>
        <div>
        <input type="checkbox" name="Opcionais[]" value="Pelicula">Pelicula
        </div>
        <div>
        <input type="checkbox" name="Opcionais[]" value="Blindado">Blindado
        </div>


    </form>
</body>
</html>