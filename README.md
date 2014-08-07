yii2-mosaic-widget
==================

https://github.com/buildinternet/mosaic

composer.json
-----
```json
"require": {
        "xj/yii2-mosaic-widget": "*"
},
```

In View
---------
```php
use xj\mosaic\Mosaic;
Mosaic::widget(['selector' => '.circle', 'options' => ['opacity' => 0.8]]);
Mosaic::widget(['selector' => '.fade']);
Mosaic::widget(['selector' => '.bar', 'options' => ['animation' => 'slide']]);
Mosaic::widget(['selector' => '.bar2', 'options' => ['animation' => 'fade']]);
Mosaic::widget(['selector' => '.bar3', 'options' => [
        'animation' => 'slide',
        'anchor_y' => 'top'
]]);
Mosaic::widget(['selector' => '.cover', 'options' => [
        'animation' => 'slide',
        'anchor_x' => '400px'
]]);
Mosaic::widget(['selector' => '.cover2', 'options' => [
        'animation' => 'slide',
        'anchor_y' => 'top',
        'hover_y' => '80px'
]]);
Mosaic::widget(['selector' => '.cover3', 'options' => [
        'animation' => 'slide',
        'anchor_x' => '400px',
        'hover_y' => '300px'
]]);
```

Options
---------
```
animation : 'fade',
speed : 150,
opacity : 1,
preload : 1,
anchor_x : 'bottom',
anchor_y : 'left',
hover_x : '0px',
hover_y : '0px'
```
* @see http://buildinternet.com/project/mosaic/

