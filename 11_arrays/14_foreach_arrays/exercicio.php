<?php
    
    $pessoa = [
        'Matheus' => 29,
        'Alexia' => 25,
        'Mauro' => 30,
        'Maria' => 39,
        'Joana' => 40,
        ];

        ?>

        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
            <?php foreach($pessoa as $nome => $idade): ?>
                <tr>
                    <td><?= $nome; ?></td>
                    <td><?= $idade; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>