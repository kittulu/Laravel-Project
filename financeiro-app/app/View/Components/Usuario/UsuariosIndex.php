<?php

namespace App\View\Components\Usuario;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UsuariosIndex extends Component
{
    /**
     * Create a new component instance.
     */
    public $usuarios;

    public function __construct($usuarios)
    {
        //
        $this->usuarios = $usuarios; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.usuario.usuarios-index');
    }
}
