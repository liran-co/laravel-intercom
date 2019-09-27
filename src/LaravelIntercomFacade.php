<?php

namespace LiranCo\LaravelIntercom;

use Illuminate\Support\Facades\Facade;

class LaravelIntercomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'intercom';
    }
}