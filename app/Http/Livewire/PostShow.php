<?php

namespace App\Http\Livewire;

use App\Models\Occupation;
use Livewire\Component;

class PostShow extends Component
{
    public $occupationId;
    public $post;

    public function render()
    {
        return view('livewire.show', [
            'occupations' => Occupation::all(),
            'posts' => $this->post,
        ]);
    }

    public function actualizarCargos()
    {
        $this->post = Occupation::find($this->occupationId)->posts;
    }       

    public function mount()
    {
        $this->occupationId = Occupation::first()->id;
        $this->actualizarCargos();
    }
}
