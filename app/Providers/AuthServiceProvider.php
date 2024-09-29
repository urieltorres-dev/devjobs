<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Auth\Notifications\VerifyEmail;
//use Illuminate\Notifications\Messages\MailMessage;
//use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; //* Este se utilizaba en antiguas versiones de laravel

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //* Esta es una forma en la que se puede modificar el contenido del correo
        /*
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->subject('Verificar cuenta') //* Este es el asunto del correo
                ->line('Tu cuenta ya esta casi lista, solo debes precionar el siguiente botón')
                ->action('Confirmar cuenta', $url) //* Este es el boton que el usuario presiona para verificar su correo
                ->line('Si no creaste esta cuenta puedes ignorar este mensaje.');
        });
        */
    }
}
