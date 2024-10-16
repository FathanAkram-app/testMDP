<?php

namespace App\Livewire\Masterdata;

use Livewire\Component;

class Models extends Component
{
    public $isModalOpen = false; // Add this line
    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
    public function render()
    {
        return view('livewire.masterdata.models');
    }
}
