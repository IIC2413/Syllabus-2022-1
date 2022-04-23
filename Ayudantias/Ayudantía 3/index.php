<?php
    include("templates/header.html");
?>

<body>
    <h1> Ayudantía PHP</h1>
    <br>
    <br>
    <br>

    <form align="center" action="queries/title_author.php" method="post">
        <p> título </p>
        <input type="text" name="title">
        <p> autor </p>
        <input type="text" name="author">
        <input type="submit" name="Buscar">

    </form>
</body>

</html>
