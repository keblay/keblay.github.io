<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    @vite('resources/css/welcome.css')
    @vite('resources/css/Components/navbar.css')
</head>

<body>


    <div class="container">
        @include('Components.navbar')
        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
            @include('Components.presentation')
            @include('Components.services')
            <!-- @include('cstmd')-->
            @include('adr')
            @include('faq')
            @include('contact')
        </div>
    </div>

    <!-- Footer -->
    @include('Components.footer')

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sélectionne tous les <h2> avec un ID commençant par 'list-item-'
            const headers = Array.from(document.querySelectorAll('.scrollspy-example h2'))
                .filter(header => header.id.startsWith('list-item-'));
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            function changeActiveLink() {
                let index = headers.length;

                // Vérifie quel <h2> est visible dans la fenêtre
                while (--index && window.scrollY + 50 < headers[index].offsetTop) {}

                // Enlève la classe 'active' de tous les liens
                navLinks.forEach((link) => link.classList.remove('active'));

                // Ajoute la classe 'active' au lien correspondant
                if (index >= 0) {
                    // Trouve le lien correspondant à l'ID du <h2> visible
                    const id = headers[index].id;
                    const activeLink = document.querySelector(`.navbar-nav a[href="#${id}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            }

            // Change l'état actif au chargement initial
            changeActiveLink();
            // Ajoute un événement de défilement pour surveiller les changements
            window.addEventListener('scroll', changeActiveLink);
        });
    </script>



</body>

</html>
