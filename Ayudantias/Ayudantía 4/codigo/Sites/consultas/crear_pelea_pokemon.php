<?php include('../templates/header.html'); ?>

    <?php
        require("../config/conection.php");
        $pid1 = $_POST['pid1'];
        $pid2 = $_POST['pid2'];
        $pid1 = intval($pid1);
        $pid2 = intval($pid2);
        $query = "SELECT * FROM new_pokemon_showdown($pid1, $pid2);";
        $result = $db -> prepare($query);
        $result -> execute();
        $data = $result -> fetchAll();
    ?>

<section class="section">
    <?php
        foreach ($data as $d) {
            echo "<h1>EL ganador es: $d[0] !</h1> <p> Venció a su contrincante luego de $d[1] ataques </p>";
        }
    ?>
</section>

<?php include '../templates/footer.html' ?>
