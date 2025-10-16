@extends('layout')
@section('content')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/guides.css') }}">
@endsection


<!-- Bannière principale -->
    <section class="hero" style="background-image: url('https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');">
        <div class="hero-content">
            <h2>Guides Pratiques</h2>
            <p>Apprenez les techniques de jardinage avec nos guides détaillés et conseils d'experts.</p>
        </div>
    </section>

    <!-- Contenu principal -->
    <main class="container">
        <h2 class="section-title">Nos Guides de Jardinage</h2>
        
        <!-- Filtres par thème -->
        <div class="theme-filters">
            <button class="theme-btn active" data-theme="all">Tous les guides</button>
            <button class="theme-btn" data-theme="debutant">Débutants</button>
            <button class="theme-btn" data-theme="technique">Techniques</button>
            <button class="theme-btn" data-theme="saison">Par saison</button>
            <button class="theme-btn" data-theme="bio">Jardinage bio</button>
        </div>
        
        <!-- Grille des guides -->
        <div class="guides-grid" id="guidesContainer">
            <!-- Les guides seront chargés dynamiquement par JavaScript -->
        </div>

        <!-- Modal pour afficher le guide complet -->
            <div id="guideModal" class="guide-modal hidden">
                <div class="modal-content">
                    <span class="close-modal">&times;</span>
                    <div id="guideContent"></div>
                </div>
            </div>
        
        <!-- Section newsletter -->
        <section class="newsletter-section">
            <div class="newsletter-content">
                <h2>Restez informé</h2>
                <p>Inscrivez-vous à notre newsletter pour recevoir nos nouveaux guides et conseils de jardinage.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Votre adresse email" required>
                    <button type="submit">S'inscrire</button>
                </form>
            </div>
        </section>
    </main>

@endsection