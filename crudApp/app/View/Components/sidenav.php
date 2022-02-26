<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sidenav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $pageName;
    public function __construct($currentPage)
    {
       $this->pageName = $currentPage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidenav');
    }
}