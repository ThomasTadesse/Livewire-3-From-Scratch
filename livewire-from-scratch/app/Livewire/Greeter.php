<?php

namespace App\Livewire;

use Livewire\Component;

class Greeter extends Component
{

    // make a public property such as name, in this case "World"
    // and add it later to the view
    public $name = 'World';

    // keep in mind, if it is private you will encounter an error

    // lets make an action to change the name
    public function changeName($newName)
    {
        $this->name = $newName;
    }


    public function render()
    {
        return view('livewire.greeter');
    }
}
