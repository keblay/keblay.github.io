<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">

    @vite('resources/css/Components/footer.css')
</head>


<footer class="footer">
    <div class="footer-content">
        <div class="left">
            <p>&copy; 2024 SASU Menad Conseil et Formation. <br> Tous droits réservés.</p>
        </div>
        <div class="divider"></div>
        <div class="right">
            <p>
                Numéro de certificat: <strong>125118</strong> <br>
                Numéro de SIRET: <strong>985 108 042 00013</strong> <br>
                Adresse: <strong>8B rue des fauvettes, Vigneux-sur-Seine, 91270</strong>
            </p>
        </div>
    </div>
</footer>

</html>
