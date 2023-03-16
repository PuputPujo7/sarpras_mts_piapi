<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function submit()
    {
        
            return redirect('/{admin}');

    }
    
    /**
     * render
     *
     * @return void
     */

    public function render()
    {
        return view('livewire.home');
    }
}
