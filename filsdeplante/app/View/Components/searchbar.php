<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Searchbar extends Component
{
    public $plant;
    public $error;
    public $searchTerm;

    public function __construct($searchTerm = null)
    {
        $this->searchTerm = $searchTerm;
        $this->plant = null;
        $this->error = null;

        if ($searchTerm && !empty(trim($searchTerm))) {
            $this->searchPlant(trim($searchTerm));
        }
    }

    private function searchPlant($plantName)
    {
        try {
            $url = "https://fr.wikipedia.org/api/rest_v1/page/summary/" . urlencode($plantName);
            $response = Http::timeout(10)->get($url);
            
            if ($response->successful()) {
                $data = $response->json();
                
                // Vérifier que c'est une page valide
                if (!str_contains($data['title'] ?? '', 'Homonymie') && 
                    !str_contains($data['title'] ?? '', 'Wikipédia')) {
                    $this->plant = $data;
                } else {
                    $this->error = "Plusieurs résultats possibles pour \"{$plantName}\". Veuillez préciser.";
                }
            } else {
                $this->error = "Aucun résultat trouvé pour \"{$plantName}\"";
            }
        } catch (\Exception $e) {
            $this->error = "Erreur lors de la recherche : " . $e->getMessage();
        }
    }

    public function render()
    {
        return view('components.vegetaux.searchbar', [
            'plant' => $this->plant,
            'error' => $this->error,
            'searchTerm' => $this->searchTerm
        ]);
    }
}