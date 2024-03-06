<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    public $organisateur;
    /**
     * Create a new component instance.
     */
    public function __construct($organisateur)
    {
        $this->organisateur = $organisateur;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.search');
    }
}