<table>
    <tr>
        <th>Abr.</th>
        <th>Nome</th>
        <th>ECTS</th>
        <th>Horas</th>
        <th></th>
    </tr>
    <?php foreach ($disciplinas as $disc) : ?>
        <tr>
            <td><?php echo $disc->abreviatura; ?></td>
            <td><?php echo $disc->nome; ?></td>
            <td><?php echo $disc->ECTS; ?></td>
            <td><?php echo $disc->horas; ?></td>
            <td class="add-disc">
                <form action="#" method="GET">
                    <button type="submit">
                        <i class="fas fa-plus-square"></i>
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>