<?php
/**
 * Created by PhpStorm.
 * User: 何林海
 * Date: 2018\6\11 0011
 * Time: 20:15
 */

namespace EchoBallon\Yidun\Captcha;


use EchoBallon\Yidun\Captcha\Plugins\NECaptchaVerifier;
use Illuminate\Support\ServiceProvider;

class YidunServiceProvider extends ServiceProvider
{


    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('yidun',NECaptchaVerifier::class);
    }

}