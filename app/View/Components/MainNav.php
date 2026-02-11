<?php

namespace App\View\Components;

use App\Models\MenuLink;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MainNav extends Component
{
    public function render(): View
    {
        /** @var MenuLink[] $links */
        $links = MenuLink::published()->get()->toTree();
 
        return view('components.main-nav', ['links' => $links]);
    }
}
