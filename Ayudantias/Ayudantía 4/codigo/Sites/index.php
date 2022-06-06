<?php session_start();
    if (isset($_SESSION['username'])){
        echo "Bienvenido/a: ";
        echo $_SESSION['username'];
    }
?>

<?php
    include("templates/header.html");
?>

<body>
    <h1> Ayudantía 4</h1>
    <br>
    <?php
        if (!isset($_SESSION['username'])) {
    ?>
        <form align="center" action="views/login.php" method="get">
            <input type="submit" value="Iniciar sesión">
        </form>
        <form align="center" action="consultas/pokemones.php" method="post">
            <input type="submit" value="Ver pokemones">
        </form>
    <?php } else { ?>
        <form align="center" action="views/logout.php" method="post">
            <input type="submit" value="Cerrar sesión">
        </form>
        <form align="center" action="consultas/pokemones.php" method="post">
            <input type="submit" value="Ver pokemones">
        </form>
        <form align="center" action="consultas/pelea_pokemon.php" method="post">
            <input type="submit" value="Ver peleas">
        </form>
        <form align="center" action="consultas/crear_pelea_pokemon.php" method="post">
            <input type="text" name="pid1">
            <input type="text" name="pid2">
            <input type="submit" value="Crear pelea">
        </form>
    <?php } ?>
    
</body>

</html>