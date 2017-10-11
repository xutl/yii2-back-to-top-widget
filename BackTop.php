<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\backtop;

use yii\helpers\Json;
use yii\base\Widget;
use yii\helpers\Html;

/**
 * Class ScrollTop
 * @package xutl\scrollTop
 */
class BackTop extends Widget
{
    /**
     * @var HTML the tag content for the scroll-to-top button
     */
    public $tagContent = 'TOP';

    /**
     * @var CSS the class name for the scroll-to-top button
     */
    public $options = 'back-to-top';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $view = $this->getView();
        BackTopAsset::register($view);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        return Html::tag('div', $this->tagContent, ['id' => 'back-to-top', 'class' => $this->options]);
    }
}