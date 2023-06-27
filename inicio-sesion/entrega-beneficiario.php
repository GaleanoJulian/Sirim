<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sesión</title>
    <link rel="stylesheet" href="./css/style-entrega_usuario.css">
</head>

<body>
    <header>
        <h1>Historial de entregas</h1>
    </header>

    <main>
        <section class="entrega-user">
        <section id=tabla-historialBenef>
                    <br><br>
                    <?php
                        include("tabla_consultarEntregaBenef.php")
                    ?>
                </section>
        </section>
    </main>

</body>
</html>
