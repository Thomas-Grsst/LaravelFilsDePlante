@extends('layout')
@section('content')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/potager.css') }}">
@endsection


<!-- Bannière principale -->
    <section class="hero" style="background-image: url('https://images.pexels.com/photos/7658822/pexels-photo-7658822.jpeg');">
        <div class="hero-content">
            <h2>Mon Potager</h2>
            <p>Apprenez à cultiver vos propres fruits et légumes avec nos guides détaillés et conseils pratiques.</p>
        </div>
    </section>

    <!-- Contenu principal -->
    <main class="container">
        <h2 class="section-title">Cultiver son Potager</h2>
        
        <!-- Section recherche -->
        <div class="search-section">
            <div class="search-container">
                <input type="text" id="searchPotager" placeholder="Rechercher un légume ou fruit (ex: Tomate, Carotte, Fraise...)">
                <button id="searchButton"><i class="fas fa-search"></i></button>
            </div>
            
            <div class="popular-plants">
                <h3>Aliments populaires:</h3>
                <div class="popular-tags">
                    <span class="plant-tag" data-plant="Tomate">Tomate</span>
                    <span class="plant-tag" data-plant="Carotte">Carotte</span>
                    <span class="plant-tag" data-plant="Fraise">Fraise</span>
                    <span class="plant-tag" data-plant="Courgette">Courgette</span>
                    <span class="plant-tag" data-plant="Salade">Salade</span>
                    <span class="plant-tag" data-plant="Basilic">Basilic</span>
                </div>
            </div>
        </div>
        
        <!-- Filtres -->
        <div class="potager-filters">
            <select id="seasonFilter">
                <option value="all">Toutes saisons</option>
                <option value="printemps">Printemps</option>
                <option value="ete">Été</option>
                <option value="automne">Automne</option>
                <option value="hiver">Hiver</option>
            </select>
            <select id="typeFilter">
                <option value="all">Tous types</option>
                <option value="legume-feuille">Légumes Feuilles</option>
                <option value="legume-racine">Légumes Racines</option>
                <option value="tubercule">Tubercules</option>
                <option value="legumineuse">Légumineuse</option>
                <option value="legume-fruit">Légumes Fruits</option>
                <option value="bulbe">Bulbe</option>
                <option value="aromatique">Aromatiques</option>
                <option value="petit-fruit">Petits Fruits</option>
                <option value="arbre-fruitier">Arbre Fruitier</option>
                
            </select>
        </div>
        
        <!-- Grille des légumes et fruits -->
        <div class="plants-grid" id="potagerContainer">
            <div class="welcome-message">
                <i class="fas fa-seedling"></i>
                <h3>Recherchez un aliment pour commencer</h3>
                <p>Utilisez la barre de recherche ci-dessus ou cliquez sur un des aliments populaires</p>
            </div>
        </div>
        
        <!-- Modal de détails -->
        <div id="plantDetails" class="plant-details-modal">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <div id="plantDetailsContent"></div>
            </div>
        </div>
        
        <!-- Section conseils -->
        <section class="tips-section">
            <h2 class="section-title">Conseils de Jardinage</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <i class="fas fa-seedling"></i>
                    <h3>Préparation du sol</h3>
                    <p>Apprenez à préparer votre sol pour optimiser la croissance de vos plantes.</p>
                </div>
                <div class="tip-card">
                    <i class="fas fa-tint"></i>
                    <h3>Arrosage optimal</h3>
                    <p>Découvrez les meilleures techniques d'arrosage pour chaque type de plante.</p>
                </div>
                <div class="tip-card">
                    <i class="fas fa-bug"></i>
                    <h3>Protection naturelle</h3>
                    <p>Des méthodes écologiques pour protéger vos cultures des parasites.</p>
                </div>
            </div>
        </section>
    </main>

@endsection