<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
        'css/styles.css',
        'css/style-new.css',
        'css/components.css',
    ];
    public $js = [
        'js/scripts.js',
        'js/script-new.js',
        'js/components.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
