<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;
    public $text= "";


    public function increment(){
        
        $this->counter+= 10000;
    }

    public function decrement(){
        
        $this->counter+= 50000;
    }

    public function textShow(){
        $this->counter= 0;
        $this->text= "❤ Dinero enviado, gracias ❤";
    }

    public function render()
    {   
        return view('livewire.counter');
    }
}
