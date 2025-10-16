<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Potager - Fils de Plante</title>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
    </head>
    <body>
        <!-- En-tête -->
        <header>
        <div class="header-content">
            <div class="logo">
            <i class="fas fa-leaf"></i>
            <h1>Fils de Plante</h1>
            </div>
            <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/vegetaux">Végétaux</a></li>
                <li><a href="/potager">Potager</a></li>
                <li><a href="/guides">Guides</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            </nav>
        </div>
        </header>

        <script>
        // Récupère juste le nom du fichier (ex: "guides.html")
        const currentPage = window.location.pathname.split("/").pop();

        // Sélectionne tous les liens du menu
        const menuLinks = document.querySelectorAll("nav ul li a");

        menuLinks.forEach(link => {
            if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
            }
        });
        </script>


        @yield('content')


        <!-- Pied de page -->
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                <h3>Fils de Plante</h3>
                <p>Votre guide complet pour explorer et cultiver le monde végétal.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                </div>
                <div class="footer-section">
                <h3>Liens Rapides</h3>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Catalogue des végétaux</a></li>
                    <li><a href="#">Guides de jardinage</a></li>
                </ul>
                </div>
                <div class="footer-section">
                <h3>Contact</h3>
                <p><i class="fas fa-envelope"></i> contact@filsdeplante.fr</p>
                <p><i class="fas fa-phone"></i> +33 1 23 45 67 89</p>
                <p><i class="fas fa-map-marker-alt"></i> Lyon, France</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Fils de Plante - Tous droits réservés</p>
            </div>
        </footer>
    </body>
</html>