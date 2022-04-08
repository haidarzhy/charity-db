<?php

namespace App\Http\Livewire;

use App\Models\Entry;
use Livewire\Component;

class CheckEntry extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.check-entry');
    }

    public function getEntriesProperty()
    {
        return Entry::where('full_name', 'LIKE', "%{$this->search}%")->limit(10)->get();
    }
}
