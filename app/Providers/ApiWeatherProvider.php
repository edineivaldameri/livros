<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class ApiWeatherProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind("api-weather", function($app) {
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://api.hgbrasil.com',
            ])->get('/weather', [
                'key' => '5fec1866',
                'fields' => 'only_results',
                'user_ip' => $app->request->ip(),
            ]);
        });
    }
}
