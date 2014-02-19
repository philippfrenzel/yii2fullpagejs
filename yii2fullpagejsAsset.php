<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2fullpagejs;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class yii2fullpagejsAsset extends AssetBundle
{
    public $sourcePath = '@philippfrenzel/yii2fullpagejs/assets';
    public $css = array(
      'css/jquery.fullPage.css'
    );
    public $js = array(
        'js/jquery.fullPage.js',
        'vendors/jquery.slimscroll.min.js'
    );
    public $depends = array(
        'yii\web\JqueryAsset',
        'yii\jui\CoreAsset',
        'yii\jui\EffectAsset'
    );
}
