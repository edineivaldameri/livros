<?php

namespace App\Facades;

use App\Providers\ApiWeatherProvider;
use Illuminate\Support\Facades\Facade;

class ApiWeatherFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "api-weather";
    }
}
