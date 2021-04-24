<?php

/*
 * Yii2 Asset Visibilityjs
 *
 * @link      https://github.com/hiqdev/yii2-asset-visibilityjs
 * @package   yii2-asset-visibilityjs
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\visibilityjs;

use yii\web\AssetBundle;

/**
 * Yii2 asset bundle for VisibilityJS plugin.
 *
 * @url https://github.com/ai/visibilityjs
 */
class VisibilityjsAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@bower/visibilityjs/lib';

    /**
     * {@inheritdoc}
     */
    public $js = [
        'visibility.core.js',
        'visibility.timers.js',
    ];
}
