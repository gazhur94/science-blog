<?php
namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\App;
Use Illuminate\View\View;

class ProfileComposer
{
    public function compose(View $view)
    {
        $view->with('var', rand(0,1));
    }
}