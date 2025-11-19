<x-layouts.app>
    <x-header
        backgroundImage="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80"
        titre="Découvrez le Monde des Végétaux"
        paragraphe="Explorez la diversité incroyable du règne végétal et apprenez à cultiver votre propre potager avec nos guides pratiques."
        text_button="Découvrir nos végétaux"/>

    <div class="max-w-[1200px] my-12 mx-auto py-0 px-6">
        <x-title>Votre Guide Végétal Complet</x-title>
        <x-paragraphe>De la découverte à la culture, tout ce dont vous avez besoin pour comprendre et faire pousser le monde végétal.</x-paragraphe>
        <div class="mt-14 grid grid-cols-1 md:grid-cols-[repeat(auto-fit,minmax(250px,1fr))] gap-8 mb-16">
            <x-index.case
                    icon="fas fa-seedling"
                    titre="14,000+ Espèces"
                    description="Base de données complète de végétaux du monde entier"/>
            <x-index.case
                    icon="fas fa-book"
                    titre="Guides Pratiques"
                    description="Conseils détaillés pour réussir vos cultures"/>
            <x-index.case
                    icon="fas fa-list"
                    titre="Classification"
                    description="Organisés par catégories pour faciliter la recherche"/>
            <x-index.case
                    icon="fas fa-tractor"
                    titre="Potager Facile"
                    description="Démarrez votre potager avec des variétés simples"/>
        </div>
    </div>

    <div class="max-w-[1200px] my-12 mx-auto py-0 px-6">
        <x-title>Explorez par Catégories</x-title>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <x-index.categorie_card
                                image="/img/arbre.jpg"
                                titre="Arbres"
                                description="Découvrez les espèces d'arbres du monde entier"/>
            <x-index.categorie_card
                                image="/img/fleur.jpg"
                                titre="Fleurs"
                                description="Explorez la beauté des plantes à fleurs"/>
            <x-index.categorie_card
                                image="/img/legumes.jpg"
                                titre="Légumes"
                                description="Apprenez à cultiver vos propres légumes"/>
        </div>
    </div>

    <div class="bg-light py-16 px-0">
        <div class="max-w-[1200px] my-12 mx-auto py-0 px-6">
            <x-title>Mon Potager</x-title>
            <x-paragraphe>Apprenez à cultiver vos propres fruits et légumes avec nos guides
            détaillés.</x-paragraphe>
            <div class="grid grid-cols-1 md:grid-cols-[repeat(auto-fit,minmax(280px,1fr))] gap-8">
                <x-index.vegetables_card
                        img="/img/tomates.jpg"
                        titre="Tomates"
                        description="Apprenez à cultiver des tomates juteuses et savoureuses dans votre jardin."/>
                <x-index.vegetables_card
                        img="/img/carrotes.jpg"
                        titre="Carottes"
                        description="Découvrez comment faire pousser des carottes croquantes et sucrées."/>
                <x-index.vegetables_card
                        img="/img/fraises.jpg"
                        titre="Fraises"
                        description="Cultivez vos propres fraises sucrées et parfumées, même en pot."/>
            </div>
        </div>
    </div>
    <x-footer />
</x-layouts.app>