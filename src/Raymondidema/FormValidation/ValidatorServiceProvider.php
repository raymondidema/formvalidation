<?php  namespace Raymondidema\FormValidation;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {
    protected $defer = false;

    public function register()
    {
        $this->app->bind(
            'Raymondidema\FormValidation\FactoryInterface',
            'Raymondidema\FormValidation\LaravelValidator'
        );
    }

    public function boot()
    {
        $this->package('Raymondidema/FormValidation');
    }
} 