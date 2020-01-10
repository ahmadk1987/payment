<?php
    namespace Roocket\Cms;
    use Illuminate\Support\ServiceProvider;
    class CmsServiceProvider extends ServiceProvider
    {
        public function register()
        {
            $this->app->bind('cms',function(){
                return new Cms;
            });
            $this->mergeConfigFrom(__DIR__.'/Configs/main.php','cms');
        }

        public function boot()
        {
            require __DIR__.'\routes\web.php';
            $this->loadViewsFrom(__DIR__.'/views','cms');
            $this->app['router']->middleware('admin',\Roocket\Cms\Http\Middleware\Admin::class);
            $this->publishes([__DIR__.'/Configs/main.php'=>config_path('cms.php')],'config');
            $this->publishes( [__DIR__.'/Views'=>base_path('resources/views/cms')],'views');
            $this->publishes( [__DIR__.'/migrations'=>database_path('/migrations')]);
        }
    }
