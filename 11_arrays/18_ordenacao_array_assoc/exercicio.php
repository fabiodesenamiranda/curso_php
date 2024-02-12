<?php

$arr = [
    'Fabio' => 28,
    'rosana'=> 38,
    'Gabriel' => 10,
    'Liz' => 7,
];


?>


<table border="1">
<tr>
    <th>Nome</th>
    <th>Idade</th>
</tr>
<?php foreach($arr as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
<?php endforeach; ?>
</table>