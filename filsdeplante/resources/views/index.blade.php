@extends('layout')
@section('content')



        <!-- Bannière principale -->
        <section class="hero" style="background-image: url('https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="hero-content">
            <h2>Découvrez le Monde des Végétaux</h2>
            <p>
            Explorez la diversité incroyable du règne végétal et apprenez à
            cultiver votre propre potager avec nos guides pratiques.
            </p>
            <a href="#" class="btn">Commencer l'exploration</a>
        </div>
        </section>

        <!-- Section présentation -->
        <section class="container">
        <h2 class="section-title">Votre Guide Végétal Complet</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem">
            De la découverte à la culture, tout ce dont vous avez besoin pour
            comprendre et faire pousser le monde végétal.
        </p>

        <div class="features">
            <div class="feature-card">
            <i class="fas fa-seedling"></i>
            <h3>14,000+ Espèces</h3>
            <p>Base de données complète de végétaux du monde entier</p>
            </div>
            <div class="feature-card">
            <i class="fas fa-book"></i>
            <h3>Guides Pratiques</h3>
            <p>Conseils détaillés pour réussir vos cultures</p>
            </div>
            <div class="feature-card">
            <i class="fas fa-list"></i>
            <h3>Classification</h3>
            <p>Organisés par catégories pour faciliter la recherche</p>
            </div>
            <div class="feature-card">
            <i class="fas fa-tractor"></i>
            <h3>Potager Facile</h3>
            <p>Démarrez votre potager avec des variétés simples</p>
            </div>
        </div>
        </section>

        <!-- Section catégories -->
        <section class="container">
        <h2 class="section-title">Explorez par Catégories</h2>
        <div class="categories">
            <div class="category-card">
            <img src="img/arbre.jpg" alt="Arbres" />
            <div class="category-overlay">
                <h3>Arbres</h3>
                <p>Découvrez les espèces d'arbres du monde entier</p>
            </div>
            </div>
            <div class="category-card">
            <img src="img/fleur.jpg" alt="Fleurs" />
            <div class="category-overlay">
                <h3>Fleurs</h3>
                <p>Explorez la beauté des plantes à fleurs</p>
            </div>
            </div>
            <div class="category-card">
            <img src="img/legumes.jpg" alt="Légumes" />
            <div class="category-overlay">
                <h3>Légumes</h3>
                <p>Apprenez à cultiver vos propres légumes</p>
            </div>
            </div>
        </div>
        </section>

        <!-- Section potager -->
        <section class="potager">
        <div class="container">
            <h2 class="section-title">Mon Potager</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem">
            Apprenez à cultiver vos propres fruits et légumes avec nos guides
            détaillés.
            </p>

            <div class="vegetables">
            <div class="vegetable-card">
                <div class="vegetable-img">
                <img src="img/tomates.jpg" alt="Tomates" />
                </div>
                <div class="vegetable-info">
                <h3>Tomates</h3>
                <p>
                    Apprenez à cultiver des tomates juteuses et savoureuses dans
                    votre jardin.
                </p>
                <a href="potager.html" class="btn">Voir le guide</a>
                </div>
            </div>
            <div class="vegetable-card">
                <div class="vegetable-img">
                <img src="img/carrotes.jpg" alt="Carottes" />
                </div>
                <div class="vegetable-info">
                <h3>Carottes</h3>
                <p>
                    Découvrez comment faire pousser des carottes croquantes et
                    sucrées.
                </p>
                <a href="potager.html" class="btn">Voir le guide</a>
                </div>
            </div>
            <div class="vegetable-card">
                <div class="vegetable-img">
                <img src="img/fraises.jpg" alt="Fraises" />
                </div>
                <div class="vegetable-info">
                <h3>Fraises</h3>
                <p>
                    Cultivez vos propres fraises sucrées et parfumées, même en pot.
                </p>
                <a href="potager.html" class="btn">Voir le guide</a>
                </div>
            </div>
            </div>
        </div>
        </section>
@endsection
