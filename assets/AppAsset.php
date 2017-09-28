<?php

namespace app\assets;

use yii\web\AssetBundle;


class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//    '/css/bootstrap.min.css',
        '/css/shortcode/shortcodes.css',
        '/css/core.css',
        '/css/responsive.css',
        '/style.css',
        '/css/color/color-core.css',
        '/lib/css/nivo-slider.css'
    ];
    public $js = [

        'lib/js/jquery.nivo.slider.js',
        'js/plugins.js',
        'js/main.js'


      //  'js/vendor/modernizr-2.8.3.min.js',
     //  'js/vendor/jquery-3.1.1.min.js',
       // 'js/bootstrap.min.js',

      //2  'js/style-customizer.js',
        //'/js/map.js',
      //  'js/ajax-mail.js',
     //   'js/vendor/jquery-3.1.1.min.js',
        //'js/vendor/modernizr-2.8.3.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
