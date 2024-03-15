<?php

namespace App\Http\Livewire;

use App\Models\Occupation;
use App\Models\Post;
use Livewire\Component;

class OccupationShow extends Component
{
    public $searchOccupation='';
    public function render()
    {
        $occupations=Occupation::query();
        if ($this->searchOccupation){
            $occupations->where('occupation_name', 'like', '%' . $this->searchOccupation . '%');
        }

        $occupations=$occupations->get();

        return view('livewire.occupation-show', [
            'occupations'=>$occupations,
        ]);
    }
}
