<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $contentlist = Content::where('title','like','%'.$this->search.'%')->get();
        return view('livewire.search', ['contentlist'=> $contentlist, 'query'=>$this->search]);
    }
}
