<?php

namespace App\Livewire;

use Livewire\Component;

class CallToAction extends Component
{

    public $message;
    public $action;
    public function render()
    {
        return view('livewire.call-to-action');
    }
}
