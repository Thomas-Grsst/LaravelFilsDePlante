@props(['icon' => 'fas fa-seedling', 'titre' => 'titre', 'description' => 'description'])

<div class="bg-white rounded-[10px] p-6 text-center shadow-lg transition-transform duration-300 hover:-translate-y-2.5">
    <i class="{{$icon}} text-[3rem] text-primary mb-4"></i>
    <h3 class="mb-4 text-dark text-[1.5rem] font-bold">{{$titre}}</h3>
    <p>{{$description}}</p>
</div>