<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follows">
    <meta name="description" content="Proyecto MVC con PHP y MySQL">
    <title>Document</title>
    <link rel="icon" href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?> /img/message.png" type="image/png">
    <link rel="stylesheet" href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/asset/css/style.css">
</head>

<body>
    <header class="container">
        <h2>
            <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>">👋 Hola mundo - MVC + PHP + MySQL</a>
        </h2>
        <nav>
            <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>" class="btn btn-primary">Mensajes</a>
            <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>" class="btn btn-primary">Nuevo</a>
        </nav>
    </header>
    <main class="container">
        <?php include $viewFile; ?>
    </main>
    <footer class="container footer">
        <small>
            Heho con corazón en PHP MVC
        </small>
    </footer>
</body>

</html>