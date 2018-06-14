这是一个网易云盾验证码的第三方sdk 
==== 
###版本为1.0.3
###使用方法
##Lumen
#配置
env文件配置
YIDUN_CAPTCHA_ID
YIDUN_CAPTCHA_SECRET_ID
YIDUN_CAPTCHA_SECRET_KEY
#注册 
$app->register(EchoBallon\Yidun\Captcha\YidunServiceProvider::class);

#使用
app()->make('yidun')
