<?php
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [$i, $multiplier, $i * $multiplier];
        }
        return $results;
    }

    $table = multiplication(5);
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php foreach ($table as $row): ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>