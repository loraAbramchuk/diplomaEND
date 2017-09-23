<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/core.css',
        'css/custom.css',
        'css/material-design-iconic-font.css',
        'css/responsive.css',
        'css/shortcode/default.css',
        'css/shortcode/footer.css',
        'css/shortcode/header.css',
        'css/shortcode/shortcodes.css',
        'css/shortcode/slider.css',
        'style.css',
        'css/color/skin-amber.css',
        'css/plugins/jquery.mb.YTPlayer.min.css',
        'css/plugins/jquery-ui.min.css',
        'css/plugins/meanmenu.min.css',
        'css/plugins/slick.css',
        'css/plugins/textanimate.css',
        'css/color/color-core.css',
        'css/color/skin-blue.css',
        'css/color/skin-blue-grey.css',
        'css/color/skin-cyan.css',
        'css/color/skin-default.css',
        'css/color/skin-green.css',
        'css/color/skin-teal.css',
        'css/plugins/animate.css',
        'css/plugins/fancybox/jquery.fancybox.css',
        'lib/css/nivo-slider.css'
    ];
    public $js = [
        'js/vendor/modernizr-2.8.3.min.js',
        'js/vendor/jquery-3.1.1.min.js',
        'js/bootstrap.min.js',
        'lib/js/jquery.nivo.slider.js',
        'js/plugins.js',
        'js/main.js',
        'js/style-customizer.js',
'js/map.js',
'js/ajax-mail.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
