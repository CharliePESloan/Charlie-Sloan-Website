<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $name;
    public $url;
    public $icon;
    public $target;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $route, $icon, $target=null)
    {
        $this->name = $name;
        $this->url = route($route);
        $this->icon = $icon;
        $this->target = $target ?? "";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-item');
    }
}
