<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    // problem kad je prazan string u input search nece da izbaci rezultat
    // iako je definisan u search-dropdown.blade.php

    public function render()
    {
        $searchMovie = [];

        if (strlen($this->search) >= 2) {
            $searchMovie = Http::withToken(config('services.tmdb.token'))
                ->get('https://api.themoviedb.org/3/search/movie?query=' . $this->search)
                ->json()['results'];
        }

        // dd($searchMovie);

        return view('livewire.search-dropdown', [
            'searchMovie' => collect($searchMovie)->take(7),
        ]);
    }
}
