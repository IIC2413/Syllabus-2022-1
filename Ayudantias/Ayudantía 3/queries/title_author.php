<?php include('../templates/header.html'); ?>

<body>
<?php
        require("../config/conection.php");
        $title = $_POST["title"];
        $author = $_POST["author"];
        $title = strtolower($title);
        $author = strtolower($author);

        // $query = "SELECT *
        $query = "SELECT title,author,date,views,likes,link
                  FROM ted
                  WHERE lower(author) LIKE '%$author%' AND lower(title) LIKE '%$title%';"; // Crear la consulta
        $result = $db -> prepare($query);
        $result -> execute();

        $data = $result -> fetchAll();
    ?>

    <table>
        <tr>
            <th> title </th>
            <th> author </th>
            <th> date </th>
            <th> views </th>
            <th> likes </th>
            <th> link </th>
        </tr>

        <?php
            foreach ($data as $d) {
                echo "<tr>
                        <td>$d[0]</td>
                        <td>$d[1]</td>
                        <td>$d[2]</td>
                        <td>$d[3]</td>
                        <td>$d[4]</td>
                        <td><a href=$d[5] target='_blank'>link</a></td>
                      </tr>";
            }
        ?>

    </table>
    <!--  -->
    

    <?php include('../templates/footer.html'); ?>
