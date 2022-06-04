<?php include('../templates/header.html'); ?>

<section class="section">
    <h1>Registro de batallas</h1>
    <?php
        require("../config/conection.php");
        $query = "SELECT *
                  FROM pokemon_showdowns;"; // Crear la consulta
        $result = $db -> prepare($query);
        $result -> execute();

        $data = $result -> fetchAll();
    ?>

    <table>
        <tr>
            <th> id </th>
            <th> winner_id </th>
            <th> winner_hp </th>
            <th> loser_id </th>
            <th> looser_hp </th>
            <th> number_of_atacks </th>
            <th> created_at </th>
        </tr>

        <?php
            foreach ($data as $d) {
                echo "<tr>
                        <td>$d[0]</td>
                        <td>$d[1]</td>
                        <td>$d[2]</td>
                        <td>$d[3]</td>
                        <td>$d[4]</td>
                        <td>$d[5]</td>
                        <td>$d[6]</td>
                      </tr>";
            }
        ?>

    </table>
</section>

<?php include '../templates/footer.html' ?>
