<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Service\PhoneBooks;

class Phonebook extends Component
{

    public $name;

    public $contacts =[]; 

    public $loading = false;

    public  function searchByName()
    {
        $results= PhoneBooks::searchByName($this->name);

        if(empty($results)){
            session()->flash('message', 'No contact matching "' .$this->name .'".');
        }

        $this->contacts = $results;
    }

    public function render()
    {
        return view('livewire.phonebook');
    }
}
