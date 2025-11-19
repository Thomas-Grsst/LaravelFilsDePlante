@props(['img' => '/img/tomtes.jpg',
        'titre' => 'Tomates',
        'description' => 'Apprenez à cultiver des tomates juteuses et savoureuses dans
                votre jardin.'])


<div class="text-white bg-white rounded-[10px] overflow-hidden shadow-lg mt-12">
    <div class="h-[200px] overflow-hidden">
        <img src="{{$img}}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"/>
    </div>
    <div class="p-6">
        <h3 class="text-dark mb-2 font-bold">{{$titre}}</h3>
        <p class="mb-4 text-[#666]">{{$description}}</p>
        <x-button route="/potager">Voir le guide</x-button>
    </div>
</div>