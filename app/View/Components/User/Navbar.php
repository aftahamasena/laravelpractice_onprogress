<?php

namespace App\View\Components\User;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $loggedIn = true;
        $menus = array(
            array(
                'label' => 'Home',
                'href' => '#'
            ),
            array(
                'label' => 'Books',
                'href' => '#'
            ),
        );
        return view('components.user.navbar', array(
            'loggedIn' => $loggedIn,
            'menus' => $menus
        ));
    }
}