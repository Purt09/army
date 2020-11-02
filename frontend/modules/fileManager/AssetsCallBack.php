<?php
/**
 * Date: 23.01.14
 * Time: 0:51
 */

namespace frontend\modules\fileManager;


use yii\web\AssetBundle;

class AssetsCallBack extends AssetBundle{
	public $js = array(
		'elfinder.callback.js'
	);
	public $depends = array(
		'yii\web\JqueryAsset'
	);

	public function init()
	{
		$this->sourcePath = __DIR__."/assets";
		parent::init();
	}
} 