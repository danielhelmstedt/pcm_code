<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
//use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
//use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\InitializeTenancyByRequestData;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

/*
Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
    });
});
*/

Route::prefix('api')
    ->middleware([
        'api',
        'tenancyWrapper',
])->group(base_path('routes/api.php'));

Route::middleware([
    'web',
    'tenancyWrapper',
])->group(base_path('routes/web.php'));

// tenancyWrapper
// InitializeTenancyByDomain::class,
// PreventAccessFromCentralDomains::class,