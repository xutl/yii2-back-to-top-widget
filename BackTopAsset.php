<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */

namespace xutl\backtop;

use yii\web\AssetBundle;

/**
 * Class ScrollTopAsset
 * @package xutl\backtotop
 */
class BackTopAsset extends AssetBundle
{
    public $sourcePath = '@xutl/backtop/assets';

    public $css = [
        'css/back-top.css',
    ];

    public $js = [
        'js/back-top.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
