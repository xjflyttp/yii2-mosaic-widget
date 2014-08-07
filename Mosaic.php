<?php

namespace xj\mosaic;

use yii\helpers\Json;
use yii\web\View;
use yii\base\Widget;

class Mosaic extends Widget {

    /**
     * render to jquery selector
     * @var string 
     * @see elementName
     * @example
     * #id-name
     * .class-name
     */
    public $selector;

    /**
     * Mosaic Options
     * @var []
     * @example 
     * [
     *  animation : 'fade',
     *  speed : 150,
     *  opacity : 1,
     *  preload : 1,
     *  anchor_x : 'bottom',
     *  anchor_y : 'left',
     *  hover_x : '0px',
     *  hover_y : '0px'
     * ]
     * @see http://buildinternet.com/project/mosaic/
     */
    public $options = [];

    /**
     * Render Position
     * @var mixed
     * false =  Render JavaScript Code in Current Position
     * View::POS_READY
     * View::POS_BEGIN
     * View::......
     */
    public $renderPosition = View::POS_READY;

    /**
     * Initializes the widget.
     */
    public function init() {
        //register js css
        MosaicAsset::register($this->view);
        return parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run() {
        if (empty($this->selector)) {
            return false;
        }
        $scriptText = $this->getScript();
        if ($this->renderPosition === false) {
            echo $scriptText;
        } else {
            $this->view->registerJs($scriptText, $this->renderPosition);
        }
    }

    /**
     * Register Script
     */
    private function getScript() {
        $options = '';
        if (!empty($this->options)) {
            $options = Json::encode($this->options);
        }
        return <<<EOF
$('{$this->selector}').mosaic($options);
EOF;
    }

}
