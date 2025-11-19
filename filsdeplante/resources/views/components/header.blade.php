@props(['backgroundImage' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80',
        'paragraphe' => 'Bienvenue sur Fils de Plante',
        'titre' => 'Votre source d\'inspiration botanique',])

<div
    style="background-image: url('{{ $backgroundImage }}');"
    class="text-white flex bg-fixed items-center justify-center text-center bg-center bg-no-repeat bg-cover h-[500px] relative before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-black/50">

    <div class="relative max-w[800px] p-8">
        <h2 class="text-[2.5rem] mb-4 font-bold">{{$titre}}</h2>
        <p class=" text-[1.2rem] mb-8">{{$paragraphe}}</p>
        <div class="flex justify-center">
            @if(Route::currentRouteName() === 'home')
                <x-button route="#">Commencer l'exploration</x-button>
            @endif
        </div>
    </div>
</div>