<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets\quirk;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/themes/quirk';
    public $css = [
        'css/font-awesome-4.4.0/css/font-awesome.css',
        'css/quirk.css',
    ];  
    
    public $js = [

    ];
      
    public $depends = [
       'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
