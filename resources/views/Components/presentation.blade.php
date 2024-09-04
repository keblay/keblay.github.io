<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">

    @vite('resources/css/Components/presentation.css')
</head>


<body>
    <h2 class="pb-2 border-bottom" id="list-item-accueil" style="visibility: hidden; position: absolute;
    top: -9999px;">Accueil</h2>
    <div class="content">
        <div class="left">
            <img src="images/logo.png" alt="Logo" width="300" height="300">
        </div>
        <div class="divider"></div>
        <div class="right">
            <p>
            <h1> Menad Conseil & Formation </h1>
            <h2>
                Conseiller à la sécurité en Île-de-France<br>
                Formateur ADR 1.3
            </h2>
            </p>
        </div>
    </div>
</body>

</html>
