<?php

return [
	'class' => 'yii\web\View',
	'renderers' => [
		'twig' => [
			'class' => 'yii\twig\ViewRenderer',
			'cachePath' => '@runtime/Twig/cache',
			// Array of twig options:
			'options' => [
				'auto_reload' => true,
			],
			'globals' => [
				'html' => ['class' => '\yii\helpers\Html'],
			],
			'uses' => ['yii\bootstrap'],
		],
	]
];
