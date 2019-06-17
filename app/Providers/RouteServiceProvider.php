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

        $this->mapEttuserRoutes();

        $this->mapEntityRoutes();

        $this->mapCompanyRoutes();

        $this->mapTechRoutes();

        $this->mapAdminRoutes();

        //
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin'],
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    /**
     * Define the "tech" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapTechRoutes()
    {
        Route::group([
            'middleware' => ['web', 'tech', 'auth:tech'],
            'prefix' => 'tech',
            'as' => 'tech.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/tech.php');
        });
    }

    /**
     * Define the "company" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCompanyRoutes()
    {
        Route::group([
            'middleware' => ['web', 'company', 'auth:company'],
            'prefix' => 'company',
            'as' => 'company.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/company.php');
        });
    }

    /**
     * Define the "entity" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEntityRoutes()
    {
        Route::group([
            'middleware' => ['web', 'entity', 'auth:entity'],
            'prefix' => 'entity',
            'as' => 'entity.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/entity.php');
        });
    }

    /**
     * Define the "ettuser" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEttuserRoutes()
    {
        Route::group([
            'middleware' => ['web', 'ettuser', 'auth:ettuser'],
            'prefix' => 'ettuser',
            'as' => 'ettuser.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/ettuser.php');
        });
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
