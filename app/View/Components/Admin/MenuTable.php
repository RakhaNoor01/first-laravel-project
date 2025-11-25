<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuTable extends Component
{
   public string $buttonLabel;
    public ?string $href;
    public ?string $onClick;

    public function __construct(
        string $buttonLabel = 'Add Data',
        string $href = null,
        string $onClick = null
    ) {
        $this->buttonLabel = $buttonLabel;
        $this->href = $href;
        $this->onClick = $onClick;
    }
    public function render(): View|Closure|string
    {
        return view('components.admin.menu-table');
    }
}
