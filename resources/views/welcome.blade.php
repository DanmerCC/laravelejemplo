<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Geeky Mouse</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Efecto de fade-in para la imagen del ratón geek */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.5);
                }
                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }

            /* Estilo general de la imagen del ratón geek */
            .mouse-img {
                width: 300px;
                opacity: 0;
                animation: fadeIn 3s ease-in-out forwards; /* El 'forwards' asegura que la animación se mantenga */
                transition: all 0.5s ease-in-out;
                margin-top: 30px;
            }

            /* Estilo base de la página */
            body {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif;
                background-color: #f8fafc;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>¡Atrapa al Ratón Geek! 🐭</h1>
            <p>Este ratón está programando algo muy divertido...</p>

            <!-- Imagen del ratón geek con el efecto de fade-in -->
            <img class="mouse-img" src="/ninorata.webp" alt="Geeky Mouse">
        </div>
    </body>
</html>
