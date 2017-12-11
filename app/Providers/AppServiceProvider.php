<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Form;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        /*
         * COMPONENTES ADICIONALES PARA LARAVEL COLLECTIVE
         */
        Form::component('bs_text', 'components.form.text', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('bs_select', 'components.form.select', ['label', 'name', 'options', 'selected' => null, 'attributes' => []]);
        Form::component('bs_select_atts', 'components.form.select_with_atts', ['label', 'name', 'options' => [], 'selected' => null]);
        Form::component('a_button', 'components.html.a_button', ['title', 'href', 'type', 'extra_class' => '']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
