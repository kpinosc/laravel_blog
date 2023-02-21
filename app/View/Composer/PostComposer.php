<?php
namespace App\View\Composer;



use Illuminate\View\View;

class PostComposer
{
    public function compose (View $view)
    {
        $view->with('prueba', 'Este es un mensaje de prueba');
    }
}