<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));

        Route::prefix('admin')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/admin.php'));
        Route::prefix('tu')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/tu.php'));
        Route::prefix('layanan')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/layanan.php'));
        Route::prefix('guru')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/guru.php'));
        Route::prefix('siswa')
             ->middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/siswa.php'));
        // Route::prefix('calonsiswa')
        //      ->middleware('web')
        //      ->namespace($this->namespace)
        //      ->group(base_path('routes/admin.php'));
        // Route::prefix('extrakurikuler')
        //      ->middleware('web')
        //      ->namespace($this->namespace)
        //      ->group(base_path('routes/admin.php'));
        // Route::prefix('perpustakaan')
        //      ->middleware('web')
        //      ->namespace($this->namespace)
        //      ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
