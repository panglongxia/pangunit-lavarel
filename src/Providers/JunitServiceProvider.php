<?php
namespace  Panglongxia\PangunitLaravel\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class JunitServiceProvider extends ServiceProvider
{
    public function register()
    {
       // echo "这是junit提供的服务";
    }

    public function boot()
    {
        //注册主键路由
        $this->registerRoutes();
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'pangunit'
        );
    }
    private function routeConfiguration()
    {
        return [
            'namespace' => 'Panglongxia\PangunitLaravel\Http\Controllers',
            'prefix' => 'pangunit',
            'middleware' => 'web'
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

}