@extends('layout')
@section('content')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/vegetaux.css') }}">
@endsection
@section('page-js')
    <script src="{{ asset('js/vegetaux.js') }}"></script>
@endsection

<!-- Bannière principale -->
    <section class="hero" style="background-image: url('https://wallpaperaccess.com/full/1276644.jpg');">
        <div class="hero-content">
            <h2>Explorer les Végétaux</h2>
            <p>Découvrez notre base de données complète de plus de 14 000 espèces végétales classées par catégories.</p>
        </div>
    </section>

    <!-- Contenu principal -->
    <main class="container">
        <h2 class="section-title">Catalogue des Végétaux</h2>
        
        <!-- Barre de recherche -->
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Rechercher un végétal (ex: Rose, Tomate, Chêne...)">
            <button id="searchButton"><i class="fas fa-search"></i></button>
        </div>
        
        <!-- Végétaux populaires -->
        <div class="popular-plants">
            <h3>Végétaux populaires:</h3>
            <div class="popular-tags">
                <span class="plant-tag" data-plant="Rose">Rose</span>
                <span class="plant-tag" data-plant="Tomate">Tomate</span>
                <span class="plant-tag" data-plant="Chêne">Chêne</span>
                <span class="plant-tag" data-plant="Lavande">Lavande</span>
                <span class="plant-tag" data-plant="Tulipe">Tulipe</span>
                <span class="plant-tag" data-plant="Basilic">Basilic</span>
            </div>
        </div>
        
        <!-- Grille des végétaux -->
        <div class="plants-grid" id="plantsContainer">
            <div class="welcome-message">
                <i class="fas fa-seedling"></i>
                <h3>Recherchez un végétal pour commencer</h3>
                <p>Utilisez la barre de recherche ci-dessus ou cliquez sur un des végétaux populaires</p>
            </div>
        </div>
        
        <!-- Détails de la plante (modal) -->
        <div id="plantDetails" class="plant-details-modal hidden">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <div id="plantDetailsContent"></div>
            </div>
        </div>
    </main>

@endsection