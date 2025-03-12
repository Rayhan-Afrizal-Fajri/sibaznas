<?php

namespace App\Livewire;

use Livewire\Component;

class Jajal extends Component
{
    public $name = 'Jajal';

    public function render()
    {
        return view('livewire.jajal');
    }

    public function upjajal() {
        $this->name='jujul';
    }
}
