<?php

namespace app\widgets\panel;

use yii\web\AssetBundle;

class PanelAsset extends AssetBundle
{
	public $sourcePath = '@app/widgets/panel';
	public $css = [
		'css/left.panel.css',
		'css/calendar.panel.css',
		'css/map.panel.css',
	];
	public $js = [
        'js/calendar.js',
    ];
}