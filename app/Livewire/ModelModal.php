<?php

namespace App\Livewire;

use Livewire\Component;

class ModelModal extends Component
{
    public $isOpen = false;
    public $modelName;
    public $description;

    public function mount($isOpen)
    {
        $this->isOpen = $isOpen;
    }
    function closeModal() {
        $this->isOpen = false;
    }
    public function save()
    {
        // Logic to save the model
        // Example: Model::create([...]);

        // Reset fields
        $this->modelName = '';
        $this->description = '';

        // Close the modal
        $this->isOpen = false;

        // Optionally emit an event to refresh the table data
        $this->emit('modelSaved');
    }

    public function render()
    {
        return view('livewire.model-modal');
    }


}
