<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Http\Controllers\ResourceController;

class ResourceComposer
{
    public $resources = [];

    public function __construct()
    {
        $this->resources = ResourceController::index();
    }

    public function compose(View $view)
    {
        $view->with('resources', $this->resources);
    }
}