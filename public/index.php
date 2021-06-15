<?php
    session_start();
    include './../app/php_error.php';
    include './../app/config.php';
    include './../app/autoload.php';
    include './../app/Libraries/Helpers.php';
    $help = new Helpers();
	
?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Discover functions that other programmers from around the world have created, show us your own functions and help us grow up">.
            <title><?= APP_NOME ?></title>
            <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
            <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/features/">
            <link href="<?= URL ?>/public/css/bootstrap.min.css" rel="stylesheet">
            <link href="<?= URL ?>/public/css/styles.css" rel="stylesheet">
            <link href="<?= URL ?>/public/css/header.css" rel="stylesheet">
            <link href="<?= URL ?>/public/css/style2.css" rel="stylesheet">
            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                    }
                }
            </style>
        </head>
        <body>
            <?php
				include '../app/Views/header.php';
                $rotas = new Routes();
                include '../app/Views/footer.php';
            ?>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        </body>
    </html>