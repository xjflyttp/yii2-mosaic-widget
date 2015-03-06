<?php

namespace xj\mosaic;

use yii\web\AssetBundle;

class MosaicAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-mosaic-widget/assets';
    public $basePath = '@webroot/assets';
    public $css = ['css/mosaic.css'];
    public $js = ['js/mosaic.1.0.1.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
