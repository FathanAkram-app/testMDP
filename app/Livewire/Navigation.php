<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $activeItem = 'mdmodels'; // Default active item
    public $dropdownOpen = [];   // To track which dropdown is open

    function toggleActiveItem($item) {
        $this->activeItem = $item;
    }
    public function toggleDropdown($item)
    {
        // Toggle the dropdown state for the clicked item
        if (isset($this->dropdownOpen[$item])) {
            $this->dropdownOpen[$item] = !$this->dropdownOpen[$item];
        } else {
            $this->dropdownOpen[$item] = true;
        }
    }
    public function render()
    {
        return view('livewire.navigation');
    }
}
