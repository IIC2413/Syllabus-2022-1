<?php include('../templates/header.html'); ?>

<body>
    <?php
        require("../config/conection.php");
        // $query = "SELECT *
        $query = "SELECT *
                  FROM poke1;"; // Crear la consulta
        $result = $db -> prepare($query);
        $result -> execute();

        $data = $result -> fetchAll();
    ?>

    <table>
        <tr>
            <th> id </th>
            <th> name </th>
            <th> attack </th>
            <th> defense </th>
            <th> legendary </th>
        </tr>

        <?php
            foreach ($data as $d) {
                echo "<tr>
                        <td>$d[0]</td>
                        <td>$d[1]</td>
                        <td>$d[2]</td>
                        <td>$d[3]</td>
                        <td>$d[10]</td>
                      </tr>";
            }
        ?>

    </table>

<?php include('../templates/footer.html'); ?>
