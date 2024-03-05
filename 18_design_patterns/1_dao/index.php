<?php
    include_once("db.php");

?>

    <h1>Insira um carro:</h1>
    <form action="process.php" method="POST">
        <div>
            <label for="brand">Marca do Carro</label>
            <input type="text" name="brand" placeholder="Insira a marca do carro">
        </div>
        <div>
            <label for="km">Kilometragem</label>
            <input type="text" name="km" placeholder="Insira a kilometragem">
        </div>
        <div>
            <label for="color">Cor do Carro</label>
            <input type="text" name="color" placeholder="Insira a cor do carro">
        </div>
        <input type="submit" value="Salvar">
    </form>
    <ul>
        <?php foreach($cars as $car) : ?>
            <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
        <?php endforeach; ?>
    </ul>