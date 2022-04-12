<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['nome'] ?></td>
        <td><?= $item['cpf'] ?></td>
    </tr>
    <?php endforeach ?>

</table>