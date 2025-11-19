@props(['image' => '/img/arbre.jpg',
        'titre' => 'Catégorie',
        'description' => 'Description de la catégorie'])


<div class="relative h-[250px] rounded-[10px] overflow-hidden shadow-lg">
    <img src="{{$image}}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
    <div class="absolute bottom-0 left-0 right-0 bg-linear-to-t from-black/70 to-transparent text-white">
        <h3 class="mb-2 ml-5 font-bold text-2xl">{{$titre}}</h3>
        <p class="mb-5 ml-5">{{$description}}</p>
    </div>
</div>
