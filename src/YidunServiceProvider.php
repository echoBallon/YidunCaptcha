<?php
/**
 * Created by PhpStorm.
 * User: 何林海
 * Date: 2018\6\11 0011
 * Time: 20:15
 */

namespace EchoBallon\Yidun\Captcha;


use App\YidunClass\SecretPair;
use EchoBallon\Yidun\Captcha\Plugins\NECaptchaVerifier;
use Illuminate\Support\ServiceProvider;

class YidunServiceProvider extends ServiceProvider
{


    private  $YIDUN_CAPTCHA_ID;
    private  $YIDUN_CAPTCHA_SECRET_ID;
    private  $YIDUN_CAPTCHA_SECRET_KEY;
    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        $this->YIDUN_CAPTCHA_ID = env('YIDUN_CAPTCHA_ID');
        $this->YIDUN_CAPTCHA_SECRET_ID = env('YIDUN_CAPTCHA_SECRET_ID');
        $this->YIDUN_CAPTCHA_SECRET_KEY = env('YIDUN_CAPTCHA_SECRET_KEY');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        //
        $this->app->bind('yidun',function (){

            return  new NECaptchaVerifier($this->YIDUN_CAPTCHA_ID,new SecretPair($this->YIDUN_CAPTCHA_SECRET_ID,$this->YIDUN_CAPTCHA_SECRET_KEY));
        });
    }

}