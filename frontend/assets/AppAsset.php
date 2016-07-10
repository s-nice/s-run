<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
        //'statics/css/common.css',
        //'statics/css/site.css',
		'static/css/bootstrap.css',
		'static/css/font-awesome.min.css',
		'static/css/main.css',
		//'static/css/jquery.fancyboxcss',
		'static/css/app.css',
		'static/css/plugin-style.css',
    ];
    public $js = [
		'static/js/jquery.js',
		'static/js/yii.js',
		'static/js/app.js',
		'static/js/jquery.fancybox.js',
		'static/js/jquery.isotope.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
